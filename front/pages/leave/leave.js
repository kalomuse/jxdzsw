// pages/leave/leave.js
var app = getApp()
Page({

  /**
   * 页面的初始数据
   */
  data: {
  
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
  
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {
  
  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {
  
  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {
  
  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {
  
  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {
  
  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {
  
  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {
  
  },

  bindMobile: function (e) {
    this.setData({
      mobile: e.detail.value
    })
  },
  bindEmail: function (e) {
    this.setData({
      email: e.detail.value
    })
  },
  bindContent: function (e) {
    this.setData({
      content: e.detail.value
    })
  },

  //联系我们页面事件处理函数
  bindMessage: function (e) {
    if (!this.data.mobile && !this.data.email) {
      wx.showToast({
        title: '请输入联系方式',
        duration: 2000
      })
    }
    if (!this.data.content)
      wx.showToast({
        title: '请输入内容',
        duration: 2000
      })

    var data = {
      content: this.data.content,
    }
    if (this.data.mobile)
      data['mobile'] = this.data.mobile
    if (this.data.email)
      data['email'] = this.data.email
      
    wx.request({
      url: app.website + '/index/message',
      data: data,
      header: {
        'content-type': 'application/json'
      },
      success: function (res) {
        if(res.data.status == 'ok') {
          wx.showToast({
            title: '提交完成',
            duration: 2000
          })
        } else {
          wx.showToast({
            title: res.data.msg,
            duration: 2000
          })
        }
      },
    })
  },
})