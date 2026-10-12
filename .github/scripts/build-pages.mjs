import { readdirSync, readFileSync, writeFileSync, mkdirSync, cpSync, existsSync } from 'node:fs';
import { join, dirname } from 'node:path';

const ROOT = process.cwd();
const OUT = process.env.OUT_DIR || join(ROOT, '_site');
const SERVER = process.env.PHP_SERVER || 'http://127.0.0.1:8000';
const BASE = (process.env.BASE_PATH || '').replace(/\/+$/, '');
const DYNAMIC = (process.env.DYNAMIC_ORIGIN || '').replace(/\/+$/, '');
const SERVER_ONLY = ['send-mail', 'live-preview'];

function mapPath(value) {
  if (!value.startsWith('/') || value.startsWith('//')) return value;
  const match = value.match(/^([^?#]*)(.*)$/);
  let path = match[1];
  const rest = match[2];
  const name = path.replace(/^\/+/, '').replace(/\.php$/, '');
  if (SERVER_ONLY.includes(name)) {
    return (DYNAMIC ? DYNAMIC : BASE) + path + rest;
  }
  if (/\.php$/.test(path)) {
    path = name === 'index' ? '/' : '/' + name;
  }
  return BASE + path + rest;
}

function rewriteHtml(html) {
  html = html.replace(/(\s(?:href|src|action|poster|data-[a-z-]+))="(\/[^"]*)"/g, (m, attr, value) => `${attr}="${mapPath(value)}"`);
  html = html.replace(/(\ssrcset)="([^"]*)"/g, (m, attr, value) => `${attr}="${value.split(',').map((part) => part.trim().replace(/^(\/\S*)/, (p) => mapPath(p))).join(', ')}"`);
  html = html.replace(/url\((['"]?)(\/[^)'"]*)\1\)/g, (m, q, value) => `url(${q}${mapPath(value)}${q})`);
  return html;
}

function rewriteCss(css) {
  return css.replace(/url\((['"]?)(\/[^)'"]*)\1\)/g, (m, q, value) => `url(${q}${mapPath(value)}${q})`);
}

function rewriteJs(js) {
  return js
    .split("'/industries.php#'").join(`'${mapPath('/industries.php')}#'`)
    .split("'/thank-you.php'").join(`'${mapPath('/thank-you.php')}'`)
    .split("/^\\/works(\\.php)?\\/?$/").join("/\\/works(\\.php|\\.html)?\\/?$/");
}

async function main() {
  mkdirSync(OUT, { recursive: true });
  cpSync(join(ROOT, 'assets'), join(OUT, 'assets'), { recursive: true });

  const cssFile = join(OUT, 'assets/css/styles.css');
  writeFileSync(cssFile, rewriteCss(readFileSync(cssFile, 'utf8')));
  const jsFile = join(OUT, 'assets/js/main.js');
  writeFileSync(jsFile, rewriteJs(readFileSync(jsFile, 'utf8')));

  const pages = readdirSync(ROOT).filter((f) => f.endsWith('.php')).map((f) => f.replace(/\.php$/, '')).filter((n) => !SERVER_ONLY.includes(n));
  for (const name of pages) {
    const res = await fetch(`${SERVER}/${name}.php`);
    if (!res.ok) throw new Error(`${name}.php returned ${res.status}`);
    const html = rewriteHtml(await res.text());
    const file = join(OUT, name + '.html');
    mkdirSync(dirname(file), { recursive: true });
    writeFileSync(file, html);
    console.log('built', name + '.html');
  }

  if (existsSync(join(ROOT, 'sitemap.xml'))) cpSync(join(ROOT, 'sitemap.xml'), join(OUT, 'sitemap.xml'));
  writeFileSync(join(OUT, '.nojekyll'), '');
}

main().catch((err) => {
  console.error(err);
  process.exit(1);
});
