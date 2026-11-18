module.exports = {
    // Relative to Main Webpack Directory file
    // if current webpack dir is C:\PROJECT_MAIN_DIR\react-webpack
    // '../media' means C:\PROJECT_MAIN_DIR\media
    // All folder structure will be preserved
    // Never put the output inside the input folder

    sourceFolder: '../media',
    destinationFolder: '../optimized',

    // Image quality 0-100
    pngQuality: 50,
    jpgQuality: 60
};