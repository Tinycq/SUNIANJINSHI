<?php require_once("header.php")?>
        <div class="row" id="info">
            <div class="index_box">
            <form class="form" role="form" method="post" action="login.php" onkeydown="if(event.keyCode==13){return false;}">
                <div class="form-group row">
                    <label for="name" class="col-md-2 control-label">
                        <h6 class="label_title">姓名</h6>
                    </label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="name" placeholder="姓名" name="name" onkeyup="showName(this.value)" )>
                    </div>
                </div>
                <div class="form-group  row">
                    <label for="myclass" class="col-md-2 control-label">
                        <h6 class="label_title">班级</h6>
                    </label>
                    <div class="col-md-10">
                        <!-- <input type="text" class="form-control" id="myclass" placeholder="所在班级">-->
                        <select name="class" id="class" class="form-control">
                            <option value="8">八班</option>
                            <option value="11">十一班</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">                   
                     <input type="submit" value="提交" name="userinfo" id="userinfo" class="btn btn-info  btn-block">
                    </div>

                </div>
            </form>

        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <span class="mainarea" id="mainarea"></span>


            </div>
        </div>






<?php require_once("footer.php")?>
