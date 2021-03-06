<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>发布招标</title>
	<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=1"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="/TenderPlatform/Public/css/head-same.css"/>
	<link rel="stylesheet" type="text/css" href="/TenderPlatform/Public/css/show-bid.css"/>

    <!--<link href="/TenderPlatform/Public/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <!--<link href="/TenderPlatform/Public/css/AdminLTE.css" rel="stylesheet" type="text/css"/>-->
    <!--<link rel="stylesheet" href="/TenderPlatform/Public/plugins/uploadify/uploadify.css" />-->

    <script src="/TenderPlatform/Public/js/html5shiv.min.js"></script>
    <script src="/TenderPlatform/Public/js/respond.min.js"></script>
    <![endif]-->
    <script src="/TenderPlatform/Public/js/jquery.min.js"></script>
    <script src="/TenderPlatform/Public/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/TenderPlatform/Public/js/common.js"></script>
    <script src="/TenderPlatform/Public/plugins/plugins/plugins.js"></script>
    <script type="text/javascript" src="/TenderPlatform/Public/js/mydate.js"></script>
    <!--<script src="/TenderPlatform/Public/plugins/formValidator/formValidator-4.1.3.js"></script>-->
    <!--<script src="/TenderPlatform/Public/plugins/uploadify/jquery.uploadify.min.js"></script>-->
</head>

<script>
    function search() {
        var q = [];
        q.push('keyword='+$('#keyword').val());
        location.href = '/TenderPlatform/index.php/Home/Index/index?'+q.join('&');
    }

    function bid() {
        var params = {};

        var category = $('#category').val();
        var categoryname = $('#categoryname').val();
        var projectname = $('#projectname').val();
        var type = $('#type').text();
        var province = $('#province').val();
        var city = $('#city').val();
        var enddate = $('#enddate').val();
        var registeredcapital = $('#registeredcapital').val();
        var servicearea = $('#servicearea').val();
        var servicetype = $('#servicetype').text();
        var projectcount = $('#projectcount').val();
        if(!$('#areacount').is(":checked")) {
            var areacount = 1;
        } else {
            var areacount = 2;
        }

        var otherconditions = $('#otherconditions').val();

        var needimg1;
        if(!$('#needimg1').is(":checked")) {
            needimg1 = 1;
        } else {
            needimg1 = 2;
        }
        var needimg2;
        if(!$('#needimg2').is(":checked")) {
            needimg2 = 1;
        } else {
            needimg2 = 2;
        }
        var needimg3;
        if(!$('#needimg3').is(":checked")) {
            needimg3 = 1;
        } else {
            needimg3 = 2;
        }
        var needimg4;
        if(!$('#needimg4').is(":checked")) {
            needimg4 = 1;
        } else {
            needimg4 = 2;
        }
        var needimg5;
        if(!$('#needimg5').is(":checked")) {
            needimg5 = 1;
        } else {
            needimg5 = 2;
        }
        var needimg6;
        if(!$('#needimg6').is(":checked")) {
            needimg6 = 1;
        } else {
            needimg6 = 2;
        }
        var needimg7;
        if(!$('#needimg7').is(":checked")) {
            needimg7 = 1;
        } else {
            needimg7 = 2;
        }
        var needimg8;
        if(!$('#needimg8').is(":checked")) {
            needimg8 = 1;
        } else {
            needimg8 = 2;
        }

        params.category = category;
        params.categoryname = categoryname;
        params.projectname = projectname;
        params.type = type;
        params.province = province;
        params.city = city;
        params.enddate = enddate;
        params.registeredcapital = registeredcapital;
        params.servicearea = servicearea;
        params.servicetype = servicetype;
        params.projectcount = projectcount;
        params.areacount = areacount;
        params.otherconditions = otherconditions;
        params.needimg1 = needimg1;
        params.needimg2 = needimg2;
        params.needimg3 = needimg3;
        params.needimg4 = needimg4;
        params.needimg5 = needimg5;
        params.needimg6 = needimg6;
        params.needimg7 = needimg7;
        params.needimg8 = needimg8;

        $.post("/TenderPlatform/index.php/Home/Index/bid", params, function (data, textStatus) {
            var json = {};
            if(typeof(data )=="object"){
                json = data;
            }else{
                json = eval("("+data+")");
            }
            if (json.code == '200' && json.isSuccess) {
                alert(json.msg);
                location.href = '/TenderPlatform/index.php/Home/Index/index';
            } else {
                alert(json.msg);
            }
        });
    }
</script>

