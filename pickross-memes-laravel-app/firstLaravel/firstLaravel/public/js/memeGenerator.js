$isLibraryFile=0;
 function validateMemeForm(){
 if(document.getElementById('title').value.lenght<=10){
      document.getElementById('titleErrorMsg').innerHTML="Title dosen't looks Cool"; 
      return false;
    }
     if(document.getElementById('title').value===""){
         document.getElementById('titleErrorMsg').innerHTML="Please Enter Title";
         return false;
     } }
     
     function limitText(textArea){ 
document.getElementById('countdown').innerHTML= (140 - textArea.value.length)+" Characters Left";   
};

$(document).ready(function(){
    $("#moretags").click(function(){
        $(".moreTags").slideToggle("slow");
    });   
});
function makeOrientationBlock(){
    console.log("blockhello");
      $("#orientation").fadeIn();
      $("#orientation").fadeOut(5000);
      console.log( $("#c").css('height'));
      $("#orientation").css("height", $("#c").css('height'));
       $("#orientation").css("width", $("#c").css('width'));
}
 
$(document).ready(function(){
$("#canvasArea").hover(function(){
    if($isLibraryFile===0){
    $("#orientation").fadeIn();}
    }, function(){
         if($isLibraryFile===0){
        if ($('#orientation').is(':hover')) {
           
    }else{$("#orientation").fadeOut(5000);}}
});
});





var limit = 2;
$(document).ready(function(){
$(".moreTagCheck").click(function() {

    var bol = $(".moreTagCheck:checked").length >= 2;     
    $(".moreTagCheck").not(":checked").attr("disabled",bol);

});    
    

});

   $(document).ready(function() {
    
 $("#signatureRadio").click(function(){
  
    $("#signatureText").slideToggle(); 
//  $("#box").show();
 
  
  
});
});



