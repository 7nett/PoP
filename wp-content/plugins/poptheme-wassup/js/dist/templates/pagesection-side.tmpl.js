!function(){var n=Handlebars.template,e=Handlebars.templates=Handlebars.templates||{};e["pagesection-side"]=n({1:function(n,e,l,a,s){var t,i=l.helperMissing,r="function",o=n.escapeExpression;return'		<img src="'+o((t=null!=(t=l.src||(null!=e?e.src:e))?t:i,typeof t===r?t.call(e,{name:"src",hash:{},data:s}):t))+'" class="img-responsive" alt="'+o((t=null!=(t=l.title||(null!=e?e.title:e))?t:i,typeof t===r?t.call(e,{name:"title",hash:{},data:s}):t))+'">\n'},3:function(n,e,l,a,s,t,i){var r=n.escapeExpression;return'	<div id="'+r(n.lambda(null!=i[1]?i[1].id:i[1],e))+'-side">\n		'+r((l.enterModule||e&&e.enterModule||l.helperMissing).call(e,e,{name:"enterModule",hash:{parentContext:i[1]},data:s}))+"\n	</div>\n"},5:function(n,e,l,a,s){var t;return n.escapeExpression((t=null!=(t=l.id||(null!=e?e.id:e))?t:l.helperMissing,"function"==typeof t?t.call(e,{name:"id",hash:{},data:s}):t))},compiler:[7,">= 4.0.0"],main:function(n,e,l,a,s,t,i){var r,o=n.lambda,d=n.escapeExpression,u=l.helperMissing;return'<a id="logo" class="logo" href="'+d(o(null!=(r=null!=e?e.links:e)?r.home:r,e))+'" title="'+d(o(null!=(r=null!=e?e.titles:e)?r.home:r,e))+'">\n'+(null!=(r=l["with"].call(e,null!=e?e["logo-main"]:e,{name:"with",hash:{},fn:n.program(1,s,0,t,i),inverse:n.noop,data:s}))?r:"")+"</a>\n<br/>\n"+(null!=(r=(l.withModule||e&&e.withModule||u).call(e,e,"blockgroup-side",{name:"withModule",hash:{},fn:n.program(3,s,0,t,i),inverse:n.noop,data:s}))?r:"")+'<div class="navbar navbar-main navbar-inverse pop-menu-xs hidden-sm hidden-md hidden-lg">\n	<ul role="menu" class="nav">\n		<li>\n			<a '+(null!=(r=(l.generateId||e&&e.generateId||u).call(e,{name:"generateId",hash:{group:"togglenav",targetId:null!=(r=null!=e?e.pss:e)?r.pssId:r},fn:n.program(5,s,0,t,i),inverse:n.noop,data:s}))?r:"")+' href="#" class="toggle-side" title="'+d(o(null!=(r=null!=e?e.titles:e)?r.togglenavigation:r,e))+'" data-target="#'+d(o(null!=(r=null!=e?e.pss:e)?r.psId:r,e))+'" data-toggle="offcanvas-toggle" data-mode="xs">\n				<span class="glyphicon glyphicon-menu-hamburger"></span>\n			</a>\n		</li>\n	</ul>\n</div>'},useData:!0,useDepths:!0})}();