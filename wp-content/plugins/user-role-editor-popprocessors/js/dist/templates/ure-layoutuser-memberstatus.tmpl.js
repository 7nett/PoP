!function(){var l=Handlebars.template,a=Handlebars.templates=Handlebars.templates||{};a["ure-layoutuser-memberstatus"]=l({1:function(l,a,e,n,s,t,r){var i,u=l.escapeExpression;return'	<span class="'+u(l.lambda(null!=r[1]?r[1]["class"]:r[1],a))+'">\n		'+(null!=(i=e["if"].call(a,null!=(i=null!=r[1]?r[1].titles:r[1])?i.description:i,{name:"if",hash:{},fn:l.program(2,s,0,t,r),inverse:l.noop,data:s}))?i:"")+u((e.labelize||a&&a.labelize||e.helperMissing).call(a,null!=a?a["memberstatus-strings"]:a,null!=(i=null!=r[1]?r[1].classes:r[1])?i.label:i,{name:"labelize",hash:{},data:s}))+"\n	</span>\n"},2:function(l,a,e,n,s,t,r){var i;return(null!=(i=l.lambda(null!=(i=null!=r[1]?r[1].titles:r[1])?i.description:i,a))?i:"")+" "},compiler:[7,">= 4.0.0"],main:function(l,a,e,n,s,t,r){var i;return null!=(i=e["with"].call(a,null!=a?a.itemObject:a,{name:"with",hash:{},fn:l.program(1,s,0,t,r),inverse:l.noop,data:s}))?i:""},useData:!0,useDepths:!0})}();