(function (document, FileReader, Image ) {
    "use strict";
    var e = {}, 
        reader = new FileReader(),
        image = new Image(),
        ctxt = null, 
        writeTopMeme = null, 
        writeBottomMeme = null, 
        topIncrease =null,
        topDecrease=null,
        bottomIncrease =null,
        bottomDecrease=null,
        wrapText=null,
        wrapText2=null,
        renderMeme = null,
        renderColor = null,
        renderSignature = null,
        loadImg = null,
        loadImg2 = null,
        resizeCanvas= null,
        validateVertical= null,
        validateHorizontal=null,
        get = function (id) {
            return document.getElementById(id);
        }  
    ;
	var TO_RADIANS = Math.PI/180;
    
    e.topPadding = get("topPadding");
    e.bottomPadding = get("bottomPadding");
    e.ifile = get("ifile");
    e.file = get("file");
    e.ifile2=document.getElementsByClassName('ifile2');
    e.box2 = get("box2");
    e.library=get("library");
    e.topline = get("topline");
    e.bottomline = get("bottomline");
    e.signature = get("signatureText");
    e.c = get("c"); 
    e.topIncrease=get("top-increase-font-size");
    e.topDecrease=get("top-decrease-font-size");
    e.bottomIncrease=get("bottom-increase-font-size");
    e.bottomDecrease=get("bottom-decrease-font-size");
    e.downloadLink = get("downloadLink");
    e.signatureRadioBtn= get("signatureRadio");
    ctxt = e.c.getContext("2d");
    e.colorW=get("c1");
    e.colorB=get("c2");
    e.orientationBtn=get("orientation");
    var topf=20;
    var toptextPad=30;
    var bottomf=20;
    var lineHeightTop=25;
    var lineHeightBottom=25;
    var type='none';
    var imgHeight,canvasHeight;
    var signatureFontSize;
    var xImg; 
    var textColor="white";
    var textStrokeColor="black";
    var orientation="vertical";
    
    

    
    writeTopMeme = function (text, x, y) {
     type='top';
    ctxt.font = "bold " + topf + "pt Trebuchet MS’, Helvetica, sans-serif";        
            wrapText(text,x,y,type);
            
    };
    
      writeBottomMeme = function (text, x, y) {
     type='bottom';
            ctxt.font = "bold " + bottomf + "pt  Trebuchet MS’, Helvetica, sans-serif";
            wrapText(text,x,y,type);
              
    };
    var m;
  wrapText = function (text, x, y, type) {
m=0;
    var lines = text.split(".");

    for (var i = 0; i < lines.length; i++) {

        var words = lines[i].split(' ');
        var line = '';

        for (var n = 0; n < words.length; n++) {
            var testLine = line + words[n] + ' ';
            var metrics = ctxt.measureText(testLine);
            var testWidth = metrics.width;
             if (testWidth > e.c.width-80 && n > 0) {
                 if(type==='bottom'){
                     m++;
                  // y=y-lineHeight;
                 
                 }
                  else{
                       ctxt.fillText(line, x, y);
                ctxt.strokeText(line, x, y);
                y += lineHeightTop;}
               
                line = words[n] + ' ';
                
                
            }
            else {
                line = testLine;
            }
        }
                    
                 if(type==='top'){
         ctxt.fillText(line, x, y);
         ctxt.strokeText(line, x, y);
        
                y += lineHeightTop;}
                
    }
    if(type==='bottom'){
 wrapText2(e.bottomline.value, e.c.width / 2, e.c.height - 10,'bottom',m);}
 m=0;
};

wrapText2 = function (text, x, y, type,m) {
      if(orientation==="vertical"){
           ctxt.save();
            console.log("x="+xImg+"y="+e.topPadding.value+"width="+image.width+"height="+imgHeight);
           // ctxt.fillText("line", e.topPadding.value, -e.c.width+50);
            ctxt.drawImage(image, xImg, e.topPadding.value,  image.width,imgHeight);
        
            ctxt.restore(); }
                if(orientation==="horizontal"){
                  
                     ctxt.save();
            ctxt.translate(ctxt.width/2,ctxt.height/2);
            ctxt.rotate(90 * TO_RADIANS);
            console.log("x="+e.topPadding.value+"y="+xImg+"width="+imgHeight+"height="+image.height); 
          //  ctxt.fillText("line", e.topPadding.value, -e.c.width+50);
            ctxt.drawImage(image, e.topPadding.value, -e.c.width+xImg, imgHeight, image.height);
            ctxt.restore(); 
                    
                }
               
 
  
  //  ctxt.save();
    ctxt.globalAlpha = 0.6;
// ctxt.translate( e.c.width - 30, 100);
 // ctxt.rotate( 3* Math.PI / 2);

    ctxt.fillStyle = textColor;
		ctxt.save(); 
		ctxt.translate(e.c.width-22, e.c.height/2);
		ctxt.rotate(270 * TO_RADIANS);
  ctxt.drawImage(e.watermark, -70, -10,150,22);
  ctxt.restore();  
// hre
  //drawRotatedImage(e.watermark, e.c.width-40, e.c.height -(e.c.height/2), 270);
 /*  ctxt.textAlign = "left";
  
  ctxt.font = "normal 24px Arial Rounded MT Bold , Arial , sans-serif";
  
   ctxt.fillText("By "+e.signature.value, 10, e.c.height - 10);
 
   ctxt.font = "bold " + bottomf + "pt Impact, Charcoal, sans-serif";  */
 
   // ctxt.restore();
     ctxt.globalAlpha =1;
    ctxt.textAlign = "center";             
    var lines = text.split(".");

    for (var i = 0; i < lines.length; i++) {

        var words = lines[i].split(' ');
        var line = '';

        for (var n = 0; n < words.length; n++) {
            var testLine = line + words[n] + ' ';
            var metrics = ctxt.measureText(testLine);
            var testWidth = metrics.width;
             if (testWidth > e.c.width-80 && n > 0) {
                 if(type==='bottom'){
                   
                       ctxt.fillText(line, x, y-(lineHeightBottom*m));
                 ctxt.strokeText(line, x, y-(lineHeightBottom*m));  
              /*       if(m===1){
                        ctxt.fillText(line, x, y-(lineHeightBottom*m));
                 ctxt.strokeText(line, x, y-(lineHeightBottom*m));  
                     }
                      if(m===2){
                         ctxt.fillText(line, x, y-(lineHeightBottom*m));
                 ctxt.strokeText(line, x, y-(lineHeightBottom*m));  
                     }
                      if(m===3){
                         ctxt.fillText(line, x, y-(lineHeightBottom*m));
                 ctxt.strokeText(line, x, y-(lineHeightBottom*m));   
                     }
                      if(m===4){
                        ctxt.fillText(line, x, y-(lineHeightBottom*m));
                 ctxt.strokeText(line, x, y-(lineHeightBottom*m));   
                     } */
                 m--;
                 }
                
                line = words[n] + ' ';
              
                
            }
            else {
                line = testLine;
            }
        }
                    if(type==='bottom'){
                    
        ctxt.fillText(line, x, y);
         ctxt.strokeText(line, x, y);}
       
                
    }
};
    
    topIncrease = function(){
        topf++;
        lineHeightTop++;
        toptextPad++;
        renderMeme();
    };
    topDecrease = function(){
        topf--;
        lineHeightTop--;
        toptextPad--;
        renderMeme();
        
        
    };
     bottomIncrease = function(){
        bottomf++;
        lineHeightBottom++;
        renderMeme();
    };
    bottomDecrease = function(){
        bottomf--;
        lineHeightBottom--;
        renderMeme();
        
        
    };
    
  
	renderMeme = function () {
            renderColor();
         
            
               ctxt.drawImage(image, xImg, e.topPadding.value, image.width, imgHeight);
            
           
	if(imgHeight<550 && imgHeight>=250){ e.watermark = get("watermark2");	  
        ctxt.drawImage(e.watermark, e.c.width-220, e.c.height - 10 -lineHeightBottom ,130,20 );
           signatureFontSize="12px";}  //important
    if(imgHeight<950 && imgHeight>=550){ e.watermark = get("watermark2");  
        ctxt.drawImage(e.watermark, e.c.width-220, e.c.height - 10 -lineHeightBottom ,89,10 );
    signatureFontSize="12px";}
    if(imgHeight<1650 && imgHeight>=950){ e.watermark = get("watermark2");  
        ctxt.drawImage(e.watermark, e.c.width-220, e.c.height - 10 -lineHeightBottom ,304,34 );
    signatureFontSize="12px";}
       //drawRotatedImage(e.watermark, e.c.width-40, e.c.height -(e.c.height/2), 270); 
          e.c.height=canvasHeight+e.topPadding.value*1+e.bottomPadding.value*1;
      ctxt.fillStyle = "#000000";      
      ctxt.fillRect(0,0,e.c.width,e.topPadding.value);  //Top
      ctxt.fillRect(0,canvasHeight+e.topPadding.value*1,e.c.width,e.bottomPadding.value); //Bottom
     if(orientation==="vertical"){
      ctxt.fillRect(0,e.topPadding.value,xImg,imgHeight); //Left
      ctxt.fillRect(image.width + xImg,e.topPadding.value,xImg,imgHeight); //Right
      }
       if(orientation==="horizontal"){
                  ctxt.save();
            ctxt.translate(ctxt.width/2,ctxt.height/2);
            ctxt.rotate(90 * TO_RADIANS);
    ctxt.fillRect(e.topPadding.value,-xImg,imgHeight,xImg); //Left
      ctxt.fillRect(e.topPadding.value,-e.c.width,imgHeight,xImg); //Right
      ctxt.restore();
      }
        // ctxt.drawImage(image, e.topPadding.value, -e.c.width+xImg, imgHeight, image.height);
      ctxt.fillStyle = textColor;
     ctxt.textAlign = "center";
         writeBottomMeme(e.bottomline.value, e.c.width / 2, e.c.height - 10);
        writeTopMeme(e.topline.value, e.c.width / 2, toptextPad);
        
        renderSignature();
        
       console.log("hello"); 
  e.file.value = e.c.toDataURL("image/png");
   console.log( "this="+e.file.value);

        };
    // event handlers:
    
    validateVertical = function() {
                var max_width=550;
                var max_height=1650;
                if(image.width>550){     // scale down
                var scale_width = max_width / image.width;
                var scale_height = max_height / image.height;
                var scale = Math.min(scale_width, scale_height);
                console.log("scale_width="+scale_width);
                console.log("scale_height="+scale_height);
                image.width = image.width * scale;  // 608
                image.height = image.height * scale;
                console.log("width="+image.width);
                console.log("height="+image.height);
            }
                e.c.width=550;
                
                
                   if(image.height<250)
                   { alert("Kindly select image with a min height of 250px for better view"); return; } 
             
              if(image.height>1650)
                   { alert("Kindly select image with a max height of 1650px for better view"); return; } 
                
                e.c.height=image.height;
                imgHeight = image.height;
                canvasHeight=image.height;
                if(image.width>550){
              xImg=0;
            }else{
                xImg= (550-image.width)/2;
                console.log("x="+xImg);
               
                
            }
        
    };
    
     validateHorizontal = function() {
            var max_width=1650;
                var max_height=550;
                 if(image.height>550){
                var scale_width = max_width / image.width;
                var scale_height = max_height / image.height;
                var scale = Math.min(scale_width, scale_height);
                 console.log("scale_width="+scale_width);
                console.log("scale_height="+scale_height);
                image.width = image.width * scale;  // 608
                image.height = image.height * scale;
                console.log("width="+image.width);
                console.log("height="+image.height);
                 } e.c.width=550;
                
                
                   if(image.width<250)
                   { alert("Kindly select image with a min width of 250px for better view"); return; } 
             
              if(image.width>1650)
                   { alert("Kindly select image with a max width of 1650px for better view"); return; } 
                
                e.c.height=image.width;
                imgHeight = image.width;
                canvasHeight=image.width;
                if(image.height>550){
              xImg=e.c.width;
            }else{
                xImg= (550-image.height)/2;
                console.log("x="+xImg);
               
                
            }
        
    };
	
	
    loadImg = function (img) {
       
   
       /*
        window.addEventListener('resize', resizeCanvas, false); 
        window.addEventListener('orientationchange', resizeCanvas, false); 
        resizeCanvas(); 
    */
        
       // validateImg(img);
            console.log(e.ifile.files[0]);
             if (e.ifile.files[0].size>5242880)
             { alert("Kindly select image with size less than 5MB"); return; }  
             if (!(/\.(gif|jpg|jpeg|tiff|png|bmp)$/i).test(e.ifile.value))
             { alert("Kindly select image of type gif,jpg,jpeg,tiff,png,bmp"); return; } 
        e.box2.style.display = "block";
     
        reader.readAsDataURL(e.ifile.files[0]);
   // reader.readAsDataURL(img.files[0]);
        reader.onload = function () {
            image.src = reader.result;
          //  image.src= 'http://localhost/assets/thumbnails/1.jpg';
            image.onload = function () {

          
              
      
                /* canvas settings:
                if (image.width < e.box2.clientWidth) {
                    e.c.width = image.width;
                    e.c.height = image.height;
                    imgHeight = image.height;
                    canvasHeight=image.height;
                } else {
                    e.c.width = e.box2.clientWidth;
                    e.c.height = image.height * (e.box2.clientWidth / image.width);
                    imgHeight = image.height * (e.box2.clientWidth / image.width);
                    canvasHeight = image.height * (e.box2.clientWidth / image.width);
                } */
                if(orientation==="vertical"){validateVertical();}
                if(orientation==="horizontal"){validateHorizontal();}
                ctxt.textAlign = "center";
                ctxt.fillStyle = textColor;
                ctxt.strokeStyle = textStrokeColor;
                ctxt.lineWidth = 2;
                renderMeme();
               
                e.library.style.display = "none";
                 makeOrientationBlock();
               // e.libraryMobile.style.display = "none";
                
            };
            
            
        };
        
    
    };
    loadImg2 = function (img){
         $isLibraryFile=1;
      /*  No need for validations */
        e.box2.style.display = "block";
           var name =img.src.split("/thumbs");
           console.log(name[0]);
           console.log(name[1]);
           image.src=name[0]+name[1];  // for thumbnali to normal view   remove -t from thumbnail address
            
        console.log(image.src);
            image.onload = function () {
                e.c.width=550;
                e.c.height=image.height;
                imgHeight = image.height;
                canvasHeight=image.height;
                if(image.width>550){
              xImg=0;
            }else{
                xImg= (550-image.width)/2;
                console.log("x="+xImg);
               
                
            }
                ctxt.textAlign = "center";
                ctxt.fillStyle = textColor;
                ctxt.strokeStyle = textStrokeColor;
                ctxt.lineWidth = 2;
                renderMeme();
               
                e.library.style.display = "none";
             
                
            };
            
            
        };
    
$(".ifile2").on("click", function(){
     loadImg2(this);
});
    
 
     
  
              
    
    e.ifile.onchange=loadImg;
    e.colorB.onclick=renderMeme;
    e.colorW.onclick=renderMeme;
   // console.log(e.ifile2);
   // e.ifile2[0].onchange=loadImg2(e.ifile2[0]);  // here it will assign before clicking
  //  e.ifile2[1].onclick=loadImg2(e.ifile2[1]);
    e.topPadding.onchange=renderMeme;
    e.bottomPadding.onchange=renderMeme;
    e.topline.onkeyup = renderMeme;
    e.bottomline.onkeyup = renderMeme;
    e.signature.onkeyup=renderMeme;
    e.topIncrease.onclick=topIncrease;
    e.topDecrease.onclick=topDecrease;
    e.bottomIncrease.onclick=bottomIncrease;
    e.bottomDecrease.onclick=bottomDecrease;
    e.downloadLink.onclick = function () {
        e.downloadLink.href =e.c.toDataURL();
        e.downloadLink.download = "PickcrossMeme.png";
    };
    e.c.onclick= function(){  if($isLibraryFile===0){
                              makeOrientationBlock();}};
    e.orientationBtn.onclick= function(){
        if(orientation==="vertical"){
            orientation="horizontal";
        }
        else{orientation="vertical";}
        console.log("yoyoyoyoy");
        loadImg();
    };
    e.signatureRadioBtn.onclick =function (){
        console.log(e.signatureRadioBtn.checked);
        renderMeme();
    };
 
    
    renderSignature = function(){
             if(e.signatureRadioBtn.checked === true){
          ctxt.save();
       ctxt.globalAlpha = 0.6;

         ctxt.translate(25, e.c.height/2);
 ctxt.rotate(270 * TO_RADIANS);
 ctxt.textAlign = "center";
 ctxt.font = "bold "+signatureFontSize+" Arial Rounded MT Bold , Arial , sans-serif";

 ctxt.strokeStyle = textStrokeColor;
 console.log("value="+e.signature.style.display);
 /*
      ctxt.fillStyle = "black";      
      ctxt.fillRect(-(ctxt.measureText(+"By "+e.signature.value).width)/2,-16,ctxt.measureText(+"By "+e.signature.value).width,22); */
     ctxt.fillStyle = textColor; 
 ctxt.fillText("By "+e.signature.value, 0, 0);
 
 console.log("width="+ctxt.measureText(+"By "+e.signature.value).width);
  console.log("height="+ctxt.measureText(+"By "+e.signature.value).height);
 //ctxt.strokeText("By "+e.signature.value, 0, 0);
 //ctxt.font = "bold " + bottomf + "pt  Trebuchet MS’, Helvetica, sans-serif";
       ctxt.globalAlpha = 1;
            ctxt.restore();
     } 
        
    };
    
    renderColor = function(){
        
          if (e.colorB.checked){
      textColor=e.colorB.value;
      textStrokeColor=e.colorW.value;
  }
  if (e.colorW.checked){
     textColor=e.colorW.value;
     textStrokeColor=e.colorB.value;
  }
        
    };
    resizeCanvas = function() 
{ e.c.width = window.innerWidth; 
    e.c.height = window.innerHeight; 
};
    
}(this.document, this.FileReader, this.Image , this.Image1));

 