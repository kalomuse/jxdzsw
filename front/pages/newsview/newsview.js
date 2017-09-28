//newsview.js
//获取应用实例
var WxParse = require('../../wxParse/wxParse.js');
var app = getApp()
Page({
  data: {
  },
  onLoad: function (options) {
    var self = this
    wx.request({
      url: app.website + '/index/news/detail?id=' + options.id,
      data: {
      },
      header: {
        'content-type': 'application/json'
      },
      success: function (res) {
        console.log(res)
        var article = res.data.content;
        WxParse.wxParse('article', 'html', article, self, 5);
        self.setData({
          website: app.website,
          data: res.data
        })
      },
    })
  },

})
