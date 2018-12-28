const glob = require("glob")

module.exports = {
    proxyUrl: "http://offbeat.test",
    entry: {
        main: [
            './resources/js/main.js',
            './resources/sass/main.scss',
        ],
        // images: glob.sync('./resources/img/**.{png,jpg,svg}'),
    },
};