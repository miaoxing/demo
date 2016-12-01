define(function () {
  var DemoRecords = function () {
    // do nothing.
  };

  DemoRecords.prototype.indexAction = function (options) {
    $.extend(this, options);
  };

  return new DemoRecords();
});
