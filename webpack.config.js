const path = require('path')
const config = {
    entry: {
        home: './src/js/index.js'
    },
    mode: 'production',
    output: {
        path: path.join(__dirname, 'public/js/'),
        filename: '[name].js'
    }
}

module.exports = config