<body>
	<div class="head">
		<div class="nav-head">
            <div class="logo-img">
                <a href="/TenderPlatform/index.php/Home/Index/index"><img src="/TenderPlatform/Public/img/index/logo.png" alt="logo"/></a>
            </div>
            <div class="search-area">
                <input type="text" id="keyword"/>
                <a><img onclick="search()" src="/TenderPlatform/Public/img/index/search-button.png" alt="search-logo"></a>
            </div>
			<div class="login-area">

                <!--登录之后显示用户名-->
                <?php if($_SESSION['username']) { ?>
                <a class="admin-name" href="/TenderPlatform/index.php/Home/User/toMyProfile">欢迎你,<?php echo (session('username')); ?></a>
                <?php } else { ?>
                <a href="/TenderPlatform/index.php/Home/User/toLogin"><img src="/TenderPlatform/Public/img/index/login-button.png"></a>
                <a href="/TenderPlatform/index.php/Home/User/toRegister"><img src="/TenderPlatform/Public/img/index/sign-button.png"></a>
                <?php } ?>
			</div>
			
		</div>
	</div>

	<div class="current-pos">
		<img src="/TenderPlatform/Public/img/index/pos.png" alt="定位logo"/>
		<p><span class="pos-tips">当前位置:</span>首页&gt;发布招标</p>
	</div>
