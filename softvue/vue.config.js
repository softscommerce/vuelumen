const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true
});

module.exports = defineConfig({
  lintOnSave: false,
});



// vue inspect --plugins // plugin plugin_name
// module.exports = {
//   chainWebpack: config =>{
//     config.plugins.delete('prefetch');
//   }
// }
