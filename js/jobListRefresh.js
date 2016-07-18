$(document).ready(function() {
    ajaxCode();
});

function ajaxCode(){
	//var isSearch = <?php echo $isSearch; ?>;
	//alert(isSelect);
	$(".page-numbers").click(function() {
       var id = $(this).attr("data-page");
       if(id!=undefined){
		    $.ajax({
            type: 'get',
            url: 'job-list.php',
            data: "page" + id,
            datatype: "html",
			beforeSend:function(){
				$('.filter-overlay').css('display','block');
			},
            success: function(data) {
			if(isSelect=='true'){
				$('.box-list-wrapper').load('jobList.php?keyword='+keyword+'&place=&searchPage='+id);
			}else{
				$('.box-list-wrapper').load('jobList.php?page=' + id);
			}
                
				//alert(id);
				$('.filter-overlay').css('display','none');
				$(window).scrollTop($('.box-list-wrapper').offset().top);
            }
        });
        return false;
	   }
    });
}

$(document).ajaxComplete(function(){
	ajaxCode();
})
/*
var ig = 2;

function defwe() {
    var element = document.getElementsByClassName('color-black');

    for (var i = 0; i < element.length; i++) {
        element[i].addEventListener("click", function() {
            createRequest();
        }, false);	
    }
}

function createRequest(evt) {
	alert('b');
    var pageListElement = document.querySelector(".box-list-wrapper");
    var pageNumber = document.querySelector('.page-numbers');
    //	var pageID =  pageNumber.getAttribute("data-page");
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
            pageListElement.innerHTML = xmlHttp.responseText;
        }
    }
    var url = "jobList.php?page=" + "2";
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
    //  alert(pageID);
      
你 们 好 吗
祝愿大家 永不光棍 脱离单身 早日结婚 
我 们 是【照片】
你们想要吃好料吗
想
那就定在7月9号 在 Dewan Seri Selinsing Simpang Ampat Semanggol Perak
赞成
赞成+1
jiancong 请客
没问题
【拍手】
首先 我们集合吃早晨
接着我们开始出发
最后我们才吃好料
sesiapa yang berminat untuk menyertai kenduri boleh tulis "i love 5t1"  dalam group ini
sekalian 
selamat malam
i love 5t1
}*/