
var version = '20150122';

seajs.config({
    //基础路径
    base: '/',
    // 别名配置
    alias: {
        //common公共的js
        jquery: 'lib/jquery/jquery.min.js',
        bootstrap:"lib/bootstrap/js/bootstrap.min.js"
    },
    // 预加载项
    preload: ["jquery"],
    debug: true,
    // 映射配置
    map: [
        [/^(.*\.(?:css|js))(?:.*)$/i, '$1?version=' + version]
    ],
    // 文件编码
    charset: 'utf-8'
});
