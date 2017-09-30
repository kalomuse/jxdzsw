//contactus.js
//获取应用实例
var app = getApp()
Page({
  data: {
  },
  onLoad: function () {
    var self = this
    wx.request({
      url: app.website + '/index/company', 
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
  }
})
