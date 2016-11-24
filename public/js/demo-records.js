define(function () {
  var DemoRecords = function () {

  };

  DemoRecords.prototype.indexAction = function (options) {
    $.extend(this, options);
  };

  return new DemoRecords();
});
