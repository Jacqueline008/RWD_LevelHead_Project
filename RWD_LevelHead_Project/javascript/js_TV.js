var flag=0;

//设置当前行数为1
var willberow=1;

//********************************************************************************
//一开始的时候显示1-12商品
var request=new XMLHttpRequest();
request.open("POST","../php/TVNextClient.php");
var data="willberow="+willberow;
request.setRequestHeader("Content-type","application/x-www-form-urlencoded")
request.send(data);
//监视readyState的值的变化
request.onreadystatechange=function(){
    if(request.readyState===4){
        if(request.status===200){
            //
            var data=JSON.parse(request.responseText);
            //先将12个商品隐藏
            $(".pd").css("display","none");
            //展示反馈回的至多12个商品
            for(var i=0;i<data.products.length;i++){
                var pd=$(".pd").eq(i);
                pd.css("display","block");
                pd.find("img").attr("src",data.products[i].Pic);
                pd.find(".pd-sellprice span").html("￥"+data.products[i].SellPrice);
                pd.find(".pd-des span").html(data.products[i].Description);
                pd.find(".pd-saleaccount .pd-des-i").html(data.products[i].SaleAccount);
            }
            willberow=data.willberow;
            flag=data.flag;
            if(data.next=="0"){
                alert("将为您展示最后一页！");
            }
            //
        }else{
            alert("发生错误");
        }
    }
}





//********************************************************************************
//给下一页按钮添加点击事件
document.getElementById("toNext").addEventListener("click",function () {
    //创建一个xhr对象
    var request=new XMLHttpRequest();
    request.open("POST","../php/TVNextClient.php");
    var data="willberow="+willberow;
    request.setRequestHeader("Content-type","application/x-www-form-urlencoded")
    request.send(data);
    //监视readyState的值的变化
    request.onreadystatechange=function(){
        if(request.readyState===4){
            if(request.status===200){
                //
                var data=JSON.parse(request.responseText);
                //先将12个商品隐藏
                $(".pd").css("display","none");
                //展示反馈回的至多12个商品
                for(var i=0;i<data.products.length;i++){
                    var pd=$(".pd").eq(i);
                    pd.css("display","block");
                    pd.find("img").attr("src",data.products[i].Pic);
                    pd.find(".pd-sellprice span").html("￥"+data.products[i].SellPrice);
                    pd.find(".pd-des span").html(data.products[i].Description);
                    pd.find(".pd-saleaccount .pd-des-i").html(data.products[i].SaleAccount);
                }
                willberow=data.willberow;
                flag=data.flag;
                if(data.next=="0"){
                    alert("将为您展示最后一页！");
                }
                //
            }else{
                alert("发生错误");
            }
        }
    }
});


//********************************************************************************
//给上一页按钮添加点击事件
document.getElementById("toLast").addEventListener("click",function () {
    //创建一个xhr对象
    var request=new XMLHttpRequest();
    request.open("POST","../php/TVLastClient.php");
    var data="willberow="+willberow+"&flag="+flag;
    request.setRequestHeader("Content-type","application/x-www-form-urlencoded")
    request.send(data);
    //监视readyState的值的变化
    request.onreadystatechange=function(){
        if(request.readyState===4){
            if(request.status===200){
                //
                var data=JSON.parse(request.responseText);
                //先将12个商品隐藏
                $(".pd").css("display","none");
                //展示反馈回的至多12个商品
                for(var i=0;i<data.products.length;i++){
                    var pd=$(".pd").eq(i);
                    pd.css("display","block");
                    pd.find("img").attr("src",data.products[i].Pic);
                    pd.find(".pd-sellprice span").html("￥"+data.products[i].SellPrice);
                    pd.find(".pd-des span").html(data.products[i].Description);
                    pd.find(".pd-saleaccount .pd-des-i").html(data.products[i].SaleAccount);
                }
                willberow=data.willberow;
                flag=data.flag;
                if(data.last=="0"){
                    alert("将为您展示第一页！");
                }
                //
            }else{
                alert("发生错误");
            }
        }
    }
});