<form method="post" action="/TenderPlatform/index.php/Home/Index/bid" enctype="multipart/form-data">
	<div class="bid-details">
        <input type="text" id="errorMsg" value="<?php echo ($msg); ?>"/>
		<div class="bid-title">
			<p>发布招标</p>
		</div>

		<div class="bid-name">
			<span>招标名称:</span>
			<div class="text-bg"></div>
			<input type="text" id="projectname" name="projectname"/>
		</div>

        <div class="bid-area">
            <span>招标区域:</span>
            <div class="choose-box choose-box1">
                <input type="text" hidden="true" id="province" name="province"/>
                <p>--请选择--</p>
                <a id="triangle1" class="triangle">
                    <img  src="/TenderPlatform/Public/img/show-bid/triangle.png">
                </a>
            </div>

            <div class="category-list category-list1">
                <ul>
                    <?php if(is_array($provinces)): $i = 0; $__LIST__ = $provinces;if( count($__LIST__)==0 ) : echo "没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php echo ($vo['province_name']); ?></li><?php endforeach; endif; else: echo "没有数据" ;endif; ?>
                </ul>
            </div>

            <div id="area_data" hidden="true">
                <?php if(is_array($provinces)): $i = 0; $__LIST__ = $provinces;if( count($__LIST__)==0 ) : echo "没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul id="<?php echo ($vo['province_name']); ?>">
                        <?php if(is_array($cities)): $i = 0; $__LIST__ = $cities;if( count($__LIST__)==0 ) : echo "没有数据" ;else: foreach($__LIST__ as $key=>$voc): $mod = ($i % 2 );++$i; if($voc["province_id"] == $vo["id"]): ?><li id="<?php echo ($voc['id']); ?>"
                                    onclick="javascript:selectCity(<?php echo ($voc['id']); ?>)">
                                    <?php echo ($voc['city_name']); ?>
                                </li><?php endif; endforeach; endif; else: echo "没有数据" ;endif; ?>
                    </ul><?php endforeach; endif; else: echo "没有数据" ;endif; ?>
            </div>

            <div class="choose-box choose-box4">
                <input type="text" hidden="true" id="city" name="city"/>
                <p>--请选择--</p>
                <a id="triangle4" class="triangle">
                    <img  src="/TenderPlatform/Public/img/show-bid/triangle.png">
                </a>
            </div>

            <div class="category-list category-list4">
                <p  id="cities"></p>
                <ul>
                </ul>
            </div>
        </div>

		<div class="choose-cate">
			<span >招标分类:</span>
			
			<ul>
				<li>
					<input type="checkbox" name="category1"/>
					设备设施租赁
				</li>
				<li>
					<input type="checkbox" name="category2"/>
					设备设施销售
				</li>
				<li>
					<input type="checkbox" name="category3"/>
					可行性研究
				</li>
				<li>
					<input type="checkbox" name="category4"/>
					设计
				</li>
				<li>
					<input type="checkbox" name="category5"/>
					勘察
				</li>
				<li>
					<input type="checkbox" name="category6"/>
					测绘
				</li>
				<li>
					<input type="checkbox" name="category7"/>
					检测
				</li>
				<li>
					<input type="checkbox" name="category8"/>
					监测
				</li>
				<li>
					<input type="checkbox" name="category9"/>
					专业工程承包
				</li>
				<li>
					<input type="checkbox" name="category10"/>
					劳务承包
				</li>
				<li>
					<input type="checkbox" name="category11"/>
					结构加固
				</li>
				<li>
					<input type="checkbox" name="category12"/>
					BIM
				</li>

				<div class="clear"></div>
			</ul>
		
			
		</div>

		<div class="apply-deadline">
			<span >报名截止日期:</span>
			<div class="text-bg"></div>
			<input type="text" id="enddate" name="enddate" onfocus="MyCalendar.SetDate(this)" value="<?php echo ($time); ?>"/>
		</div>

		<div class="sign-money">
			<span class="sign-monry-title">注册资本:</span>
			<div class="text-bg"></div>
			<input type="text" id="registeredcapital" name="registeredcapital" />
			<span class="sign-money-shine">万元(人民币)以上</span>
		</div>


		<div class="service-area">
			<span>服务区域:</span>
			<span class="cover-text">覆盖</span>
			<div class="text-bg"></div>
			<input type="text" id="servicearea" name="servicearea"/>
			<p>请选择服务区域</p>
			<span class="full-area">全境</span>
		</div>

		<div class="service-quality">
			<span >服务资质:</span>
			<div class="choose-box choose-box3">
                <input type="text" hidden="true" id="servicetype" name="servicetype"/>
				<p>--请选择--</p>
				<a id="triangle3" class="triangle">
					<img  src="/TenderPlatform/Public/img/show-bid/triangle.png">
				</a>
			</div>
			<span class="_more">及以上</span>
			<div class="category-list category-list3">
				<ul>
					<li>开发商</li>
					<li>供应商</li>
				</ul>
			</div>
			
		</div>

		<div class="project-num">
			<span>项目案例数:</span>
			<div class="text-bg"></div>
			<input type="text" id="projectcount" name="projectcount"/>
			<span class="_more2">及以上</span>
		</div>
		
		<div class="only-bid">
			<input type="checkbox" id="areacount" name="areacount">
			仅限招标区域内的项目案例
		</div>
		<div class="other-conditions">
			<p>其他报名条件:</p>
			<div class="input-area">
				<p>请说明以下招标该类供应商的其他要求</p>
				<textarea rows="10" cols="20" name="otherconditions" id="otherconditions">
				
				</textarea>
			</div>
			
		</div>

		<div class="perfect-data">
			<p>报名时需要供应商同时完善和提交以下资料:</p>

			<ul>
				<li>
					<input type="checkbox" id="needimg1" name="needimg1"/>
					组织机构代码证
				</li>
				<li>
					<input type="checkbox" id="needimg2" name="needimg2"/>
					税务登记证
				</li>
				<li>
					<input type="checkbox" id="needimg3" name="needimg3"/>
					服务资质证
				</li>
				<li>
					<input type="checkbox" id="needimg4" name="needimg4"/>
					主营业务类型
				</li>
				<li>
					<input type="checkbox" id="needimg5" name="needimg5"/>
					企业联系信息
				</li>
				<li>
					<input type="checkbox" id="needimg6" name="needimg6"/>
					产品品牌
				</li>
				<li>
					<input type="checkbox" id="needimg7" name="needimg7"/>
					近三年项目案例
				</li>
				<li>
					<input type="checkbox" id="needimg8" name="needimg8"/>
					企业所获荣誉
				</li>

				<div class="clear"></div>
			</ul>
		</div>

        <div class="bid-long">
            <span>招标详情:</span>
            <div class="load-file">
                <div class="text-bg"></div>
                <p>请上传word文档</p>
                <a class="del-bt"></a>
                <a class="onload-bt"><img src="/TenderPlatform/Public/img/show-bid/onload-files.png"></a>
                <a class="choose-bt"><img src="/TenderPlatform/Public/img/show-bid/choose-files.png"></a>
                    <input class="file-start" id="img1" name="img1" type="file" style="display:none;"/>

                <div class="clear"></div>
            </div>
            <div class="load-file">
                <div class="text-bg"></div>
                <p>请上传word文档</p>
                <a class="del-bt"></a>
                <a class="onload-bt"><img src="/TenderPlatform/Public/img/show-bid/onload-files.png"></a>
                <a class="choose-bt"><img src="/TenderPlatform/Public/img/show-bid/choose-files.png"></a>
                    <input class="file-start" id="img2" name="img2" type="file" style="display:none;"/>
                <div class="clear"></div>
            </div>
            <div class="load-file">
                <div class="text-bg"></div>
                <p>请上传word文档</p>
                <a class="del-bt"></a>
                <a class="onload-bt"><img src="/TenderPlatform/Public/img/show-bid/onload-files.png"></a>
                <a class="choose-bt"><img src="/TenderPlatform/Public/img/show-bid/choose-files.png"></a>
                    <input class="file-start" id="img3" name="img3" type="file" style="display:none;"/>
                <div class="clear"></div>
            </div>


        </div>

        <div>
            <input class="show-soon" type="submit" value="" />
		</div>
	</div>
