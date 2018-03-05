;(function($){

    let defaults = {
        imgUrl:[],//图片地址
        imgLen:4,//图片总数
        speed:4000,//轮播间隔时间
        direction:false,//到最后一页后的轮播方向
    }

    function carouselImg(element,options){
        this.element = element;
        this.options = $.extend({},defaults,options);

        this.init(this.options);
    }

    carouselImg.prototype = {
        init:function(options){
            let self = this;

            let _imgUrl = options.imgUrl;
            let _imgLen = options.imgLen;
            let _carouselDirection = options.direction;
            const _speed = options.speed;
            let _elem = this.element;   

            //创建imgUl
            let $imgUl = $('<ul class="imgUl"></ul>');
            _elem.append($imgUl);
            
            for(let i = 0;i<_imgLen;i++){
                //创建imgLi
                var $imgLi = $('<li class="imgLi"></li>');
                $(".imgUl").append($imgLi);
                //创建img
                var $img = $('<img class="carouselImg" />');
                for(let j = 0;j<_imgLen;j++){
                    $imgLi.append($img);
                }
            }     
            //console.log($(".carouselImg").length);
            //给img添加图片地址
            for(let k = 0;k<$(".carouselImg").length;k++){
                $(".carouselImg")[k].src = _imgUrl[k];
            }

             //创建底部按钮（显示当前是第几页或快速跳转到指定页）
             let $btnUl = $('<ul class="btnUl"></ul>');
             _elem.append($btnUl);
             for(let i = 0;i<_imgLen;i++){
                 var $btnLi = $('<li class="btnLi"></li>');
                 $btnUl.append($btnLi);
             }

             //创建上一张、下一张按钮
             let $prev = $('<span class="btn-img prevImg">&lt;</span>');
             let $next = $('<span class="btn-img nextImg">&gt;</span>');
             _elem.append($prev);
             _elem.append($next);

             _elem.mouseover(function(){
                 $(".btn-img").show();
             });
             _elem.mouseout(function(){
                $(".btn-img").hide();
            })

            //当前页数
            let _count = 0;
            //定时器名
            let _timer;
            //轮播是否已是最后一页
            let _islast = false;
            //li的宽
            let _liWidth = $imgLi[0].offsetWidth;
            //轮播方法
            function moveImg() {
                //初始化定时器  
                _timer = setInterval(function () {
                    if (_islast == false) {
                        _count++;
                        $imgUl[0].style.transform = "translate(" + -_liWidth * _count + "px)";
                        if (_count >= _imgLen - 1) {
                            _count = _imgLen - 1;
                            _islast = true;
                        }
                    }else {
                        if(_carouselDirection){
                            //再次从第一页开始
                            _count = 0;
                            $imgUl[0].style.transform = "translate(" + 0 + "px)";
                            _islast = false;
                        }else{
                            //从最后一页往回轮播
                            _count--;
                            $imgUl[0].style.transform = "translate(" + -_liWidth * _count + "px)";
                            if (_count <= 0) {
                                _count = 0;
                                _islast = false;
                            }
                        }
                        
                    }
                    //设置当前li与其兄弟li的样式
                    for(let i = 0;i<$(".btnLi").length;i++){
                        $(".btnLi")[i].style.backgroundColor = "rgba(255,255,255,0.2)";
                    }
                    $(".btnLi")[_count].style.backgroundColor = "rgba(255,255,255,0.8)";  
                }, _speed);          
            }     
            moveImg();

            //鼠标移入快速跳转到某页
            $(".btnUl").delegate('li','mouseover',function(ev){
                //console.log($(this).index());当前li的索引值
                //清除当前定时器
                clearInterval(_timer);
                if($(this).index() == _imgLen-1){
                    _islast = true;
                }
                if($(this).index() == 0){
                    _islast = false;
                }
                //将当前li的索引值赋给_count
                _count = $(this).index();
                $imgUl[0].style.transform = "translate(" + -_liWidth * _count + "px)";
                $(this).css("backgroundColor","rgba(255,255,255,0.8)"); 
                $(this).siblings().css("backgroundColor","rgba(255,255,255,0.2)");
            });

            $(".btnUl").delegate('li','mouseout',function(ev){
                //执行轮播
                moveImg();
            });

            //鼠标对上一页下一页方向按钮的操作
            $(".btn-img").mouseover(function(){
                //移入清除定时器
                clearInterval(_timer);
            });
            $(".btn-img").mouseout(function(){
                //移除恢复轮播
                moveImg();
            })

            $(".btn-img").each(function(){
                $(this).click(function(){
                    if($(this).index() == _imgLen-1){
                        _islast = true;
                    }
                    if($(this).index() == 0){
                        _islast = false;
                    }
                    //上一页
                    if($(this).hasClass("prevImg")){
                        if(_count!=0){
                            _count--;
                        }
                    }
                    //下一页
                    if($(this).hasClass("nextImg")){
                        if(_count!=_imgLen-1){
                            _count++;
                        }
                    }
                    $imgUl[0].style.transform = "translate("+ -_liWidth * _count +"px)";
                    for(let i = 0;i<$(".btnLi").length;i++){
                        $(".btnLi")[i].style.backgroundColor = "rgba(255,255,255,0.2)";
                    }
                    $(".btnLi")[_count].style.backgroundColor = "rgba(255,255,255,0.8)";
                });
            });
        }
    }
    
    $.fn.jqCarouselImg = function(options){
        new carouselImg(this,options);
    }

})(jQuery);