//news.js
//获取应用实例
var app = getApp()
Page({
  onLoad: function () {
    var self = this
    wx.request({
      url: app.website + '/index/news', 
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
  data: {
  },
  //事件处理函数
  bindViewTap: function (e) {
    var data = (e.target.dataset.id || e.currentTarget.dataset.id)
    wx.navigateTo({
      url: '../newsview/newsview?id=' + data
    })
  }
 
})
