const plugins = {
    "@tailwindcss/postcss": {},
    "autoprefixer": {},
}

if (process.env.NODE_ENV === 'production') {
    plugins['cssnano'] = {
        preset: 'default',
    }
}

export default {
  plugins
}
