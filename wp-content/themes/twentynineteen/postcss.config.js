module.exports = async () => ({
    plugins: [(await import('postcss-focus-within')).default()]
});
