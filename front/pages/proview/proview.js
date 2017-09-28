//proview.js
//获取应用实例
var app = getApp()
Page({
  data: {
  },
  onLoad: function (options) {
    var self = this
    wx.request({
      url: app.website + '/index/product/detail?id=' + options.id,
      data: {
      },
      header: {
        'content-type': 'application/json'
      },
      success: function (res) {
        self.setData({
          website: app.website,
          data: res.data
        })
      },
    })
  },
  //事件处理函数
  bindViewTap: function (e) {
    var data = (e.target.dataset)
    wx.navigateTo({
      url: '../proview/proview?id=' + data.id
    })
  }

})
