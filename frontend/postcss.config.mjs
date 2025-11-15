const plugins = {
    "@tailwindcss/postcss": {},
    "autoprefixer": {},
}

if (process.env.NODE_ENV === 'production') {
    plugins['cssnano'] = {
        preset: 'default',
    };
    
    plugins['postcss-hash'] = {
        algorithm: 'sha256',
        trim: 12,
    };
}

export default {
  plugins
}