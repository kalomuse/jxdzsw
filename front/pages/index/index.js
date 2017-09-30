//index.js
//获取应用实例
var app = getApp()
Page({
  onLoad:function(){
    var self = this
    wx.request({
      url: app.website,
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
  //查看更多
  more_product: function (e) {
    var type = this.data.data.d_product
    wx.navigateTo({
      url: '../product/product?type=' + type
    })
  },
  more_case: function (e) {
    var type = this.data.data.d_case
    wx.navigateTo({
      url: '../case/case?type=' + type
    })
  },
  //产品详情页面事件处理函数
  detail: function (e) {
    var data = (e.target.dataset.id || e.currentTarget.dataset.id)
    wx.navigateTo({
      url: '../proview/proview?id=' + data
    })
  },
  //联系我们页面事件处理函数
  bindcontactus: function () {
    wx.navigateTo({
      url: '../contactus/contactus'
    })
  },
  //新闻事件处理函数
  bindVnews: function () {
    wx.navigateTo({
      url: '../newsview/newsview'
    })
  }
})
