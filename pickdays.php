<div class="container" id="datearea">
    <div class="row" >
    <article>
        <div class="col-md-12" >
            <h4>放假日期选择(你的放假日期不对吗？抓紧改吧！)</h4>

            <p>请在下面的下拉框中选择你放假的开始和结束日期</p>
        </div>

        <form class="form" role="form" id="timepicker" method="post" action="" onkeydown="if(event.keyCode==13){return false;}">
            <div class="form-group">
                <label for="name" class="col-md-2 control-label">
                    <h6 class="pull-right">开始放假日期: </h6>
                </label>
                <div class="col-md-3">
                    <input type="text" class="form-control date start" id="starttime" name="starttime" placeholder="开始放假日期" data-date-format="YY-MM-DD">
                </div>
            </div>
            <div class="form-group">
                <label for="myclass" class="col-md-2 control-label">
                    <h6 class="pull-right">结束放假日期: </h6>
                </label>
                <div class="col-md-3">
                    <input type="text" class="form-control date end" id="endtime"  name="endtime" placeholder="结束日期" data-date-format="YY-MM-DD">
                </div>
            </div>
            <input type="hidden" value="<?php echo $name?>" name="name" id="name"\>
            
            <div class="col-md-2 ">
            <input type="button" value="提交" name="submit" id="submit_time"  class="btn btn-info btn-block">
            </div>        
        </form>


    </article>
</div>
</div>


<script src="js/moment.js"></script>
<script src="js/pikaday.js"></script>
<script>
//    var picker1 = new Pikaday({
//        field: document.getElementById('endtime'),
//        firstDay: 1,
//        minDate: new Date('2013-07-01'),
//        maxDate: new Date('2020-12-31'),
//        onSelect: function() {
//            var date = document.createTextNode(this.getMoment().format('Do MMMM YYYY') + ' ');
//            document.getElementById('selected').appendChild(date);
//        }
//    });
//    picker1.setMoment(moment().dayOfYear(366));
//    
    var picker = new Pikaday(
    {
        field: document.getElementById('starttime'),
        firstDay: 1,
        minDate: new Date('2012-01-01'),
        maxDate: new Date('2020-12-31'),
        yearRange: [2000,2020]
    });
    
    var picker = new Pikaday(
    {
        field: document.getElementById('endtime'),
        firstDay: 2,
        minDate: new Date('2012-01-01'),
        maxDate: new Date('2020-12-31'),
        yearRange: [2012,2020]
    });
 

</script>