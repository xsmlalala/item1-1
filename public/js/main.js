require.config({
	paths:{
		jquery: 'jquery.min',
		// j_validate:"jquery-validate",  
        check:"check"  
	}
});
// requirejs(['jquery','pass'],function($,pass){
// 	console.log(pass.isEqual(1,1));
// });
// require(['math'],function(math){
// 	alert(math.add(1,1));
// });
require(["jquery","check"]);  

// requirejs.config({
// 	config:{
// 		text:{
// 			onXhr:function(xhr,url){

// 			},
// 			createXhr:function(){

// 			},
// 			onXhrComplete:function(){
				
// 			}
// 		}
// 	}
// });