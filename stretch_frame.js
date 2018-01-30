(function (){
	
	window.addEventListener("load",init);
	
	function init()
	{
		// get the first iframe!
		let iframes=document.getElementsByTagName("iframe");
		if(iframes.length>0)
		{
			let iframe=iframes[0];
			let bb=iframe.getBoundingClientRect(iframe);
			let h=window.innerHeight;
			iframe.style.height=(h-bb.y)+"px";
		}
	}
	
	
})();