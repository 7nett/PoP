!function(){var t=Handlebars.template;(Handlebars.templates=Handlebars.templates||{})["em-calendar-inner"]=t({1:function(t,n,a,l,e,s,d){var u;return null!=(u=(a.withItemObject||n&&n.withItemObject||a.helperMissing).call(null!=n?n:t.nullContext||{},null!=d[1]?d[1].itemDBKey:d[1],n,{name:"withItemObject",hash:{context:d[1]},fn:t.program(2,e,0,s,d),inverse:t.noop,data:e}))?u:""},2:function(t,n,a,l,e,s,d){var u,i,r=null!=n?n:t.nullContext||{},o=a.helperMissing,c="function",m=t.escapeExpression,p=t.lambda;return'\t\t\tevents_data.push({\n\t\t\t\tid: "'+m((i=null!=(i=a.id||(null!=n?n.id:n))?i:o,typeof i===c?i.call(r,{name:"id",hash:{},data:e}):i))+'",\n\t\t\t\ttitle: "'+m((i=null!=(i=a.title||(null!=n?n.title:n))?i:o,typeof i===c?i.call(r,{name:"title",hash:{},data:e}):i))+'",\n\t\t\t\tstart: "'+m((i=null!=(i=a["start-date"]||(null!=n?n["start-date"]:n))?i:o,typeof i===c?i.call(r,{name:"start-date",hash:{},data:e}):i))+'",\n\t\t\t\tend: "'+m((i=null!=(i=a["end-date"]||(null!=n?n["end-date"]:n))?i:o,typeof i===c?i.call(r,{name:"end-date",hash:{},data:e}):i))+'",\n\t\t\t\tallDay: '+m((i=null!=(i=a["all-day-string"]||(null!=n?n["all-day-string"]:n))?i:o,typeof i===c?i.call(r,{name:"all-day-string",hash:{},data:e}):i))+',\n\t\t\t\tdomain: "'+m(p(null!=(u=null!=d[2]?d[2].tls:d[2])?u.domain:u,n))+'", \n\t\t\t\tclassName: "'+m(p(null!=(u=null!=d[2]?d[2].tls:d[2])?u["domain-id"]:u,n))+'",\n\t\t\t});\n'},compiler:[7,">= 4.0.0"],main:function(t,n,a,l,e,s,d){var u;return'<script type="text/javascript">\n(function($){\n\tvar events_data = [];\n\t\n'+(null!=(u=a.each.call(null!=n?n:t.nullContext||{},null!=n?n.items:n,{name:"each",hash:{},fn:t.program(1,e,0,s,d),inverse:t.noop,data:e}))?u:"")+"\n\t$(document).ready(function($) {\n\t\tpopFullCalendarAddEvents.addEvents('"+t.escapeExpression(t.lambda(null!=(u=null!=n?n.bs:n)?u.bId:u,n))+"', events_data);\n\t});\n\t\n})(jQuery);\n<\/script>\n"},useData:!0,useDepths:!0})}();