</form>
<script type="text/javascript">
$(function(){
    var errorMsg = $("#errorMsg").val();
    $("#errorMsg").val("");
    if(errorMsg != "") {
        alert(errorMsg);
    }

	var angelClick_time1=0;
	var angelClick_time2=0;
	var angelClick_time3=0;
	//倒三角单击事件

	$("#triangle1").click(function(e){
		e.stopPropagation();
		if(angelClick_time1%2==0){
			$(".category-list2").css("display","none");
			$(".category-list3").css("display","none");
			$(".category-list4").css("display","none");
			$(".category-list1").slideDown(50);
			angelClick_time1++;
		}else{
			$(".category-list1").css("display","none");
			angelClick_time1++;
		}
	});
	$("#triangle2").click(function(e){
		e.stopPropagation();
		if(angelClick_time2%2==0){
			$(".category-list1").css("display","none");
			$(".category-list3").css("display","none");
			$(".category-list4").css("display","none");
			$(".category-list2").slideDown(50);
			angelClick_time2++;
		}else{
			$(".category-list2").css("display","none");
			angelClick_time2++;
		}
	});
	$("#triangle3").click(function(e){
		e.stopPropagation();
		if(angelClick_time3%2==0){
			$(".category-list1").css("display","none");
			$(".category-list2").css("display","none");
			$(".category-list4").css("display","none");
			$(".category-list3").slideDown(50);
			angelClick_time3++;
		}else{
			$(".category-list3").css("display","none");
			angelClick_time3++;
		}
	});
	$("#triangle4").click(function(e){
		e.stopPropagation();
		if(angelClick_time3%2==0){
			$(".category-list1").css("display","none");
			$(".category-list2").css("display","none");
			$(".category-list3").css("display","none");
			$(".category-list4").slideDown(50);
			angelClick_time3++;
		}else{
			$(".category-list4").css("display","none");
			angelClick_time3++;
		}
	});
	$("body:not(#triangle1)").click(function(){
		$(".category-list").css("display","none");
	});

	//选择类型下拉框
	
	$(".category-list1 ul li").click(function(){
		$(".category-list1").css("display","none");
			$(".choose-box1").find($("p")).html($(this).html());
        $("#province").val($(this).html());

        $(".choose-box4").find($("p")).html("--请选择--");
        $("#city").val("");

        var id = $("#province").val();
        $("#cities").next().replaceWith($("#" + id).clone(true));
	});

	$(".category-list2 ul li").click(function(){
		$(".category-list2").css("display","none");
			$(".choose-box2").find($("p")).html($(this).html());
	});

	$(".category-list3 ul li").click(function(){
		$(".category-list3").css("display","none");
			$(".choose-box3").find($("p")).html($(this).html());
        $("#servicetype").val($(this).html());
	});

    $(".category-list4 ul li").click(function(){
        alert("fuck");
		$(".category-list4").css("display","none");
		$(".choose-box4").find($("p")).html($(this).html());
        $("#city").val($(this).html());
	});
	

	$(".service-area input").each(function(){
		var defaultVal=$(this).next().html();
		$(this).focus(function(){
			$(this).next().html("");
		});
		$(this).blur(function(){
			if($(this).val()==""){
				$(this).next().html(defaultVal);
			}
			
		});
	});

    var file_len=$(".load-file").length-1;
    var file_content=$(".load-file:eq(0)").prop("outerHTML");
    //上传文件封装
    function loadfile_click(){
        $(".choose-bt").each(function(){
            $(this).click(function(){
                $(this).parent().find($(".file-start")).click();
            });
        });
    }
    loadfile_click();



    //文件上传框事件封装
    function file_val(){
        $(".file-start").each(function(){
            $(this).change(function(){
                var val=$(this).val();
                $(this).parent().find($("p")).html(val);
            });
        });
    }

    file_val();
    //删除按钮事件封装
    function del_button(){
        $(".del-bt").each(function(){
            $(this).click(function(){

                if(file_len==0){
                    alert("请保留一个上传文件选项");
                    return;
                }else{
                    $(this).parent().prop("outerHTML","");
                    file_len--;
                }

            });
        });
    }
    del_button();


    //增加文件上传匡
    $(".add-file a").click(function(){

        $(".load-file:eq("+file_len+")").after(file_content);
        file_len=$(".load-file").length-1;

        $(".del-bt").each(function(){
            $(this).unbind("click");
        });
        $(".file-start").each(function(){
            $(this).unbind("change");
        });
        $(".choose-bt").each(function(){
            $(this).unbind("click");
        });
        file_val();
        del_button();
        loadfile_click();
    });
    function selectCity(cityId) {
        var city = $("#"+cityId).html();
        $(".choose-box4").find($("p")).html(city);
        $("#city").val($.trim(city));
    }
});

    

</script>

</body>
</html>