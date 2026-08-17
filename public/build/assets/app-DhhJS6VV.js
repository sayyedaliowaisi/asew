function Xu(n,e){return function(){return n.apply(e,arguments)}}const{toString:Sh}=Object.prototype,{getPrototypeOf:Ki}=Object,{iterator:Nr,toStringTag:qu}=Symbol,Ps=(({hasOwnProperty:n})=>(e,t)=>n.call(e,t))(Object.prototype),Rr=(n,e)=>{let t=n;const i=[];for(;t!=null&&t!==Object.prototype;){if(i.indexOf(t)!==-1)return!1;if(i.push(t),Ps(t,e))return!0;t=Ki(t)}return!1},Mh=(n,e)=>n!=null&&Rr(n,e)?n[e]:void 0,ll=(n=>e=>{const t=Sh.call(e);return n[t]||(n[t]=t.slice(8,-1).toLowerCase())})(Object.create(null)),Zt=n=>(n=n.toLowerCase(),e=>ll(e)===n),Ws=n=>e=>typeof e===n,{isArray:gi}=Array,xi=Ws("undefined");function tr(n){return n!==null&&!xi(n)&&n.constructor!==null&&!xi(n.constructor)&&Ht(n.constructor.isBuffer)&&n.constructor.isBuffer(n)}const Yu=Zt("ArrayBuffer");function Eh(n){let e;return typeof ArrayBuffer<"u"&&ArrayBuffer.isView?e=ArrayBuffer.isView(n):e=n&&n.buffer&&Yu(n.buffer),e}const yh=Ws("string"),Ht=Ws("function"),$u=Ws("number"),nr=n=>n!==null&&typeof n=="object",bh=n=>n===!0||n===!1,Ss=n=>{if(!nr(n))return!1;const e=Ki(n);return(e===null||e===Object.prototype||Ki(e)===null)&&!Rr(n,qu)&&!Rr(n,Nr)},Th=n=>{if(!nr(n)||tr(n))return!1;try{return Object.keys(n).length===0&&Object.getPrototypeOf(n)===Object.prototype}catch{return!1}},Ah=Zt("Date"),wh=Zt("File"),Rh=n=>!!(n&&typeof n.uri<"u"),Ch=n=>n&&typeof n.getParts<"u",Ph=Zt("Blob"),Dh=Zt("FileList"),Lh=Zt("Set"),Ih=n=>nr(n)&&Ht(n.pipe);function Uh(){return typeof globalThis<"u"?globalThis:typeof self<"u"?self:typeof window<"u"?window:typeof global<"u"?global:{}}const pc=Uh(),mc=typeof pc.FormData<"u"?pc.FormData:void 0,Nh=n=>{if(!n)return!1;if(mc&&n instanceof mc)return!0;const e=Ki(n);if(!e||e===Object.prototype||!Ht(n.append))return!1;const t=ll(n);return t==="formdata"||t==="object"&&Ht(n.toString)&&n.toString()==="[object FormData]"},Oh=Zt("URLSearchParams"),[Fh,Bh,zh,Hh]=["ReadableStream","Request","Response","Headers"].map(Zt),Vh=n=>n.trim?n.trim():n.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,"");function Or(n,e,{allOwnKeys:t=!1}={}){if(n===null||typeof n>"u")return;let i,r;if(typeof n!="object"&&(n=[n]),gi(n))for(i=0,r=n.length;i<r;i++)e.call(null,n[i],i,n);else{if(tr(n))return;const s=t?Object.getOwnPropertyNames(n):Object.keys(n),a=s.length;let o;for(i=0;i<a;i++)o=s[i],e.call(null,n[o],o,n)}}function Ku(n,e){if(tr(n))return null;e=e.toLowerCase();const t=Object.keys(n);let i=t.length,r;for(;i-- >0;)if(r=t[i],e===r.toLowerCase())return r;return null}const li=typeof globalThis<"u"?globalThis:typeof self<"u"?self:typeof window<"u"?window:global,Zu=n=>!xi(n)&&n!==li;function Za(...n){const{caseless:e,skipUndefined:t}=Zu(this)&&this||{},i={},r=(s,a)=>{if(a==="__proto__"||a==="constructor"||a==="prototype")return;const o=e&&typeof a=="string"&&Ku(i,a)||a,l=Ps(i,o)?i[o]:void 0;Ss(l)&&Ss(s)?i[o]=Za(l,s):Ss(s)?i[o]=Za({},s):gi(s)?i[o]=s.slice():(!t||!xi(s))&&(i[o]=s)};for(let s=0,a=n.length;s<a;s++){const o=n[s];if(!o||tr(o)||(Or(o,r),typeof o!="object"||gi(o)))continue;const l=Object.getOwnPropertySymbols(o);for(let c=0;c<l.length;c++){const u=l[c];jh.call(o,u)&&r(o[u],u)}}return i}const Gh=(n,e,t,{allOwnKeys:i}={})=>(Or(e,(r,s)=>{t&&Ht(r)?Object.defineProperty(n,s,{__proto__:null,value:Xu(r,t),writable:!0,enumerable:!0,configurable:!0}):Object.defineProperty(n,s,{__proto__:null,value:r,writable:!0,enumerable:!0,configurable:!0})},{allOwnKeys:i}),n),kh=n=>(n.charCodeAt(0)===65279&&(n=n.slice(1)),n),Wh=(n,e,t,i)=>{n.prototype=Object.create(e.prototype,i),Object.defineProperty(n.prototype,"constructor",{__proto__:null,value:n,writable:!0,enumerable:!1,configurable:!0}),Object.defineProperty(n,"super",{__proto__:null,value:e.prototype}),t&&Object.assign(n.prototype,t)},Xh=(n,e,t,i)=>{let r,s,a;const o={};if(e=e||{},n==null)return e;do{for(r=Object.getOwnPropertyNames(n),s=r.length;s-- >0;)a=r[s],(!i||i(a,n,e))&&!o[a]&&(e[a]=n[a],o[a]=!0);n=t!==!1&&Ki(n)}while(n&&(!t||t(n,e))&&n!==Object.prototype);return e},qh=(n,e,t)=>{n=String(n),(t===void 0||t>n.length)&&(t=n.length),t-=e.length;const i=n.indexOf(e,t);return i!==-1&&i===t},Yh=n=>{if(!n)return null;if(gi(n))return n;let e=n.length;if(!$u(e))return null;const t=new Array(e);for(;e-- >0;)t[e]=n[e];return t},$h=(n=>e=>n&&e instanceof n)(typeof Uint8Array<"u"&&Ki(Uint8Array)),Kh=(n,e)=>{const i=(n&&n[Nr]).call(n);let r;for(;(r=i.next())&&!r.done;){const s=r.value;e.call(n,s[0],s[1])}},Zh=(n,e)=>{let t;const i=[];for(;(t=n.exec(e))!==null;)i.push(t);return i},Jh=Zt("HTMLFormElement"),Qh=n=>n.toLowerCase().replace(/[-_\s]([a-z\d])(\w*)/g,function(t,i,r){return i.toUpperCase()+r}),{propertyIsEnumerable:jh}=Object.prototype,ep=Zt("RegExp"),Ju=(n,e)=>{const t=Object.getOwnPropertyDescriptors(n),i={};Or(t,(r,s)=>{let a;(a=e(r,s,n))!==!1&&(i[s]=a||r)}),Object.defineProperties(n,i)},tp=n=>{Ju(n,(e,t)=>{if(Ht(n)&&["arguments","caller","callee"].includes(t))return!1;const i=n[t];if(Ht(i)){if(e.enumerable=!1,"writable"in e){e.writable=!1;return}e.set||(e.set=()=>{throw Error("Can not rewrite read-only method '"+t+"'")})}})},np=(n,e)=>{const t={},i=r=>{r.forEach(s=>{t[s]=!0})};return gi(n)?i(n):i(String(n).split(e)),t},ip=()=>{},rp=(n,e)=>n!=null&&Number.isFinite(n=+n)?n:e;function sp(n){return!!(n&&Ht(n.append)&&n[qu]==="FormData"&&n[Nr])}const ap=n=>{const e=new WeakSet,t=i=>{if(nr(i)){if(e.has(i))return;if(tr(i))return i;if(!("toJSON"in i)){e.add(i);let r;if(Lh(i)){r=[];for(const s of i){const a=t(s);!xi(a)&&r.push(a)}}else r=gi(i)?[]:{},Or(i,(s,a)=>{const o=t(s);!xi(o)&&(r[a]=o)});return e.delete(i),r}}return i};return t(n)},op=Zt("AsyncFunction"),lp=n=>n&&(nr(n)||Ht(n))&&Ht(n.then)&&Ht(n.catch),Qu=((n,e)=>n?setImmediate:e?((t,i)=>(li.addEventListener("message",({source:r,data:s})=>{r===li&&s===t&&i.length&&i.shift()()},!1),r=>{i.push(r),li.postMessage(t,"*")}))(`axios@${Math.random()}`,[]):t=>setTimeout(t))(typeof setImmediate=="function",Ht(li.postMessage)),cp=typeof queueMicrotask<"u"?queueMicrotask.bind(li):typeof process<"u"&&process.nextTick||Qu,ju=n=>n!=null&&Ht(n[Nr]),up=n=>n!=null&&Rr(n,Nr)&&ju(n),P={isArray:gi,isArrayBuffer:Yu,isBuffer:tr,isFormData:Nh,isArrayBufferView:Eh,isString:yh,isNumber:$u,isBoolean:bh,isObject:nr,isPlainObject:Ss,isEmptyObject:Th,isReadableStream:Fh,isRequest:Bh,isResponse:zh,isHeaders:Hh,isUndefined:xi,isDate:Ah,isFile:wh,isReactNativeBlob:Rh,isReactNative:Ch,isBlob:Ph,isRegExp:ep,isFunction:Ht,isStream:Ih,isURLSearchParams:Oh,isTypedArray:$h,isFileList:Dh,forEach:Or,merge:Za,extend:Gh,trim:Vh,stripBOM:kh,inherits:Wh,toFlatObject:Xh,kindOf:ll,kindOfTest:Zt,endsWith:qh,toArray:Yh,forEachEntry:Kh,matchAll:Zh,isHTMLForm:Jh,hasOwnProperty:Ps,hasOwnProp:Ps,hasOwnInPrototypeChain:Rr,getSafeProp:Mh,reduceDescriptors:Ju,freezeMethods:tp,toObjectSet:np,toCamelCase:Qh,noop:ip,toFiniteNumber:rp,findKey:Ku,global:li,isContextDefined:Zu,isSpecCompliantForm:sp,toJSONObject:ap,isAsyncFn:op,isThenable:lp,setImmediate:Qu,asap:cp,isIterable:ju,isSafeIterable:up},fp=P.toObjectSet(["age","authorization","content-length","content-type","etag","expires","from","host","if-modified-since","if-unmodified-since","last-modified","location","max-forwards","proxy-authorization","referer","retry-after","user-agent"]),dp=n=>{const e={};let t,i,r;return n&&n.split(`
`).forEach(function(a){r=a.indexOf(":"),t=a.substring(0,r).trim().toLowerCase(),i=a.substring(r+1).trim();const o=P.hasOwnProp(e,t);!t||o&&P.hasOwnProp(fp,t)||(t==="set-cookie"?o?e[t].push(i):e[t]=[i]:e[t]=o?e[t]+", "+i:i)}),e};function hp(n){let e=0,t=n.length;for(;e<t;){const i=n.charCodeAt(e);if(i!==9&&i!==32)break;e+=1}for(;t>e;){const i=n.charCodeAt(t-1);if(i!==9&&i!==32)break;t-=1}return e===0&&t===n.length?n:n.slice(e,t)}const pp=new RegExp("[\\u0000-\\u0008\\u000a-\\u001f\\u007f]+","g"),mp=new RegExp("[^\\u0009\\u0020-\\u007e\\u0080-\\u00ff]+","g");function cl(n,e){return P.isArray(n)?n.map(t=>cl(t,e)):hp(String(n).replace(e,""))}const _p=n=>cl(n,pp),gp=n=>cl(n,mp);function ef(n){const e=Object.create(null);return P.forEach(n.toJSON(),(t,i)=>{e[i]=gp(t)}),e}const _c=Symbol("internals");function ur(n){return n&&String(n).trim().toLowerCase()}function Ms(n){return n===!1||n==null?n:P.isArray(n)?n.map(Ms):_p(String(n))}function xp(n){const e=Object.create(null),t=/([^\s,;=]+)\s*(?:=\s*([^,;]+))?/g;let i;for(;i=t.exec(n);)e[i[1]]=i[2];return e}const vp=/^[!#$%&'*+\-.^_`|~0-9A-Za-z]+$/;function aa(n){let e=0,t=n.length;for(;e<t;){const i=n.charCodeAt(e);if(i!==9&&i!==32)break;e+=1}for(;t>e;){const i=n.charCodeAt(t-1);if(i!==9&&i!==32)break;t-=1}return e===0&&t===n.length?n:n.slice(e,t)}function Sp(n){const e=n.length-1;if(e<1||n.charCodeAt(0)!==34||n.charCodeAt(e)!==34)return n;let t="";for(let i=1;i<e;i++){const r=n.charCodeAt(i);if(r===34||r===92&&(i+=1,i>=e))return n;t+=n[i]}return t}function Mp(n){const e=Object.create(null),t=String(n);let i=0,r=!1,s=!1;function a(o){const l=aa(t.slice(i,o)),c=l.indexOf("=");if(c<1)return;const u=aa(l.slice(0,c));if(!vp.test(u))return;const h=u.toLowerCase();if(h==="__proto__"||h==="constructor"||h==="prototype")return;const d=aa(l.slice(c+1));e[h]=Sp(d)}for(let o=0;o<t.length;o++){const l=t.charCodeAt(o);r?s?s=!1:l===92?s=!0:l===34&&(r=!1):l===34?r=!0:(l===44||l===59)&&(a(o),i=o+1)}return a(t.length),e}const Ep=n=>/^[-_a-zA-Z0-9^`|~,!#$%&'*+.]+$/.test(n.trim());function oa(n,e,t,i,r){if(P.isFunction(i))return i.call(this,e,t);if(r&&(e=t),!!P.isString(e)){if(P.isString(i))return e.indexOf(i)!==-1;if(P.isRegExp(i))return i.test(e)}}function yp(n){return n.trim().toLowerCase().replace(/([a-z\d])(\w*)/g,(e,t,i)=>t.toUpperCase()+i)}function bp(n,e){const t=P.toCamelCase(" "+e);["get","set","has"].forEach(i=>{Object.defineProperty(n,i+t,{__proto__:null,value:function(r,s,a){return this[i].call(this,e,r,s,a)},configurable:!0})})}let Lt=class{constructor(e){e&&this.set(e)}set(e,t,i){const r=this;function s(o,l,c){const u=ur(l);if(!u)return;const h=P.findKey(r,u);(!h||r[h]===void 0||c===!0||c===void 0&&r[h]!==!1)&&(r[h||l]=Ms(o))}const a=(o,l)=>P.forEach(o,(c,u)=>s(c,u,l));if(P.isPlainObject(e)||e instanceof this.constructor)a(e,t);else if(P.isString(e)&&(e=e.trim())&&!Ep(e))a(dp(e),t);else if(P.isObject(e)&&P.isSafeIterable(e)){let o=Object.create(null),l,c;for(const u of e){if(!P.isArray(u))throw new TypeError("Object iterator must return a key-value pair");c=u[0],P.hasOwnProp(o,c)?(l=o[c],o[c]=P.isArray(l)?[...l,u[1]]:[l,u[1]]):o[c]=u[1]}a(o,t)}else e!=null&&s(t,e,i);return this}get(e,t){if(e=ur(e),e){const i=P.findKey(this,e);if(i){const r=this[i];if(!t)return r;if(t===!0)return xp(r);if(P.isFunction(t))return t.call(this,r,i);if(P.isRegExp(t))return t.exec(r);throw new TypeError("parser must be boolean|regexp|function")}}}has(e,t){if(e=ur(e),e){const i=P.findKey(this,e);return!!(i&&this[i]!==void 0&&(!t||oa(this,this[i],i,t)))}return!1}delete(e,t){const i=this;let r=!1;function s(a){if(a=ur(a),a){const o=P.findKey(i,a);o&&(!t||oa(i,i[o],o,t))&&(delete i[o],r=!0)}}return P.isArray(e)?e.forEach(s):s(e),r}clear(e){const t=Object.keys(this);let i=t.length,r=!1;for(;i--;){const s=t[i];(!e||oa(this,this[s],s,e,!0))&&(delete this[s],r=!0)}return r}normalize(e){const t=this,i={};return P.forEach(this,(r,s)=>{const a=P.findKey(i,s);if(a){t[a]=Ms(r),delete t[s];return}const o=e?yp(s):String(s).trim();o!==s&&delete t[s],t[o]=Ms(r),i[o]=!0}),this}concat(...e){return this.constructor.concat(this,...e)}toJSON(e){const t=Object.create(null);return P.forEach(this,(i,r)=>{i!=null&&i!==!1&&(t[r]=e&&P.isArray(i)?i.join(", "):i)}),t}[Symbol.iterator](){return Object.entries(this.toJSON())[Symbol.iterator]()}toString(){return Object.entries(this.toJSON()).map(([e,t])=>e+": "+t).join(`
`)}getSetCookie(){const e=this.get("set-cookie");return P.isArray(e)?e:e==null||e===!1?[]:[e]}get[Symbol.toStringTag](){return"AxiosHeaders"}static from(e){return e instanceof this?e:new this(e)}static parseParameters(e){return Mp(e)}static concat(e,...t){const i=new this(e);return t.forEach(r=>i.set(r)),i}static accessor(e){const i=(this[_c]=this[_c]={accessors:{}}).accessors,r=this.prototype;function s(a){const o=ur(a);i[o]||(bp(r,a),i[o]=!0)}return P.isArray(e)?e.forEach(s):s(e),this}};Lt.accessor(["Content-Type","Content-Length","Accept","Accept-Encoding","User-Agent","Authorization"]);P.reduceDescriptors(Lt.prototype,({value:n},e)=>{let t=e[0].toUpperCase()+e.slice(1);return{get:()=>n,set(i){this[t]=i}}});P.freezeMethods(Lt);const Ds="[REDACTED ****]";function Tp(n){if(P.hasOwnProp(n,"toJSON"))return!0;let e=Object.getPrototypeOf(n);for(;e&&e!==Object.prototype;){if(P.hasOwnProp(e,"toJSON"))return!0;e=Object.getPrototypeOf(e)}return!1}function Ap(n,e){const t=new Set(e.map(s=>String(s).toLowerCase())),i=[],r=s=>{if(s===null||typeof s!="object"||P.isBuffer(s))return s;if(i.indexOf(s)!==-1)return;s instanceof Lt&&(s=s.toJSON()),i.push(s);let a;if(P.isArray(s))a=[],s.forEach((o,l)=>{const c=r(o);P.isUndefined(c)||(a[l]=c)});else{if(!P.isPlainObject(s)&&Tp(s))return i.pop(),s;a=Object.create(null);for(const[o,l]of Object.entries(s)){const c=t.has(o.toLowerCase())?Ds:r(l);P.isUndefined(c)||(a[o]=c)}}return i.pop(),a};return r(n)}function gc(n){try{return String(n)}catch{return""}}function wp(n){return n.errors.map(t=>{try{return t&&t.message?gc(t.message):gc(t)}catch{return""}}).filter(Boolean).join("; ")||n.name||"AggregateError"}let pe=class tf extends Error{static from(e,t,i,r,s,a){let o=e.message;!o&&P.isArray(e.errors)&&e.errors.length&&(o=wp(e));const l=new tf(o,t||e.code,i,r,s);return Object.defineProperty(l,"cause",{__proto__:null,value:e,writable:!0,enumerable:!1,configurable:!0}),l.name=e.name,e.status!=null&&l.status==null&&(l.status=e.status),a&&Object.assign(l,a),l}constructor(e,t,i,r,s){super(e),Object.defineProperty(this,"message",{__proto__:null,value:e,enumerable:!0,writable:!0,configurable:!0}),this.name="AxiosError",this.isAxiosError=!0,t&&(this.code=t),i&&(this.config=i),r&&(this.request=r),s&&(this.response=s,this.status=s.status)}toJSON(){const e=this.config,t=e&&P.hasOwnProp(e,"redact")?e.redact:void 0,i=P.isArray(t)&&t.length>0?Ap(e,t):P.toJSONObject(e);return{message:this.message,name:this.name,description:this.description,number:this.number,fileName:this.fileName,lineNumber:this.lineNumber,columnNumber:this.columnNumber,stack:this.stack,config:i,code:this.code,status:this.status}}};pe.ERR_BAD_OPTION_VALUE="ERR_BAD_OPTION_VALUE";pe.ERR_BAD_OPTION="ERR_BAD_OPTION";pe.ECONNABORTED="ECONNABORTED";pe.ETIMEDOUT="ETIMEDOUT";pe.ECONNREFUSED="ECONNREFUSED";pe.ERR_NETWORK="ERR_NETWORK";pe.ERR_FR_TOO_MANY_REDIRECTS="ERR_FR_TOO_MANY_REDIRECTS";pe.ERR_DEPRECATED="ERR_DEPRECATED";pe.ERR_BAD_RESPONSE="ERR_BAD_RESPONSE";pe.ERR_BAD_REQUEST="ERR_BAD_REQUEST";pe.ERR_CANCELED="ERR_CANCELED";pe.ERR_NOT_SUPPORT="ERR_NOT_SUPPORT";pe.ERR_INVALID_URL="ERR_INVALID_URL";pe.ERR_FORM_DATA_DEPTH_EXCEEDED="ERR_FORM_DATA_DEPTH_EXCEEDED";const Rp=null,nf=100;function Ja(n){return P.isPlainObject(n)||P.isArray(n)}function rf(n){return P.endsWith(n,"[]")?n.slice(0,-2):n}function la(n,e,t){return n?n.concat(e).map(function(r,s){return r=rf(r),!t&&s?"["+r+"]":r}).join(t?".":""):e}function Cp(n){return P.isArray(n)&&!n.some(Ja)}const Pp=P.toFlatObject(P,{},null,function(e){return/^is[A-Z]/.test(e)});function Xs(n,e,t){if(!P.isObject(n))throw new TypeError("target must be an object");e=e||new FormData,t=P.toFlatObject(t,{metaTokens:!0,dots:!1,indexes:!1},!1,function(y,w){return!P.isUndefined(w[y])});const i=t.metaTokens,r=t.visitor||x,s=t.dots,a=t.indexes,o=t.Blob||typeof Blob<"u"&&Blob,l=t.maxDepth===void 0?nf:t.maxDepth,c=o&&P.isSpecCompliantForm(e),u=[];if(!P.isFunction(r))throw new TypeError("visitor must be a function");function h(f){if(f===null)return"";if(P.isDate(f))return f.toISOString();if(P.isBoolean(f))return f.toString();if(!c&&P.isBlob(f))throw new pe("Blob is not supported. Use a Buffer instead.");if(P.isArrayBuffer(f)||P.isTypedArray(f)){if(c&&typeof o=="function")return new o([f]);throw new pe("Blob is not supported. Use a Buffer instead.",pe.ERR_NOT_SUPPORT)}return f}function d(f){if(f>l)throw new pe("Object is too deeply nested ("+f+" levels). Max depth: "+l,pe.ERR_FORM_DATA_DEPTH_EXCEEDED)}function m(f,y){if(l===1/0)return JSON.stringify(f);const w=[];return JSON.stringify(f,function(A,E){if(!P.isObject(E))return E;for(;w.length&&w[w.length-1]!==this;)w.pop();return w.push(E),d(y+w.length-1),E})}function x(f,y,w){let M=f;if(P.isReactNative(e)&&P.isReactNativeBlob(f))return e.append(la(w,y,s),h(f)),!1;if(f&&!w&&typeof f=="object"){if(P.endsWith(y,"{}"))y=i?y:y.slice(0,-2),f=m(f,1);else if(P.isArray(f)&&Cp(f)||(P.isFileList(f)||P.endsWith(y,"[]"))&&(M=P.toArray(f)))return y=rf(y),M.forEach(function(E,R){!(P.isUndefined(E)||E===null)&&e.append(a===!0?la([y],R,s):a===null?y:y+"[]",h(E))}),!1}return Ja(f)?!0:(e.append(la(w,y,s),h(f)),!1)}const S=Object.assign(Pp,{defaultVisitor:x,convertValue:h,isVisitable:Ja});function p(f,y,w=0){if(!P.isUndefined(f)){if(d(w),u.indexOf(f)!==-1)throw new Error("Circular reference detected in "+y.join("."));u.push(f),P.forEach(f,function(A,E){(!(P.isUndefined(A)||A===null)&&r.call(e,A,P.isString(E)?E.trim():E,y,S))===!0&&p(A,y?y.concat(E):[E],w+1)}),u.pop()}}if(!P.isObject(n))throw new TypeError("data must be an object");return p(n),e}function xc(n){const e={"!":"%21","'":"%27","(":"%28",")":"%29","~":"%7E","%20":"+"};return encodeURIComponent(n).replace(/[!'()~]|%20/g,function(i){return e[i]})}function ul(n,e){this._pairs=[],n&&Xs(n,this,e)}const sf=ul.prototype;sf.append=function(e,t){this._pairs.push([e,t])};sf.toString=function(e){const t=e?i=>e.call(this,i,xc):xc;return this._pairs.map(function(r){return t(r[0])+"="+t(r[1])},"").join("&")};function Dp(n){return encodeURIComponent(n).replace(/%3A/gi,":").replace(/%24/g,"$").replace(/%2C/gi,",").replace(/%20/g,"+")}function af(n,e,t){if(!e)return n;n=n||"";const i=P.isFunction(t)?{serialize:t}:t,r=P.getSafeProp(i,"encode")||Dp,s=P.getSafeProp(i,"serialize");let a;if(s?a=s(e,i):a=P.isURLSearchParams(e)?e.toString():new ul(e,i).toString(r),a){const o=n.indexOf("#");o!==-1&&(n=n.slice(0,o)),n+=(n.indexOf("?")===-1?"?":"&")+a}return n}class vc{constructor(){this.handlers=[]}use(e,t,i){return this.handlers.push({fulfilled:e,rejected:t,synchronous:i?i.synchronous:!1,runWhen:i?i.runWhen:null}),this.handlers.length-1}eject(e){this.handlers[e]&&(this.handlers[e]=null)}clear(){this.handlers&&(this.handlers=[])}forEach(e){P.forEach(this.handlers,function(i){i!==null&&e(i)})}}const fl={silentJSONParsing:!0,forcedJSONParsing:!0,clarifyTimeoutError:!1,legacyInterceptorReqResOrdering:!0,advertiseZstdAcceptEncoding:!1,validateStatusUndefinedResolves:!0},Lp=typeof URLSearchParams<"u"?URLSearchParams:ul,Ip=typeof FormData<"u"?FormData:null,Up=typeof Blob<"u"?Blob:null,Np={isBrowser:!0,classes:{URLSearchParams:Lp,FormData:Ip,Blob:Up},protocols:["http","https","file","blob","url","data"]},dl=typeof window<"u"&&typeof document<"u",Qa=typeof navigator=="object"&&navigator||void 0,Op=dl&&(!Qa||["ReactNative","NativeScript","NS"].indexOf(Qa.product)<0),Fp=typeof WorkerGlobalScope<"u"&&self instanceof WorkerGlobalScope&&typeof self.importScripts=="function",Bp=dl&&window.location.href||"http://localhost",zp=Object.freeze(Object.defineProperty({__proto__:null,hasBrowserEnv:dl,hasStandardBrowserEnv:Op,hasStandardBrowserWebWorkerEnv:Fp,navigator:Qa,origin:Bp},Symbol.toStringTag,{value:"Module"})),Tt={...zp,...Np};function Hp(n,e){return Xs(n,new Tt.classes.URLSearchParams,{visitor:function(t,i,r,s){return Tt.isNode&&P.isBuffer(t)?(this.append(i,t.toString("base64")),!1):s.defaultVisitor.apply(this,arguments)},...e})}const Sc=nf;function of(n){if(n>Sc)throw new pe("FormData field is too deeply nested ("+n+" levels). Max depth: "+Sc,pe.ERR_FORM_DATA_DEPTH_EXCEEDED)}function Vp(n){const e=[],t=/[^.[\]]+|\[([^.[\]]*)]/g;let i;for(;(i=t.exec(n))!==null;)of(e.length),e.push(i[0]==="[]"?"":i[1]||i[0]);return e}function Gp(n){const e={},t=Object.keys(n);let i;const r=t.length;let s;for(i=0;i<r;i++)s=t[i],e[s]=n[s];return e}function lf(n){function e(t,i,r,s){of(s);let a=t[s++];if(a==="__proto__")return!0;const o=Number.isFinite(+a),l=s>=t.length;return a=!a&&P.isArray(r)?r.length:a,l?(P.hasOwnProp(r,a)?r[a]=P.isArray(r[a])?r[a].concat(i):[r[a],i]:r[a]=i,!o):((!P.hasOwnProp(r,a)||!P.isObject(r[a]))&&(r[a]=[]),e(t,i,r[a],s)&&P.isArray(r[a])&&(r[a]=Gp(r[a])),!o)}if(P.isFormData(n)&&P.isFunction(n.entries)){const t={};return P.forEachEntry(n,(i,r)=>{e(Vp(i),r,t,0)}),t}return null}const Ci=(n,e)=>n!=null&&P.hasOwnProp(n,e)?n[e]:void 0;function kp(n,e,t){if(P.isString(n))try{return(e||JSON.parse)(n),P.trim(n)}catch(i){if(i.name!=="SyntaxError")throw i}return(t||JSON.stringify)(n)}const Fr={transitional:fl,adapter:["xhr","http","fetch"],transformRequest:[function(e,t){const i=t.getContentType()||"",r=i.indexOf("application/json")>-1,s=P.isObject(e);if(s&&P.isHTMLForm(e)&&(e=new FormData(e)),P.isFormData(e))return r?JSON.stringify(lf(e)):e;if(P.isArrayBuffer(e)||P.isBuffer(e)||P.isStream(e)||P.isFile(e)||P.isBlob(e)||P.isReadableStream(e))return e;if(P.isArrayBufferView(e))return e.buffer;if(P.isURLSearchParams(e))return t.setContentType("application/x-www-form-urlencoded;charset=utf-8",!1),e.toString();let o;if(s){const l=Ci(this,"formSerializer");if(i.indexOf("application/x-www-form-urlencoded")>-1)return Hp(e,l).toString();if((o=P.isFileList(e))||i.indexOf("multipart/form-data")>-1){const c=Ci(this,"env"),u=c&&c.FormData;return Xs(o?{"files[]":e}:e,u&&new u,l)}}return s||r?(t.setContentType("application/json",!1),kp(e)):e}],transformResponse:[function(e){const t=Ci(this,"transitional")||Fr.transitional,i=t&&t.forcedJSONParsing,r=Ci(this,"responseType"),s=r==="json";if(P.isResponse(e)||P.isReadableStream(e))return e;if(e&&P.isString(e)&&(i&&!r||s)){const o=!(t&&t.silentJSONParsing)&&s;try{return JSON.parse(e,Ci(this,"parseReviver"))}catch(l){if(o)throw l.name==="SyntaxError"?pe.from(l,pe.ERR_BAD_RESPONSE,this,null,Ci(this,"response")):l}}return e}],timeout:0,xsrfCookieName:"XSRF-TOKEN",xsrfHeaderName:"X-XSRF-TOKEN",maxContentLength:-1,maxBodyLength:-1,env:{FormData:Tt.classes.FormData,Blob:Tt.classes.Blob},validateStatus:function(e){return e>=200&&e<300},headers:{common:{Accept:"application/json, text/plain, */*","Content-Type":void 0}}};P.forEach(["delete","get","head","post","put","patch","query"],n=>{Fr.headers[n]={}});function ca(n,e){const t=this||Fr,i=e||t,r=Lt.from(i.headers);let s=i.data;return P.forEach(n,function(o){s=o.call(t,s,r.normalize(),e?e.status:void 0)}),r.normalize(),s}function cf(n){return!!(n&&n.__CANCEL__)}let Br=class extends pe{constructor(e,t,i){super(e??"canceled",pe.ERR_CANCELED,t,i),this.name="CanceledError",this.__CANCEL__=!0}};function uf(n,e,t){const i=t.config.validateStatus;!t.status||!i||i(t.status)?n(t):e(new pe("Request failed with status code "+t.status,t.status>=400&&t.status<500?pe.ERR_BAD_REQUEST:pe.ERR_BAD_RESPONSE,t.config,t.request,t))}function Wp(n){const e=/^([-+\w]{1,25}):(?:\/\/)?/.exec(n);return e&&e[1]||""}function Xp(n,e){n=n||10;const t=new Array(n),i=new Array(n);let r=0,s=0,a;return e=e!==void 0?e:1e3,function(l){const c=Date.now(),u=i[s];a||(a=c),t[r]=l,i[r]=c;let h=s,d=0;for(;h!==r;)d+=t[h++],h=h%n;if(r=(r+1)%n,r===s&&(s=(s+1)%n),c-a<e)return;const m=u&&c-u;return m?Math.round(d*1e3/m):void 0}}function qp(n,e){let t=0,i=1e3/e,r,s;const a=(c,u=Date.now())=>{t=u,r=null,s&&(clearTimeout(s),s=null),n(...c)};return[(...c)=>{const u=Date.now(),h=u-t;h>=i?a(c,u):(r=c,s||(s=setTimeout(()=>{s=null,a(r)},i-h)))},()=>r&&a(r)]}const Ls=(n,e,t=3)=>{let i=0;const r=Xp(50,250);return qp(s=>{if(!s||typeof s.loaded!="number")return;const a=s.loaded,o=s.lengthComputable?s.total:void 0,l=Math.max(0,o!=null?Math.min(a,o):a),c=Math.max(0,l-i),u=r(c);i=Math.max(i,l);const h={loaded:l,total:o,progress:o?l/o:void 0,bytes:c,rate:u||void 0,estimated:u&&o?(o-l)/u:void 0,event:s,lengthComputable:o!=null,[e?"download":"upload"]:!0};n(h)},t)},Mc=(n,e)=>{const t=n!=null;return[i=>e[0]({lengthComputable:t,total:n,loaded:i}),e[1]]},Ec=(n,e=P.asap)=>(...t)=>e(()=>n(...t)),Yp=Tt.hasStandardBrowserEnv?((n,e)=>t=>(t=new URL(t,Tt.origin),n.protocol===t.protocol&&n.host===t.host&&(e||n.port===t.port)))(new URL(Tt.origin),Tt.navigator&&/(msie|trident)/i.test(Tt.navigator.userAgent)):()=>!0,$p=Tt.hasStandardBrowserEnv?{write(n,e,t,i,r,s,a){if(typeof document>"u")return;const o=[`${n}=${encodeURIComponent(e)}`];P.isNumber(t)&&o.push(`expires=${new Date(t).toUTCString()}`),P.isString(i)&&o.push(`path=${i}`),P.isString(r)&&o.push(`domain=${r}`),s===!0&&o.push("secure"),P.isString(a)&&o.push(`SameSite=${a}`),document.cookie=o.join("; ")},read(n){if(typeof document>"u")return null;const e=document.cookie.split(";");for(let t=0;t<e.length;t++){const i=e[t].replace(/^\s+/,""),r=i.indexOf("=");if(r!==-1&&i.slice(0,r)===n)try{return decodeURIComponent(i.slice(r+1))}catch{return i.slice(r+1)}}return null},remove(n){this.write(n,"",Date.now()-864e5,"/")}}:{write(){},read(){return null},remove(){}};function Kp(n){return typeof n!="string"?!1:/^([a-z][a-z\d+\-.]*:)?\/\//i.test(n)}function Zp(n,e){if(!e)return n;let t=n.length;for(;t>0&&n.charCodeAt(t-1)===47;)t--;return n.slice(0,t)+"/"+e.replace(/^\/+/,"")}const Jp=/^https?:(?!\/\/)/i,Qp=/[\t\n\r]/g;function jp(n){let e=0;for(;e<n.length&&n.charCodeAt(e)<=32;)e++;return n.slice(e)}function em(n){return jp(n).replace(Qp,"")}function tm(n){return n&&n.replace(/(^|&)([^=&]*=)?[^&]+/g,(e,t,i="")=>`${t}${i}${Ds}`)}function nm(n){const e=n.replace(/^(https?:\/{0,2})[^/?#]*@/i,`$1${Ds}@`),t=e.indexOf("#"),r=(t===-1?e:e.slice(0,t)).replace(/([?&][^=&#]*=)[^&#]*/g,`$1${Ds}`);return t===-1?r:`${r}#${tm(e.slice(t+1))}`}function yc(n,e){if(typeof n=="string"){const t=em(n);if(Jp.test(t))throw new pe(`Invalid URL ${JSON.stringify(nm(t))}: missing "//" after protocol`,pe.ERR_INVALID_URL,e)}}function ff(n,e,t,i){yc(e,i);let r=!Kp(e);return n&&(r||t===!1)?(yc(n,i),Zp(n,e)):e}const bc=n=>n instanceof Lt?{...n}:n,im=n=>Object.getOwnPropertySymbols&&Object.getOwnPropertyDescriptor?Object.keys(n).concat(Object.getOwnPropertySymbols(n).filter(e=>Object.getOwnPropertyDescriptor(n,e).enumerable)):Object.keys(n);function vi(n,e){n=n||{},e=e||{};const t=Object.create(null);Object.defineProperty(t,"hasOwnProperty",{__proto__:null,value:Object.prototype.hasOwnProperty,enumerable:!1,writable:!0,configurable:!0});function i(u,h,d,m){return P.isPlainObject(u)&&P.isPlainObject(h)?P.merge.call({caseless:m},u,h):P.isPlainObject(h)?P.merge({},h):P.isArray(h)?h.slice():h}function r(u,h,d,m){if(P.isUndefined(h)){if(!P.isUndefined(u))return i(void 0,u,d,m)}else return i(u,h,d,m)}function s(u,h){if(!P.isUndefined(h))return i(void 0,h)}function a(u,h){if(P.isUndefined(h)){if(!P.isUndefined(u))return i(void 0,u)}else return i(void 0,h)}function o(u){const h=P.hasOwnProp(e,"transitional")?e.transitional:void 0;if(!P.isUndefined(h))if(P.isPlainObject(h)){if(P.hasOwnProp(h,u))return h[u]}else return;const d=P.hasOwnProp(n,"transitional")?n.transitional:void 0;if(P.isPlainObject(d)&&P.hasOwnProp(d,u))return d[u]}function l(u,h,d){if(P.hasOwnProp(e,d))return i(u,h);if(P.hasOwnProp(n,d))return i(void 0,u)}const c={url:s,method:s,data:s,baseURL:a,transformRequest:a,transformResponse:a,paramsSerializer:a,timeout:a,timeoutMessage:a,withCredentials:a,withXSRFToken:a,adapter:a,responseType:a,xsrfCookieName:a,xsrfHeaderName:a,onUploadProgress:a,onDownloadProgress:a,decompress:a,maxContentLength:a,maxBodyLength:a,beforeRedirect:a,transport:a,httpAgent:a,httpsAgent:a,cancelToken:a,socketPath:a,allowedSocketPaths:a,responseEncoding:a,validateStatus:l,headers:(u,h,d)=>r(bc(u),bc(h),d,!0)};return P.forEach(im({...n,...e}),function(h){if(h==="__proto__"||h==="constructor"||h==="prototype")return;const d=P.hasOwnProp(c,h)?c[h]:r,m=P.hasOwnProp(n,h)?n[h]:void 0,x=P.hasOwnProp(e,h)?e[h]:void 0,S=d(m,x,h);P.isUndefined(S)&&d!==l||(t[h]=S)}),P.hasOwnProp(e,"validateStatus")&&P.isUndefined(e.validateStatus)&&o("validateStatusUndefinedResolves")===!1&&(P.hasOwnProp(n,"validateStatus")?t.validateStatus=i(void 0,n.validateStatus):delete t.validateStatus),t}const rm=["content-type","content-length"];function sm(n,e,t){if(t!=="content-only"){n.set(e);return}Object.entries(e||{}).forEach(([i,r])=>{rm.includes(i.toLowerCase())&&n.set(i,r)})}const am=n=>encodeURIComponent(n).replace(/%([0-9A-F]{2})/gi,(e,t)=>String.fromCharCode(parseInt(t,16)));function df(n){const e=vi({},n),t=d=>P.hasOwnProp(e,d)?e[d]:void 0,i=t("data");let r=t("withXSRFToken");const s=t("xsrfHeaderName"),a=t("xsrfCookieName");let o=t("headers");const l=t("auth"),c=t("baseURL"),u=t("allowAbsoluteUrls"),h=t("url");if(e.headers=o=Lt.from(o),e.url=af(ff(c,h,u,e),t("params"),t("paramsSerializer")),l){const d=P.getSafeProp(l,"username")||"",m=P.getSafeProp(l,"password")||"";try{o.set("Authorization","Basic "+btoa(d+":"+(m?am(m):"")))}catch(x){throw pe.from(x,pe.ERR_BAD_OPTION_VALUE,n)}}if(P.isFormData(i)&&(Tt.hasStandardBrowserEnv||Tt.hasStandardBrowserWebWorkerEnv||P.isReactNative(i)?o.setContentType(void 0):P.isFunction(i.getHeaders)&&sm(o,i.getHeaders(),t("formDataHeaderPolicy"))),Tt.hasStandardBrowserEnv&&(P.isFunction(r)&&(r=r(e)),r===!0||r==null&&Yp(e.url))){const m=s&&a&&$p.read(a);m&&o.set(s,m)}return e}const om=typeof XMLHttpRequest<"u",lm=om&&function(n){return new Promise(function(t,i){const r=df(n);let s=r.data;const a=Lt.from(r.headers).normalize();let{responseType:o,onUploadProgress:l,onDownloadProgress:c}=r,u,h,d,m,x;function S(){m&&m(),x&&x(),r.cancelToken&&r.cancelToken.unsubscribe(u),r.signal&&r.signal.removeEventListener("abort",u)}let p=new XMLHttpRequest;p.open(r.method.toUpperCase(),r.url,!0),p.timeout=r.timeout;function f(){if(!p)return;const w=Lt.from("getAllResponseHeaders"in p&&p.getAllResponseHeaders()),A={data:!o||o==="text"||o==="json"?p.responseText:p.response,status:p.status,statusText:p.statusText,headers:w,config:n,request:p};uf(function(R){t(R),S()},function(R){i(R),S()},A),p=null}"onloadend"in p?p.onloadend=f:p.onreadystatechange=function(){!p||p.readyState!==4||p.status===0&&!(p.responseURL&&p.responseURL.startsWith("file:"))||setTimeout(f)},p.onabort=function(){p&&(i(new pe("Request aborted",pe.ECONNABORTED,n,p)),S(),p=null)},p.onerror=function(M){const A=M&&M.message?M.message:"Network Error",E=new pe(A,pe.ERR_NETWORK,n,p);E.event=M||null,i(E),S(),p=null},p.ontimeout=function(){let M=r.timeout?"timeout of "+r.timeout+"ms exceeded":"timeout exceeded";const A=r.transitional||fl;r.timeoutErrorMessage&&(M=r.timeoutErrorMessage),i(new pe(M,A.clarifyTimeoutError?pe.ETIMEDOUT:pe.ECONNABORTED,n,p)),S(),p=null},s===void 0&&a.setContentType(null),"setRequestHeader"in p&&P.forEach(ef(a),function(M,A){p.setRequestHeader(A,M)}),P.isUndefined(r.withCredentials)||(p.withCredentials=!!r.withCredentials),o&&o!=="json"&&(p.responseType=r.responseType),c&&([d,x]=Ls(c,!0),p.addEventListener("progress",d)),l&&p.upload&&([h,m]=Ls(l),p.upload.addEventListener("progress",h),p.upload.addEventListener("loadend",m)),(r.cancelToken||r.signal)&&(u=w=>{p&&(i(!w||w.type?new Br(null,n,p):w),p.abort(),S(),p=null)},r.cancelToken&&r.cancelToken.subscribe(u),r.signal&&(r.signal.aborted?u():r.signal.addEventListener("abort",u)));const y=Wp(r.url);if(y&&!Tt.protocols.includes(y)){i(new pe("Unsupported protocol "+y+":",pe.ERR_BAD_REQUEST,n)),S();return}p.send(s||null)})},cm=(n,e)=>{if(n=n?n.filter(Boolean):[],!e&&!n.length)return;const t=new AbortController;let i=!1;const r=function(l){if(!i){i=!0,a();const c=l instanceof Error?l:this.reason;t.abort(c instanceof pe?c:new Br(c instanceof Error?c.message:c))}};let s=e&&setTimeout(()=>{s=null,r(new pe(`timeout of ${e}ms exceeded`,pe.ETIMEDOUT))},e);const a=()=>{n&&(s&&clearTimeout(s),s=null,n.forEach(l=>{l.unsubscribe?l.unsubscribe(r):l.removeEventListener("abort",r)}),n=null)};n.forEach(l=>{if(!i){if(l.aborted){r.call(l);return}l.addEventListener("abort",r,{once:!0})}});const{signal:o}=t;return o.unsubscribe=()=>P.asap(a),o},um=function*(n,e){let t=n.byteLength;if(t<e){yield n;return}let i=0,r;for(;i<t;)r=i+e,yield n.slice(i,r),i=r},fm=async function*(n,e){for await(const t of dm(n))yield*um(t,e)},dm=async function*(n){if(n[Symbol.asyncIterator]){yield*n;return}const e=n.getReader();try{for(;;){const{done:t,value:i}=await e.read();if(t)break;yield i}}finally{await e.cancel()}},Tc=(n,e,t,i)=>{const r=fm(n,e);let s=0,a,o=l=>{a||(a=!0,i&&i(l))};return new ReadableStream({async pull(l){try{const{done:c,value:u}=await r.next();if(c){o(),l.close();return}let h=u.byteLength;if(t){let d=s+=h;t(d)}l.enqueue(new Uint8Array(u))}catch(c){throw o(c),c}},cancel(l){return o(l),r.return()}},{highWaterMark:2})},Ac=n=>n>=48&&n<=57||n>=65&&n<=70||n>=97&&n<=102,hf=(n,e,t)=>e+2<t&&Ac(n.charCodeAt(e+1))&&Ac(n.charCodeAt(e+2)),wc=n=>n<=57?n-48:(n&223)-55,hm=n=>n>=65&&n<=90||n>=97&&n<=122||n>=48&&n<=57||n===43||n===47||n===45||n===95,pm=n=>n===9||n===10||n===12||n===13||n===32,mm=n=>{const e=Math.floor(n/4),t=n%4;return e*3+(t===2?1:t===3?2:0)},_m=n=>{const e=n.length;let t=0;return e>0&&n.charCodeAt(e-1)===61&&(t++,e>1&&n.charCodeAt(e-2)===61&&t++),Math.floor((e-t)*3/4)},gm=n=>{const e=n.length;let t=0,i=0,r=!1;for(let s=0;s<e;s++){let a=n.charCodeAt(s);if(a===37&&hf(n,s,e)&&(a=wc(n.charCodeAt(s+1))*16+wc(n.charCodeAt(s+2)),s+=2),!pm(a)){if(a===61){i++;continue}if(!hm(a)||i>0){r=!0;continue}t++}}return r||i>2||i>0&&(t+i)%4!==0||t%4===1?_m(n):mm(t)},xm=(n,e)=>{if(!n||typeof n!="string"||!n.startsWith("data:"))return 0;const t=n.indexOf(",");if(t<0)return 0;const i=n.slice(5,t),r=n.slice(t+1);if(/;base64/i.test(i))return e(r);let a=0;for(let o=0,l=r.length;o<l;o++){const c=r.charCodeAt(o);if(c===37&&hf(r,o,l))a+=1,o+=2;else if(c<128)a+=1;else if(c<2048)a+=2;else if(c>=55296&&c<=56319&&o+1<l){const u=r.charCodeAt(o+1);u>=56320&&u<=57343?(a+=4,o++):a+=3}else a+=3}return a};function vm(n){const e=typeof n=="string"?n.indexOf("#"):-1;return xm(e===-1?n:n.slice(0,e),gm)}const hl="1.19.0",Rc=64*1024,{isFunction:Xr}=P,Sm=n=>encodeURIComponent(n).replace(/%([0-9A-F]{2})/gi,(e,t)=>String.fromCharCode(parseInt(t,16))),Cc=n=>{if(!P.isString(n))return n;try{return decodeURIComponent(n)}catch{return n}},Pc=(n,...e)=>{try{return!!n(...e)}catch{return!1}},Mm=n=>{const e=n.indexOf("://");let t=n;return e!==-1&&(t=t.slice(e+3)),t.includes("@")||t.includes(":")},Em=n=>{const e=P.global!==void 0&&P.global!==null?P.global:globalThis,{ReadableStream:t,TextEncoder:i}=e;n=P.merge.call({skipUndefined:!0},{Request:e.Request,Response:e.Response},n);const{fetch:r,Request:s,Response:a}=n,o=r?Xr(r):typeof fetch=="function",l=Xr(s),c=Xr(a);if(!o)return!1;const u=o&&Xr(t),h=o&&(typeof i=="function"?(f=>y=>f.encode(y))(new i):async f=>new Uint8Array(await new s(f).arrayBuffer())),d=l&&u&&Pc(()=>{let f=!1;const y=new s(Tt.origin,{body:new t,method:"POST",get duplex(){return f=!0,"half"}}),w=y.headers.has("Content-Type");return y.body!=null&&y.body.cancel(),f&&!w}),m=c&&u&&Pc(()=>P.isReadableStream(new a("").body)),x={stream:m&&(f=>f.body)};o&&["text","arrayBuffer","blob","formData","stream"].forEach(f=>{!x[f]&&(x[f]=(y,w)=>{let M=y&&y[f];if(M)return M.call(y);throw new pe(`Response type '${f}' is not supported`,pe.ERR_NOT_SUPPORT,w)})});const S=async f=>{if(f==null)return 0;if(P.isBlob(f))return f.size;if(P.isSpecCompliantForm(f))return(await new s(Tt.origin,{method:"POST",body:f}).arrayBuffer()).byteLength;if(P.isArrayBufferView(f)||P.isArrayBuffer(f))return f.byteLength;if(P.isURLSearchParams(f)&&(f=f+""),P.isString(f))return(await h(f)).byteLength},p=async(f,y)=>{const w=P.toFiniteNumber(f.getContentLength());return w??S(y)};return async f=>{let{url:y,method:w,data:M,signal:A,cancelToken:E,timeout:R,onDownloadProgress:g,onUploadProgress:T,responseType:D,headers:C,withCredentials:N="same-origin",fetchOptions:X,maxContentLength:q,maxBodyLength:F}=df(f);const Y=P.isNumber(q)&&q>-1,H=P.isNumber(F)&&F>-1,Z=W=>P.hasOwnProp(f,W)?f[W]:void 0;let ee=r||fetch;D=D?(D+"").toLowerCase():"text";let se=cm([A,E&&E.toAbortSignal()],R),ie=null;const xe=se&&se.unsubscribe&&(()=>{se.unsubscribe()});let He,je=null;const We=()=>new pe("Request body larger than maxBodyLength limit",pe.ERR_BAD_REQUEST,f,ie);try{let W;const ne=Z("auth");if(ne){const fe=P.getSafeProp(ne,"username")||"",Xe=P.getSafeProp(ne,"password")||"";W={username:fe,password:Xe}}if(Mm(y)){const fe=new URL(y,Tt.origin);if(!W&&(fe.username||fe.password)){const Xe=Cc(fe.username),et=Cc(fe.password);W={username:Xe,password:et}}(fe.username||fe.password)&&(fe.username="",fe.password="",y=fe.href)}if(W&&(C.delete("authorization"),C.set("Authorization","Basic "+btoa(Sm((W.username||"")+":"+(W.password||""))))),Y&&typeof y=="string"&&y.startsWith("data:")&&vm(y)>q)throw new pe("maxContentLength size of "+q+" exceeded",pe.ERR_BAD_RESPONSE,f,ie);if(H&&w!=="get"&&w!=="head"){const fe=await S(M);if(typeof fe=="number"&&isFinite(fe)&&(He=fe,fe>F))throw We()}const te=H&&(P.isReadableStream(M)||P.isStream(M)),Pe=(fe,Xe,et)=>Tc(fe,Rc,rt=>{if(H&&rt>F)throw je=We();Xe&&Xe(rt)},et);if(d&&w!=="get"&&w!=="head"&&(T||te)){if(He=He??await p(C,M),He!==0||te){let fe=new s(y,{method:"POST",body:M,duplex:"half"}),Xe;if(P.isFormData(M)&&(Xe=fe.headers.get("content-type"))&&C.setContentType(Xe),fe.body){const[et,rt]=T&&Mc(He,Ls(Ec(T)))||[];M=Pe(fe.body,et,rt)}}}else if(te&&!l&&u&&w!=="get"&&w!=="head")M=Pe(M);else if(te&&l&&!d&&w!=="get"&&w!=="head")throw new pe("Stream request bodies are not supported by the current fetch implementation",pe.ERR_NOT_SUPPORT,f,ie);P.isString(N)||(N=N?"include":"omit");const Le=l&&"credentials"in s.prototype;if(P.isFormData(M)){const fe=C.getContentType();fe&&/^multipart\/form-data/i.test(fe)&&!/boundary=/i.test(fe)&&C.delete("content-type")}C.set("User-Agent","axios/"+hl,!1);const Re={...X,signal:se,method:w.toUpperCase(),headers:ef(C.normalize()),body:M,duplex:"half",credentials:Le?N:void 0};ie=l&&new s(y,Re);let Ke=await(l?ee(ie,X):ee(y,Re));const Be=Lt.from(Ke.headers);if(Y){const fe=P.toFiniteNumber(Be.getContentLength());if(fe!=null&&fe>q)throw new pe("maxContentLength size of "+q+" exceeded",pe.ERR_BAD_RESPONSE,f,ie)}const Ze=m&&(D==="stream"||D==="response");if(m&&Ke.body&&(g||Y||Ze&&xe)){const fe={};["status","statusText","headers"].forEach(st=>{fe[st]=Ke[st]});const Xe=P.toFiniteNumber(Be.getContentLength()),[et,rt]=g&&Mc(Xe,Ls(Ec(g),!0))||[];let xt=0;const ct=st=>{if(Y&&(xt=st,xt>q))throw new pe("maxContentLength size of "+q+" exceeded",pe.ERR_BAD_RESPONSE,f,ie);et&&et(st)};Ke=new a(Tc(Ke.body,Rc,ct,()=>{rt&&rt(),xe&&xe()}),fe)}D=D||"text";let Oe=await x[P.findKey(x,D)||"text"](Ke,f);if(Y&&!m&&!Ze){let fe;if(Oe!=null&&(typeof Oe.byteLength=="number"?fe=Oe.byteLength:typeof Oe.size=="number"?fe=Oe.size:typeof Oe=="string"&&(fe=typeof i=="function"?new i().encode(Oe).byteLength:Oe.length)),typeof fe=="number"&&fe>q)throw new pe("maxContentLength size of "+q+" exceeded",pe.ERR_BAD_RESPONSE,f,ie)}return!Ze&&xe&&xe(),await new Promise((fe,Xe)=>{uf(fe,Xe,{data:Oe,headers:Lt.from(Ke.headers),status:Ke.status,statusText:Ke.statusText,config:f,request:ie})})}catch(W){if(xe&&xe(),se&&se.aborted&&se.reason instanceof pe){const ne=se.reason;throw ne.config=f,ie&&(ne.request=ie),W!==ne&&Object.defineProperty(ne,"cause",{__proto__:null,value:W,writable:!0,enumerable:!1,configurable:!0}),ne}if(je)throw ie&&!je.request&&(je.request=ie),je;if(W instanceof pe)throw ie&&!W.request&&(W.request=ie),W;if(W&&W.name==="TypeError"&&/Load failed|fetch/i.test(W.message)){const ne=new pe("Network Error",pe.ERR_NETWORK,f,ie,W&&W.response);throw Object.defineProperty(ne,"cause",{__proto__:null,value:W.cause||W,writable:!0,enumerable:!1,configurable:!0}),ne}throw pe.from(W,W&&W.code,f,ie,W&&W.response)}}},ym=new Map,pf=n=>{let e=n&&n.env||{};const{fetch:t,Request:i,Response:r}=e,s=[i,r,t];let a=s.length,o=a,l,c,u=ym;for(;o--;)l=s[o],c=u.get(l),c===void 0&&u.set(l,c=o?new Map:Em(e)),u=c;return c};pf();const pl={http:Rp,xhr:lm,fetch:{get:pf}};P.forEach(pl,(n,e)=>{if(n){try{Object.defineProperty(n,"name",{__proto__:null,value:e})}catch{}Object.defineProperty(n,"adapterName",{__proto__:null,value:e})}});const Dc=n=>`- ${n}`,bm=n=>P.isFunction(n)||n===null||n===!1;function Tm(n,e){n=P.isArray(n)?n:[n];const{length:t}=n;let i,r;const s={};for(let a=0;a<t;a++){i=n[a];let o;if(r=i,!bm(i)&&(r=pl[(o=String(i)).toLowerCase()],r===void 0))throw new pe(`Unknown adapter '${o}'`);if(r&&(P.isFunction(r)||(r=r.get(e))))break;s[o||"#"+a]=r}if(!r){const a=Object.entries(s).map(([l,c])=>`adapter ${l} `+(c===!1?"is not supported by the environment":"is not available in the build"));let o=t?a.length>1?`since :
`+a.map(Dc).join(`
`):" "+Dc(a[0]):"as no adapter specified";throw new pe("There is no suitable adapter to dispatch the request "+o,pe.ERR_NOT_SUPPORT)}return r}const mf={getAdapter:Tm,adapters:pl};function ua(n){if(n.cancelToken&&n.cancelToken.throwIfRequested(),n.signal&&n.signal.aborted)throw new Br(null,n)}function fa(n){return ua(n),n.headers=Lt.from(n.headers),n.data=ca.call(n,n.transformRequest),["post","put","patch"].indexOf(n.method)!==-1&&n.headers.setContentType("application/x-www-form-urlencoded",!1),mf.getAdapter(n.adapter||Fr.adapter,n)(n).then(function(i){ua(n),n.response=i;try{i.data=ca.call(n,n.transformResponse,i)}finally{delete n.response}return i.headers=Lt.from(i.headers),i},function(i){if(!cf(i)&&(ua(n),i&&i.response)){n.response=i.response;try{i.response.data=ca.call(n,n.transformResponse,i.response)}finally{delete n.response}i.response.headers=Lt.from(i.response.headers)}return Promise.reject(i)})}const qs={};["object","boolean","number","function","string","symbol"].forEach((n,e)=>{qs[n]=function(i){return typeof i===n||"a"+(e<1?"n ":" ")+n}});const Lc={};qs.transitional=function(e,t,i){function r(s,a){return"[Axios v"+hl+"] Transitional option '"+s+"'"+a+(i?". "+i:"")}return(s,a,o)=>{if(e===!1)throw new pe(r(a," has been removed"+(t?" in "+t:"")),pe.ERR_DEPRECATED);return t&&!Lc[a]&&(Lc[a]=!0,console.warn(r(a," has been deprecated since v"+t+" and will be removed in the near future"))),e?e(s,a,o):!0}};qs.spelling=function(e){return(t,i)=>(console.warn(`${i} is likely a misspelling of ${e}`),!0)};function Am(n,e,t){if(typeof n!="object"||n===null)throw new pe("options must be an object",pe.ERR_BAD_OPTION_VALUE);const i=Object.keys(n);let r=i.length;for(;r-- >0;){const s=i[r],a=Object.prototype.hasOwnProperty.call(e,s)?e[s]:void 0;if(a){const o=n[s],l=o===void 0||a(o,s,n);if(l!==!0)throw new pe("option "+s+" must be "+l,pe.ERR_BAD_OPTION_VALUE);continue}if(t!==!0)throw new pe("Unknown option "+s,pe.ERR_BAD_OPTION)}}const Es={assertOptions:Am,validators:qs},Rt=Es.validators;let di=class{constructor(e){this.defaults=e||{},this.interceptors={request:new vc,response:new vc}}async request(e,t){try{return await this._request(e,t)}catch(i){if(i instanceof Error){let r={};Error.captureStackTrace?Error.captureStackTrace(r):r=new Error;const s=(()=>{if(!r.stack)return"";const a=r.stack.indexOf(`
`);return a===-1?"":r.stack.slice(a+1)})();try{if(!i.stack)i.stack=s;else if(s){const a=s.indexOf(`
`),o=a===-1?-1:s.indexOf(`
`,a+1),l=o===-1?"":s.slice(o+1);String(i.stack).endsWith(l)||(i.stack+=`
`+s)}}catch{}}throw i}}_request(e,t){typeof e=="string"?(t=t||{},t.url=e):t=e||{},t=vi(this.defaults,t);const{transitional:i,paramsSerializer:r,headers:s}=t;i!==void 0&&Es.assertOptions(i,{silentJSONParsing:Rt.transitional(Rt.boolean),forcedJSONParsing:Rt.transitional(Rt.boolean),clarifyTimeoutError:Rt.transitional(Rt.boolean),legacyInterceptorReqResOrdering:Rt.transitional(Rt.boolean),advertiseZstdAcceptEncoding:Rt.transitional(Rt.boolean),validateStatusUndefinedResolves:Rt.transitional(Rt.boolean)},!1),r!=null&&(P.isFunction(r)?t.paramsSerializer={serialize:r}:Es.assertOptions(r,{encode:Rt.function,serialize:Rt.function},!0)),t.allowAbsoluteUrls!==void 0||(this.defaults.allowAbsoluteUrls!==void 0?t.allowAbsoluteUrls=this.defaults.allowAbsoluteUrls:t.allowAbsoluteUrls=!0),Es.assertOptions(t,{baseUrl:Rt.spelling("baseURL"),withXsrfToken:Rt.spelling("withXSRFToken")},!0),t.method=(t.method||this.defaults.method||"get").toLowerCase();let a=s&&P.merge(s.common,s[t.method]);s&&P.forEach(["delete","get","head","post","put","patch","query","common"],x=>{delete s[x]}),t.headers=Lt.concat(a,s);const o=[];let l=!0;this.interceptors.request.forEach(function(S){if(typeof S.runWhen=="function"&&S.runWhen(t)===!1)return;l=l&&S.synchronous;const p=t.transitional||fl;p&&p.legacyInterceptorReqResOrdering?o.unshift(S.fulfilled,S.rejected):o.push(S.fulfilled,S.rejected)});const c=[];this.interceptors.response.forEach(function(S){c.push(S.fulfilled,S.rejected)});let u,h=0,d;if(!l){const x=[fa.bind(this),void 0];for(x.unshift(...o),x.push(...c),d=x.length,u=Promise.resolve(t);h<d;)u=u.then(x[h++],x[h++]);return u}d=o.length;let m=t;for(;h<d;){const x=o[h++],S=o[h++];try{m=x?x(m):m}catch(p){if(!S){u=Promise.reject(p);break}try{const f=S.call(this,p);P.isThenable(f)&&(u=Promise.resolve(f).then(()=>fa.call(this,m)))}catch(f){u=Promise.reject(f)}break}}if(!u)try{u=fa.call(this,m)}catch(x){u=Promise.reject(x)}for(h=0,d=c.length;h<d;)u=u.then(c[h++],c[h++]);return u}getUri(e){e=vi(this.defaults,e);const t=ff(e.baseURL,e.url,e.allowAbsoluteUrls,e);return af(t,e.params,e.paramsSerializer)}};P.forEach(["delete","get","head","options"],function(e){di.prototype[e]=function(t,i){return this.request(vi(i||{},{method:e,url:t,data:i&&P.hasOwnProp(i,"data")?i.data:void 0}))}});P.forEach(["post","put","patch","query"],function(e){function t(i){return function(s,a,o){return this.request(vi(o||{},{method:e,headers:i?{"Content-Type":"multipart/form-data"}:{},url:s,data:a}))}}di.prototype[e]=t(),e!=="query"&&(di.prototype[e+"Form"]=t(!0))});let wm=class _f{constructor(e){if(typeof e!="function")throw new TypeError("executor must be a function.");let t;this.promise=new Promise(function(s){t=s});const i=this;this.promise.then(r=>{if(!i._listeners)return;let s=i._listeners.length;for(;s-- >0;)i._listeners[s](r);i._listeners=null}),this.promise.then=r=>{let s;const a=new Promise(o=>{i.subscribe(o),s=o}).then(r);return a.cancel=function(){i.unsubscribe(s)},a},e(function(s,a,o){i.reason||(i.reason=new Br(s,a,o),t(i.reason))})}throwIfRequested(){if(this.reason)throw this.reason}subscribe(e){if(this.reason){e(this.reason);return}this._listeners?this._listeners.push(e):this._listeners=[e]}unsubscribe(e){if(!this._listeners)return;const t=this._listeners.indexOf(e);t!==-1&&this._listeners.splice(t,1)}toAbortSignal(){const e=new AbortController,t=i=>{e.abort(i)};return this.subscribe(t),e.signal.unsubscribe=()=>this.unsubscribe(t),e.signal}static source(){let e;return{token:new _f(function(r){e=r}),cancel:e}}};function Rm(n){return function(t){return n.apply(null,t)}}function Cm(n){return P.isObject(n)&&n.isAxiosError===!0}const ja={Continue:100,SwitchingProtocols:101,Processing:102,EarlyHints:103,Ok:200,Created:201,Accepted:202,NonAuthoritativeInformation:203,NoContent:204,ResetContent:205,PartialContent:206,MultiStatus:207,AlreadyReported:208,ImUsed:226,MultipleChoices:300,MovedPermanently:301,Found:302,SeeOther:303,NotModified:304,UseProxy:305,Unused:306,TemporaryRedirect:307,PermanentRedirect:308,BadRequest:400,Unauthorized:401,PaymentRequired:402,Forbidden:403,NotFound:404,MethodNotAllowed:405,NotAcceptable:406,ProxyAuthenticationRequired:407,RequestTimeout:408,Conflict:409,Gone:410,LengthRequired:411,PreconditionFailed:412,PayloadTooLarge:413,UriTooLong:414,UnsupportedMediaType:415,RangeNotSatisfiable:416,ExpectationFailed:417,ImATeapot:418,MisdirectedRequest:421,UnprocessableEntity:422,Locked:423,FailedDependency:424,TooEarly:425,UpgradeRequired:426,PreconditionRequired:428,TooManyRequests:429,RequestHeaderFieldsTooLarge:431,UnavailableForLegalReasons:451,InternalServerError:500,NotImplemented:501,BadGateway:502,ServiceUnavailable:503,GatewayTimeout:504,HttpVersionNotSupported:505,VariantAlsoNegotiates:506,InsufficientStorage:507,LoopDetected:508,NotExtended:510,NetworkAuthenticationRequired:511,WebServerReturnsAnUnknownError:520,WebServerIsDown:521,ConnectionTimedOut:522,OriginIsUnreachable:523,TimeoutOccurred:524,SslHandshakeFailed:525,InvalidSslCertificate:526};Object.entries(ja).forEach(([n,e])=>{ja[e]=n});function gf(n){const e=new di(n),t=Xu(di.prototype.request,e);return P.extend(t,di.prototype,e,{allOwnKeys:!0}),P.extend(t,e,null,{allOwnKeys:!0}),t.create=function(r){return gf(vi(n,r))},t}const gt=gf(Fr);gt.Axios=di;gt.CanceledError=Br;gt.CancelToken=wm;gt.isCancel=cf;gt.VERSION=hl;gt.toFormData=Xs;gt.AxiosError=pe;gt.Cancel=gt.CanceledError;gt.all=function(e){return Promise.all(e)};gt.spread=Rm;gt.isAxiosError=Cm;gt.mergeConfig=vi;gt.AxiosHeaders=Lt;gt.formToJSON=n=>lf(P.isHTMLForm(n)?new FormData(n):n);gt.getAdapter=mf.getAdapter;gt.HttpStatusCode=ja;gt.default=gt;const{Axios:My,AxiosError:Ey,CanceledError:yy,isCancel:by,CancelToken:Ty,VERSION:Ay,all:wy,Cancel:Ry,isAxiosError:Cy,spread:Py,toFormData:Dy,AxiosHeaders:Ly,HttpStatusCode:Iy,formToJSON:Uy,getAdapter:Ny,mergeConfig:Oy,create:Fy}=gt;window.axios=gt;window.axios.defaults.headers.common["X-Requested-With"]="XMLHttpRequest";const ml="185",Pm=0,Ic=1,Dm=2,ys=1,Lm=2,Er=3,$n=0,Vt=1,Rn=2,Pn=0,Xi=1,Uc=2,Nc=3,Oc=4,Im=5,ai=100,Um=101,Nm=102,Om=103,Fm=104,Bm=200,zm=201,Hm=202,Vm=203,eo=204,to=205,Gm=206,km=207,Wm=208,Xm=209,qm=210,Ym=211,$m=212,Km=213,Zm=214,no=0,io=1,ro=2,Zi=3,so=4,ao=5,oo=6,lo=7,xf=0,Jm=1,Qm=2,_n=0,vf=1,Sf=2,Mf=3,Ef=4,yf=5,bf=6,Tf=7,Af=300,Si=301,Ji=302,da=303,ha=304,Ys=306,co=1e3,Cn=1001,uo=1002,At=1003,jm=1004,qr=1005,Dt=1006,pa=1007,ci=1008,Yt=1009,wf=1010,Rf=1011,Cr=1012,_l=1013,vn=1014,pn=1015,In=1016,gl=1017,xl=1018,Pr=1020,Cf=35902,Pf=35899,Df=1021,Lf=1022,nn=1023,Un=1026,ui=1027,If=1028,vl=1029,Mi=1030,Sl=1031,Ml=1033,bs=33776,Ts=33777,As=33778,ws=33779,fo=35840,ho=35841,po=35842,mo=35843,_o=36196,go=37492,xo=37496,vo=37488,So=37489,Is=37490,Mo=37491,Eo=37808,yo=37809,bo=37810,To=37811,Ao=37812,wo=37813,Ro=37814,Co=37815,Po=37816,Do=37817,Lo=37818,Io=37819,Uo=37820,No=37821,Oo=36492,Fo=36494,Bo=36495,zo=36283,Ho=36284,Us=36285,Vo=36286,e_=3200,Go=0,t_=1,qn="",Xt="srgb",Ns="srgb-linear",Os="linear",Qe="srgb",Pi=7680,Fc=519,n_=512,i_=513,r_=514,El=515,s_=516,a_=517,yl=518,o_=519,Bc=35044,zc="300 es",mn=2e3,Dr=2001;function l_(n){for(let e=n.length-1;e>=0;--e)if(n[e]>=65535)return!0;return!1}function Fs(n){return document.createElementNS("http://www.w3.org/1999/xhtml",n)}function c_(){const n=Fs("canvas");return n.style.display="block",n}const Hc={};function Vc(...n){const e="THREE."+n.shift();console.log(e,...n)}function Uf(n){const e=n[0];if(typeof e=="string"&&e.startsWith("TSL:")){const t=n[1];t&&t.isStackTrace?n[0]+=" "+t.getLocation():n[1]='Stack trace not available. Enable "THREE.Node.captureStackTrace" to capture stack traces.'}return n}function De(...n){n=Uf(n);const e="THREE."+n.shift();{const t=n[0];t&&t.isStackTrace?console.warn(t.getError(e)):console.warn(e,...n)}}function $e(...n){n=Uf(n);const e="THREE."+n.shift();{const t=n[0];t&&t.isStackTrace?console.error(t.getError(e)):console.error(e,...n)}}function qi(...n){const e=n.join(" ");e in Hc||(Hc[e]=!0,De(...n))}function u_(n,e,t){return new Promise(function(i,r){function s(){switch(n.clientWaitSync(e,n.SYNC_FLUSH_COMMANDS_BIT,0)){case n.WAIT_FAILED:r();break;case n.TIMEOUT_EXPIRED:setTimeout(s,t);break;default:i()}}setTimeout(s,t)})}const f_={[no]:io,[ro]:oo,[so]:lo,[Zi]:ao,[io]:no,[oo]:ro,[lo]:so,[ao]:Zi};class Ti{addEventListener(e,t){this._listeners===void 0&&(this._listeners={});const i=this._listeners;i[e]===void 0&&(i[e]=[]),i[e].indexOf(t)===-1&&i[e].push(t)}hasEventListener(e,t){const i=this._listeners;return i===void 0?!1:i[e]!==void 0&&i[e].indexOf(t)!==-1}removeEventListener(e,t){const i=this._listeners;if(i===void 0)return;const r=i[e];if(r!==void 0){const s=r.indexOf(t);s!==-1&&r.splice(s,1)}}dispatchEvent(e){const t=this._listeners;if(t===void 0)return;const i=t[e.type];if(i!==void 0){e.target=this;const r=i.slice(0);for(let s=0,a=r.length;s<a;s++)r[s].call(this,e);e.target=null}}}const Ct=["00","01","02","03","04","05","06","07","08","09","0a","0b","0c","0d","0e","0f","10","11","12","13","14","15","16","17","18","19","1a","1b","1c","1d","1e","1f","20","21","22","23","24","25","26","27","28","29","2a","2b","2c","2d","2e","2f","30","31","32","33","34","35","36","37","38","39","3a","3b","3c","3d","3e","3f","40","41","42","43","44","45","46","47","48","49","4a","4b","4c","4d","4e","4f","50","51","52","53","54","55","56","57","58","59","5a","5b","5c","5d","5e","5f","60","61","62","63","64","65","66","67","68","69","6a","6b","6c","6d","6e","6f","70","71","72","73","74","75","76","77","78","79","7a","7b","7c","7d","7e","7f","80","81","82","83","84","85","86","87","88","89","8a","8b","8c","8d","8e","8f","90","91","92","93","94","95","96","97","98","99","9a","9b","9c","9d","9e","9f","a0","a1","a2","a3","a4","a5","a6","a7","a8","a9","aa","ab","ac","ad","ae","af","b0","b1","b2","b3","b4","b5","b6","b7","b8","b9","ba","bb","bc","bd","be","bf","c0","c1","c2","c3","c4","c5","c6","c7","c8","c9","ca","cb","cc","cd","ce","cf","d0","d1","d2","d3","d4","d5","d6","d7","d8","d9","da","db","dc","dd","de","df","e0","e1","e2","e3","e4","e5","e6","e7","e8","e9","ea","eb","ec","ed","ee","ef","f0","f1","f2","f3","f4","f5","f6","f7","f8","f9","fa","fb","fc","fd","fe","ff"],ma=Math.PI/180,ko=180/Math.PI;function zr(){const n=Math.random()*4294967295|0,e=Math.random()*4294967295|0,t=Math.random()*4294967295|0,i=Math.random()*4294967295|0;return(Ct[n&255]+Ct[n>>8&255]+Ct[n>>16&255]+Ct[n>>24&255]+"-"+Ct[e&255]+Ct[e>>8&255]+"-"+Ct[e>>16&15|64]+Ct[e>>24&255]+"-"+Ct[t&63|128]+Ct[t>>8&255]+"-"+Ct[t>>16&255]+Ct[t>>24&255]+Ct[i&255]+Ct[i>>8&255]+Ct[i>>16&255]+Ct[i>>24&255]).toLowerCase()}function ke(n,e,t){return Math.max(e,Math.min(t,n))}function d_(n,e){return(n%e+e)%e}function _a(n,e,t){return(1-t)*n+t*e}function fr(n,e){switch(e.constructor){case Float32Array:return n;case Uint32Array:return n/4294967295;case Uint16Array:return n/65535;case Uint8Array:return n/255;case Int32Array:return Math.max(n/2147483647,-1);case Int16Array:return Math.max(n/32767,-1);case Int8Array:return Math.max(n/127,-1);default:throw new Error("THREE.MathUtils: Invalid component type.")}}function zt(n,e){switch(e.constructor){case Float32Array:return n;case Uint32Array:return Math.round(n*4294967295);case Uint16Array:return Math.round(n*65535);case Uint8Array:return Math.round(n*255);case Int32Array:return Math.round(n*2147483647);case Int16Array:return Math.round(n*32767);case Int8Array:return Math.round(n*127);default:throw new Error("THREE.MathUtils: Invalid component type.")}}const ec=class ec{constructor(e=0,t=0){this.x=e,this.y=t}get width(){return this.x}set width(e){this.x=e}get height(){return this.y}set height(e){this.y=e}set(e,t){return this.x=e,this.y=t,this}setScalar(e){return this.x=e,this.y=e,this}setX(e){return this.x=e,this}setY(e){return this.y=e,this}setComponent(e,t){switch(e){case 0:this.x=t;break;case 1:this.y=t;break;default:throw new Error("THREE.Vector2: index is out of range: "+e)}return this}getComponent(e){switch(e){case 0:return this.x;case 1:return this.y;default:throw new Error("THREE.Vector2: index is out of range: "+e)}}clone(){return new this.constructor(this.x,this.y)}copy(e){return this.x=e.x,this.y=e.y,this}add(e){return this.x+=e.x,this.y+=e.y,this}addScalar(e){return this.x+=e,this.y+=e,this}addVectors(e,t){return this.x=e.x+t.x,this.y=e.y+t.y,this}addScaledVector(e,t){return this.x+=e.x*t,this.y+=e.y*t,this}sub(e){return this.x-=e.x,this.y-=e.y,this}subScalar(e){return this.x-=e,this.y-=e,this}subVectors(e,t){return this.x=e.x-t.x,this.y=e.y-t.y,this}multiply(e){return this.x*=e.x,this.y*=e.y,this}multiplyScalar(e){return this.x*=e,this.y*=e,this}divide(e){return this.x/=e.x,this.y/=e.y,this}divideScalar(e){return this.multiplyScalar(1/e)}applyMatrix3(e){const t=this.x,i=this.y,r=e.elements;return this.x=r[0]*t+r[3]*i+r[6],this.y=r[1]*t+r[4]*i+r[7],this}min(e){return this.x=Math.min(this.x,e.x),this.y=Math.min(this.y,e.y),this}max(e){return this.x=Math.max(this.x,e.x),this.y=Math.max(this.y,e.y),this}clamp(e,t){return this.x=ke(this.x,e.x,t.x),this.y=ke(this.y,e.y,t.y),this}clampScalar(e,t){return this.x=ke(this.x,e,t),this.y=ke(this.y,e,t),this}clampLength(e,t){const i=this.length();return this.divideScalar(i||1).multiplyScalar(ke(i,e,t))}floor(){return this.x=Math.floor(this.x),this.y=Math.floor(this.y),this}ceil(){return this.x=Math.ceil(this.x),this.y=Math.ceil(this.y),this}round(){return this.x=Math.round(this.x),this.y=Math.round(this.y),this}roundToZero(){return this.x=Math.trunc(this.x),this.y=Math.trunc(this.y),this}negate(){return this.x=-this.x,this.y=-this.y,this}dot(e){return this.x*e.x+this.y*e.y}cross(e){return this.x*e.y-this.y*e.x}lengthSq(){return this.x*this.x+this.y*this.y}length(){return Math.sqrt(this.x*this.x+this.y*this.y)}manhattanLength(){return Math.abs(this.x)+Math.abs(this.y)}normalize(){return this.divideScalar(this.length()||1)}angle(){return Math.atan2(-this.y,-this.x)+Math.PI}angleTo(e){const t=Math.sqrt(this.lengthSq()*e.lengthSq());if(t===0)return Math.PI/2;const i=this.dot(e)/t;return Math.acos(ke(i,-1,1))}distanceTo(e){return Math.sqrt(this.distanceToSquared(e))}distanceToSquared(e){const t=this.x-e.x,i=this.y-e.y;return t*t+i*i}manhattanDistanceTo(e){return Math.abs(this.x-e.x)+Math.abs(this.y-e.y)}setLength(e){return this.normalize().multiplyScalar(e)}lerp(e,t){return this.x+=(e.x-this.x)*t,this.y+=(e.y-this.y)*t,this}lerpVectors(e,t,i){return this.x=e.x+(t.x-e.x)*i,this.y=e.y+(t.y-e.y)*i,this}equals(e){return e.x===this.x&&e.y===this.y}fromArray(e,t=0){return this.x=e[t],this.y=e[t+1],this}toArray(e=[],t=0){return e[t]=this.x,e[t+1]=this.y,e}fromBufferAttribute(e,t){return this.x=e.getX(t),this.y=e.getY(t),this}rotateAround(e,t){const i=Math.cos(t),r=Math.sin(t),s=this.x-e.x,a=this.y-e.y;return this.x=s*i-a*r+e.x,this.y=s*r+a*i+e.y,this}random(){return this.x=Math.random(),this.y=Math.random(),this}*[Symbol.iterator](){yield this.x,yield this.y}};ec.prototype.isVector2=!0;let Ve=ec;class ir{constructor(e=0,t=0,i=0,r=1){this.isQuaternion=!0,this._x=e,this._y=t,this._z=i,this._w=r}static slerpFlat(e,t,i,r,s,a,o){let l=i[r+0],c=i[r+1],u=i[r+2],h=i[r+3],d=s[a+0],m=s[a+1],x=s[a+2],S=s[a+3];if(h!==S||l!==d||c!==m||u!==x){let p=l*d+c*m+u*x+h*S;p<0&&(d=-d,m=-m,x=-x,S=-S,p=-p);let f=1-o;if(p<.9995){const y=Math.acos(p),w=Math.sin(y);f=Math.sin(f*y)/w,o=Math.sin(o*y)/w,l=l*f+d*o,c=c*f+m*o,u=u*f+x*o,h=h*f+S*o}else{l=l*f+d*o,c=c*f+m*o,u=u*f+x*o,h=h*f+S*o;const y=1/Math.sqrt(l*l+c*c+u*u+h*h);l*=y,c*=y,u*=y,h*=y}}e[t]=l,e[t+1]=c,e[t+2]=u,e[t+3]=h}static multiplyQuaternionsFlat(e,t,i,r,s,a){const o=i[r],l=i[r+1],c=i[r+2],u=i[r+3],h=s[a],d=s[a+1],m=s[a+2],x=s[a+3];return e[t]=o*x+u*h+l*m-c*d,e[t+1]=l*x+u*d+c*h-o*m,e[t+2]=c*x+u*m+o*d-l*h,e[t+3]=u*x-o*h-l*d-c*m,e}get x(){return this._x}set x(e){this._x=e,this._onChangeCallback()}get y(){return this._y}set y(e){this._y=e,this._onChangeCallback()}get z(){return this._z}set z(e){this._z=e,this._onChangeCallback()}get w(){return this._w}set w(e){this._w=e,this._onChangeCallback()}set(e,t,i,r){return this._x=e,this._y=t,this._z=i,this._w=r,this._onChangeCallback(),this}clone(){return new this.constructor(this._x,this._y,this._z,this._w)}copy(e){return this._x=e.x,this._y=e.y,this._z=e.z,this._w=e.w,this._onChangeCallback(),this}setFromEuler(e,t=!0){const i=e._x,r=e._y,s=e._z,a=e._order,o=Math.cos,l=Math.sin,c=o(i/2),u=o(r/2),h=o(s/2),d=l(i/2),m=l(r/2),x=l(s/2);switch(a){case"XYZ":this._x=d*u*h+c*m*x,this._y=c*m*h-d*u*x,this._z=c*u*x+d*m*h,this._w=c*u*h-d*m*x;break;case"YXZ":this._x=d*u*h+c*m*x,this._y=c*m*h-d*u*x,this._z=c*u*x-d*m*h,this._w=c*u*h+d*m*x;break;case"ZXY":this._x=d*u*h-c*m*x,this._y=c*m*h+d*u*x,this._z=c*u*x+d*m*h,this._w=c*u*h-d*m*x;break;case"ZYX":this._x=d*u*h-c*m*x,this._y=c*m*h+d*u*x,this._z=c*u*x-d*m*h,this._w=c*u*h+d*m*x;break;case"YZX":this._x=d*u*h+c*m*x,this._y=c*m*h+d*u*x,this._z=c*u*x-d*m*h,this._w=c*u*h-d*m*x;break;case"XZY":this._x=d*u*h-c*m*x,this._y=c*m*h-d*u*x,this._z=c*u*x+d*m*h,this._w=c*u*h+d*m*x;break;default:De("Quaternion: .setFromEuler() encountered an unknown order: "+a)}return t===!0&&this._onChangeCallback(),this}setFromAxisAngle(e,t){const i=t/2,r=Math.sin(i);return this._x=e.x*r,this._y=e.y*r,this._z=e.z*r,this._w=Math.cos(i),this._onChangeCallback(),this}setFromRotationMatrix(e){const t=e.elements,i=t[0],r=t[4],s=t[8],a=t[1],o=t[5],l=t[9],c=t[2],u=t[6],h=t[10],d=i+o+h;if(d>0){const m=.5/Math.sqrt(d+1);this._w=.25/m,this._x=(u-l)*m,this._y=(s-c)*m,this._z=(a-r)*m}else if(i>o&&i>h){const m=2*Math.sqrt(1+i-o-h);this._w=(u-l)/m,this._x=.25*m,this._y=(r+a)/m,this._z=(s+c)/m}else if(o>h){const m=2*Math.sqrt(1+o-i-h);this._w=(s-c)/m,this._x=(r+a)/m,this._y=.25*m,this._z=(l+u)/m}else{const m=2*Math.sqrt(1+h-i-o);this._w=(a-r)/m,this._x=(s+c)/m,this._y=(l+u)/m,this._z=.25*m}return this._onChangeCallback(),this}setFromUnitVectors(e,t){let i=e.dot(t)+1;return i<1e-8?(i=0,Math.abs(e.x)>Math.abs(e.z)?(this._x=-e.y,this._y=e.x,this._z=0,this._w=i):(this._x=0,this._y=-e.z,this._z=e.y,this._w=i)):(this._x=e.y*t.z-e.z*t.y,this._y=e.z*t.x-e.x*t.z,this._z=e.x*t.y-e.y*t.x,this._w=i),this.normalize()}angleTo(e){return 2*Math.acos(Math.abs(ke(this.dot(e),-1,1)))}rotateTowards(e,t){const i=this.angleTo(e);if(i===0)return this;const r=Math.min(1,t/i);return this.slerp(e,r),this}identity(){return this.set(0,0,0,1)}invert(){return this.conjugate()}conjugate(){return this._x*=-1,this._y*=-1,this._z*=-1,this._onChangeCallback(),this}dot(e){return this._x*e._x+this._y*e._y+this._z*e._z+this._w*e._w}lengthSq(){return this._x*this._x+this._y*this._y+this._z*this._z+this._w*this._w}length(){return Math.sqrt(this._x*this._x+this._y*this._y+this._z*this._z+this._w*this._w)}normalize(){let e=this.length();return e===0?(this._x=0,this._y=0,this._z=0,this._w=1):(e=1/e,this._x=this._x*e,this._y=this._y*e,this._z=this._z*e,this._w=this._w*e),this._onChangeCallback(),this}multiply(e){return this.multiplyQuaternions(this,e)}premultiply(e){return this.multiplyQuaternions(e,this)}multiplyQuaternions(e,t){const i=e._x,r=e._y,s=e._z,a=e._w,o=t._x,l=t._y,c=t._z,u=t._w;return this._x=i*u+a*o+r*c-s*l,this._y=r*u+a*l+s*o-i*c,this._z=s*u+a*c+i*l-r*o,this._w=a*u-i*o-r*l-s*c,this._onChangeCallback(),this}slerp(e,t){let i=e._x,r=e._y,s=e._z,a=e._w,o=this.dot(e);o<0&&(i=-i,r=-r,s=-s,a=-a,o=-o);let l=1-t;if(o<.9995){const c=Math.acos(o),u=Math.sin(c);l=Math.sin(l*c)/u,t=Math.sin(t*c)/u,this._x=this._x*l+i*t,this._y=this._y*l+r*t,this._z=this._z*l+s*t,this._w=this._w*l+a*t,this._onChangeCallback()}else this._x=this._x*l+i*t,this._y=this._y*l+r*t,this._z=this._z*l+s*t,this._w=this._w*l+a*t,this.normalize();return this}slerpQuaternions(e,t,i){return this.copy(e).slerp(t,i)}random(){const e=2*Math.PI*Math.random(),t=2*Math.PI*Math.random(),i=Math.random(),r=Math.sqrt(1-i),s=Math.sqrt(i);return this.set(r*Math.sin(e),r*Math.cos(e),s*Math.sin(t),s*Math.cos(t))}equals(e){return e._x===this._x&&e._y===this._y&&e._z===this._z&&e._w===this._w}fromArray(e,t=0){return this._x=e[t],this._y=e[t+1],this._z=e[t+2],this._w=e[t+3],this._onChangeCallback(),this}toArray(e=[],t=0){return e[t]=this._x,e[t+1]=this._y,e[t+2]=this._z,e[t+3]=this._w,e}fromBufferAttribute(e,t){return this._x=e.getX(t),this._y=e.getY(t),this._z=e.getZ(t),this._w=e.getW(t),this._onChangeCallback(),this}toJSON(){return this.toArray()}_onChange(e){return this._onChangeCallback=e,this}_onChangeCallback(){}*[Symbol.iterator](){yield this._x,yield this._y,yield this._z,yield this._w}}const tc=class tc{constructor(e=0,t=0,i=0){this.x=e,this.y=t,this.z=i}set(e,t,i){return i===void 0&&(i=this.z),this.x=e,this.y=t,this.z=i,this}setScalar(e){return this.x=e,this.y=e,this.z=e,this}setX(e){return this.x=e,this}setY(e){return this.y=e,this}setZ(e){return this.z=e,this}setComponent(e,t){switch(e){case 0:this.x=t;break;case 1:this.y=t;break;case 2:this.z=t;break;default:throw new Error("THREE.Vector3: index is out of range: "+e)}return this}getComponent(e){switch(e){case 0:return this.x;case 1:return this.y;case 2:return this.z;default:throw new Error("THREE.Vector3: index is out of range: "+e)}}clone(){return new this.constructor(this.x,this.y,this.z)}copy(e){return this.x=e.x,this.y=e.y,this.z=e.z,this}add(e){return this.x+=e.x,this.y+=e.y,this.z+=e.z,this}addScalar(e){return this.x+=e,this.y+=e,this.z+=e,this}addVectors(e,t){return this.x=e.x+t.x,this.y=e.y+t.y,this.z=e.z+t.z,this}addScaledVector(e,t){return this.x+=e.x*t,this.y+=e.y*t,this.z+=e.z*t,this}sub(e){return this.x-=e.x,this.y-=e.y,this.z-=e.z,this}subScalar(e){return this.x-=e,this.y-=e,this.z-=e,this}subVectors(e,t){return this.x=e.x-t.x,this.y=e.y-t.y,this.z=e.z-t.z,this}multiply(e){return this.x*=e.x,this.y*=e.y,this.z*=e.z,this}multiplyScalar(e){return this.x*=e,this.y*=e,this.z*=e,this}multiplyVectors(e,t){return this.x=e.x*t.x,this.y=e.y*t.y,this.z=e.z*t.z,this}applyEuler(e){return this.applyQuaternion(Gc.setFromEuler(e))}applyAxisAngle(e,t){return this.applyQuaternion(Gc.setFromAxisAngle(e,t))}applyMatrix3(e){const t=this.x,i=this.y,r=this.z,s=e.elements;return this.x=s[0]*t+s[3]*i+s[6]*r,this.y=s[1]*t+s[4]*i+s[7]*r,this.z=s[2]*t+s[5]*i+s[8]*r,this}applyNormalMatrix(e){return this.applyMatrix3(e).normalize()}applyMatrix4(e){const t=this.x,i=this.y,r=this.z,s=e.elements,a=1/(s[3]*t+s[7]*i+s[11]*r+s[15]);return this.x=(s[0]*t+s[4]*i+s[8]*r+s[12])*a,this.y=(s[1]*t+s[5]*i+s[9]*r+s[13])*a,this.z=(s[2]*t+s[6]*i+s[10]*r+s[14])*a,this}applyQuaternion(e){const t=this.x,i=this.y,r=this.z,s=e.x,a=e.y,o=e.z,l=e.w,c=2*(a*r-o*i),u=2*(o*t-s*r),h=2*(s*i-a*t);return this.x=t+l*c+a*h-o*u,this.y=i+l*u+o*c-s*h,this.z=r+l*h+s*u-a*c,this}project(e){return this.applyMatrix4(e.matrixWorldInverse).applyMatrix4(e.projectionMatrix)}unproject(e){return this.applyMatrix4(e.projectionMatrixInverse).applyMatrix4(e.matrixWorld)}transformDirection(e){const t=this.x,i=this.y,r=this.z,s=e.elements;return this.x=s[0]*t+s[4]*i+s[8]*r,this.y=s[1]*t+s[5]*i+s[9]*r,this.z=s[2]*t+s[6]*i+s[10]*r,this.normalize()}divide(e){return this.x/=e.x,this.y/=e.y,this.z/=e.z,this}divideScalar(e){return this.multiplyScalar(1/e)}min(e){return this.x=Math.min(this.x,e.x),this.y=Math.min(this.y,e.y),this.z=Math.min(this.z,e.z),this}max(e){return this.x=Math.max(this.x,e.x),this.y=Math.max(this.y,e.y),this.z=Math.max(this.z,e.z),this}clamp(e,t){return this.x=ke(this.x,e.x,t.x),this.y=ke(this.y,e.y,t.y),this.z=ke(this.z,e.z,t.z),this}clampScalar(e,t){return this.x=ke(this.x,e,t),this.y=ke(this.y,e,t),this.z=ke(this.z,e,t),this}clampLength(e,t){const i=this.length();return this.divideScalar(i||1).multiplyScalar(ke(i,e,t))}floor(){return this.x=Math.floor(this.x),this.y=Math.floor(this.y),this.z=Math.floor(this.z),this}ceil(){return this.x=Math.ceil(this.x),this.y=Math.ceil(this.y),this.z=Math.ceil(this.z),this}round(){return this.x=Math.round(this.x),this.y=Math.round(this.y),this.z=Math.round(this.z),this}roundToZero(){return this.x=Math.trunc(this.x),this.y=Math.trunc(this.y),this.z=Math.trunc(this.z),this}negate(){return this.x=-this.x,this.y=-this.y,this.z=-this.z,this}dot(e){return this.x*e.x+this.y*e.y+this.z*e.z}lengthSq(){return this.x*this.x+this.y*this.y+this.z*this.z}length(){return Math.sqrt(this.x*this.x+this.y*this.y+this.z*this.z)}manhattanLength(){return Math.abs(this.x)+Math.abs(this.y)+Math.abs(this.z)}normalize(){return this.divideScalar(this.length()||1)}setLength(e){return this.normalize().multiplyScalar(e)}lerp(e,t){return this.x+=(e.x-this.x)*t,this.y+=(e.y-this.y)*t,this.z+=(e.z-this.z)*t,this}lerpVectors(e,t,i){return this.x=e.x+(t.x-e.x)*i,this.y=e.y+(t.y-e.y)*i,this.z=e.z+(t.z-e.z)*i,this}cross(e){return this.crossVectors(this,e)}crossVectors(e,t){const i=e.x,r=e.y,s=e.z,a=t.x,o=t.y,l=t.z;return this.x=r*l-s*o,this.y=s*a-i*l,this.z=i*o-r*a,this}projectOnVector(e){const t=e.lengthSq();if(t===0)return this.set(0,0,0);const i=e.dot(this)/t;return this.copy(e).multiplyScalar(i)}projectOnPlane(e){return ga.copy(this).projectOnVector(e),this.sub(ga)}reflect(e){return this.sub(ga.copy(e).multiplyScalar(2*this.dot(e)))}angleTo(e){const t=Math.sqrt(this.lengthSq()*e.lengthSq());if(t===0)return Math.PI/2;const i=this.dot(e)/t;return Math.acos(ke(i,-1,1))}distanceTo(e){return Math.sqrt(this.distanceToSquared(e))}distanceToSquared(e){const t=this.x-e.x,i=this.y-e.y,r=this.z-e.z;return t*t+i*i+r*r}manhattanDistanceTo(e){return Math.abs(this.x-e.x)+Math.abs(this.y-e.y)+Math.abs(this.z-e.z)}setFromSpherical(e){return this.setFromSphericalCoords(e.radius,e.phi,e.theta)}setFromSphericalCoords(e,t,i){const r=Math.sin(t)*e;return this.x=r*Math.sin(i),this.y=Math.cos(t)*e,this.z=r*Math.cos(i),this}setFromCylindrical(e){return this.setFromCylindricalCoords(e.radius,e.theta,e.y)}setFromCylindricalCoords(e,t,i){return this.x=e*Math.sin(t),this.y=i,this.z=e*Math.cos(t),this}setFromMatrixPosition(e){const t=e.elements;return this.x=t[12],this.y=t[13],this.z=t[14],this}setFromMatrixScale(e){const t=this.setFromMatrixColumn(e,0).length(),i=this.setFromMatrixColumn(e,1).length(),r=this.setFromMatrixColumn(e,2).length();return this.x=t,this.y=i,this.z=r,this}setFromMatrixColumn(e,t){return this.fromArray(e.elements,t*4)}setFromMatrix3Column(e,t){return this.fromArray(e.elements,t*3)}setFromEuler(e){return this.x=e._x,this.y=e._y,this.z=e._z,this}setFromColor(e){return this.x=e.r,this.y=e.g,this.z=e.b,this}equals(e){return e.x===this.x&&e.y===this.y&&e.z===this.z}fromArray(e,t=0){return this.x=e[t],this.y=e[t+1],this.z=e[t+2],this}toArray(e=[],t=0){return e[t]=this.x,e[t+1]=this.y,e[t+2]=this.z,e}fromBufferAttribute(e,t){return this.x=e.getX(t),this.y=e.getY(t),this.z=e.getZ(t),this}random(){return this.x=Math.random(),this.y=Math.random(),this.z=Math.random(),this}randomDirection(){const e=Math.random()*Math.PI*2,t=Math.random()*2-1,i=Math.sqrt(1-t*t);return this.x=i*Math.cos(e),this.y=t,this.z=i*Math.sin(e),this}*[Symbol.iterator](){yield this.x,yield this.y,yield this.z}};tc.prototype.isVector3=!0;let B=tc;const ga=new B,Gc=new ir,nc=class nc{constructor(e,t,i,r,s,a,o,l,c){this.elements=[1,0,0,0,1,0,0,0,1],e!==void 0&&this.set(e,t,i,r,s,a,o,l,c)}set(e,t,i,r,s,a,o,l,c){const u=this.elements;return u[0]=e,u[1]=r,u[2]=o,u[3]=t,u[4]=s,u[5]=l,u[6]=i,u[7]=a,u[8]=c,this}identity(){return this.set(1,0,0,0,1,0,0,0,1),this}copy(e){const t=this.elements,i=e.elements;return t[0]=i[0],t[1]=i[1],t[2]=i[2],t[3]=i[3],t[4]=i[4],t[5]=i[5],t[6]=i[6],t[7]=i[7],t[8]=i[8],this}extractBasis(e,t,i){return e.setFromMatrix3Column(this,0),t.setFromMatrix3Column(this,1),i.setFromMatrix3Column(this,2),this}setFromMatrix4(e){const t=e.elements;return this.set(t[0],t[4],t[8],t[1],t[5],t[9],t[2],t[6],t[10]),this}multiply(e){return this.multiplyMatrices(this,e)}premultiply(e){return this.multiplyMatrices(e,this)}multiplyMatrices(e,t){const i=e.elements,r=t.elements,s=this.elements,a=i[0],o=i[3],l=i[6],c=i[1],u=i[4],h=i[7],d=i[2],m=i[5],x=i[8],S=r[0],p=r[3],f=r[6],y=r[1],w=r[4],M=r[7],A=r[2],E=r[5],R=r[8];return s[0]=a*S+o*y+l*A,s[3]=a*p+o*w+l*E,s[6]=a*f+o*M+l*R,s[1]=c*S+u*y+h*A,s[4]=c*p+u*w+h*E,s[7]=c*f+u*M+h*R,s[2]=d*S+m*y+x*A,s[5]=d*p+m*w+x*E,s[8]=d*f+m*M+x*R,this}multiplyScalar(e){const t=this.elements;return t[0]*=e,t[3]*=e,t[6]*=e,t[1]*=e,t[4]*=e,t[7]*=e,t[2]*=e,t[5]*=e,t[8]*=e,this}determinant(){const e=this.elements,t=e[0],i=e[1],r=e[2],s=e[3],a=e[4],o=e[5],l=e[6],c=e[7],u=e[8];return t*a*u-t*o*c-i*s*u+i*o*l+r*s*c-r*a*l}invert(){const e=this.elements,t=e[0],i=e[1],r=e[2],s=e[3],a=e[4],o=e[5],l=e[6],c=e[7],u=e[8],h=u*a-o*c,d=o*l-u*s,m=c*s-a*l,x=t*h+i*d+r*m;if(x===0)return this.set(0,0,0,0,0,0,0,0,0);const S=1/x;return e[0]=h*S,e[1]=(r*c-u*i)*S,e[2]=(o*i-r*a)*S,e[3]=d*S,e[4]=(u*t-r*l)*S,e[5]=(r*s-o*t)*S,e[6]=m*S,e[7]=(i*l-c*t)*S,e[8]=(a*t-i*s)*S,this}transpose(){let e;const t=this.elements;return e=t[1],t[1]=t[3],t[3]=e,e=t[2],t[2]=t[6],t[6]=e,e=t[5],t[5]=t[7],t[7]=e,this}getNormalMatrix(e){return this.setFromMatrix4(e).invert().transpose()}transposeIntoArray(e){const t=this.elements;return e[0]=t[0],e[1]=t[3],e[2]=t[6],e[3]=t[1],e[4]=t[4],e[5]=t[7],e[6]=t[2],e[7]=t[5],e[8]=t[8],this}setUvTransform(e,t,i,r,s,a,o){const l=Math.cos(s),c=Math.sin(s);return this.set(i*l,i*c,-i*(l*a+c*o)+a+e,-r*c,r*l,-r*(-c*a+l*o)+o+t,0,0,1),this}scale(e,t){return qi("Matrix3: .scale() is deprecated. Use .makeScale() instead."),this.premultiply(xa.makeScale(e,t)),this}rotate(e){return qi("Matrix3: .rotate() is deprecated. Use .makeRotation() instead."),this.premultiply(xa.makeRotation(-e)),this}translate(e,t){return qi("Matrix3: .translate() is deprecated. Use .makeTranslation() instead."),this.premultiply(xa.makeTranslation(e,t)),this}makeTranslation(e,t){return e.isVector2?this.set(1,0,e.x,0,1,e.y,0,0,1):this.set(1,0,e,0,1,t,0,0,1),this}makeRotation(e){const t=Math.cos(e),i=Math.sin(e);return this.set(t,-i,0,i,t,0,0,0,1),this}makeScale(e,t){return this.set(e,0,0,0,t,0,0,0,1),this}equals(e){const t=this.elements,i=e.elements;for(let r=0;r<9;r++)if(t[r]!==i[r])return!1;return!0}fromArray(e,t=0){for(let i=0;i<9;i++)this.elements[i]=e[i+t];return this}toArray(e=[],t=0){const i=this.elements;return e[t]=i[0],e[t+1]=i[1],e[t+2]=i[2],e[t+3]=i[3],e[t+4]=i[4],e[t+5]=i[5],e[t+6]=i[6],e[t+7]=i[7],e[t+8]=i[8],e}clone(){return new this.constructor().fromArray(this.elements)}};nc.prototype.isMatrix3=!0;let Ie=nc;const xa=new Ie,kc=new Ie().set(.4123908,.3575843,.1804808,.212639,.7151687,.0721923,.0193308,.1191948,.9505322),Wc=new Ie().set(3.2409699,-1.5373832,-.4986108,-.9692436,1.8759675,.0415551,.0556301,-.203977,1.0569715);function h_(){const n={enabled:!0,workingColorSpace:Ns,spaces:{},convert:function(r,s,a){return this.enabled===!1||s===a||!s||!a||(this.spaces[s].transfer===Qe&&(r.r=Dn(r.r),r.g=Dn(r.g),r.b=Dn(r.b)),this.spaces[s].primaries!==this.spaces[a].primaries&&(r.applyMatrix3(this.spaces[s].toXYZ),r.applyMatrix3(this.spaces[a].fromXYZ)),this.spaces[a].transfer===Qe&&(r.r=Yi(r.r),r.g=Yi(r.g),r.b=Yi(r.b))),r},workingToColorSpace:function(r,s){return this.convert(r,this.workingColorSpace,s)},colorSpaceToWorking:function(r,s){return this.convert(r,s,this.workingColorSpace)},getPrimaries:function(r){return this.spaces[r].primaries},getTransfer:function(r){return r===qn?Os:this.spaces[r].transfer},getToneMappingMode:function(r){return this.spaces[r].outputColorSpaceConfig.toneMappingMode||"standard"},getLuminanceCoefficients:function(r,s=this.workingColorSpace){return r.fromArray(this.spaces[s].luminanceCoefficients)},define:function(r){Object.assign(this.spaces,r)},_getMatrix:function(r,s,a){return r.copy(this.spaces[s].toXYZ).multiply(this.spaces[a].fromXYZ)},_getDrawingBufferColorSpace:function(r){return this.spaces[r].outputColorSpaceConfig.drawingBufferColorSpace},_getUnpackColorSpace:function(r=this.workingColorSpace){return this.spaces[r].workingColorSpaceConfig.unpackColorSpace},fromWorkingColorSpace:function(r,s){return qi("ColorManagement: .fromWorkingColorSpace() has been renamed to .workingToColorSpace()."),n.workingToColorSpace(r,s)},toWorkingColorSpace:function(r,s){return qi("ColorManagement: .toWorkingColorSpace() has been renamed to .colorSpaceToWorking()."),n.colorSpaceToWorking(r,s)}},e=[.64,.33,.3,.6,.15,.06],t=[.2126,.7152,.0722],i=[.3127,.329];return n.define({[Ns]:{primaries:e,whitePoint:i,transfer:Os,toXYZ:kc,fromXYZ:Wc,luminanceCoefficients:t,workingColorSpaceConfig:{unpackColorSpace:Xt},outputColorSpaceConfig:{drawingBufferColorSpace:Xt}},[Xt]:{primaries:e,whitePoint:i,transfer:Qe,toXYZ:kc,fromXYZ:Wc,luminanceCoefficients:t,outputColorSpaceConfig:{drawingBufferColorSpace:Xt}}}),n}const Ge=h_();function Dn(n){return n<.04045?n*.0773993808:Math.pow(n*.9478672986+.0521327014,2.4)}function Yi(n){return n<.0031308?n*12.92:1.055*Math.pow(n,.41666)-.055}let Di;class p_{static getDataURL(e,t="image/png"){if(/^data:/i.test(e.src)||typeof HTMLCanvasElement>"u")return e.src;let i;if(e instanceof HTMLCanvasElement)i=e;else{Di===void 0&&(Di=Fs("canvas")),Di.width=e.width,Di.height=e.height;const r=Di.getContext("2d");e instanceof ImageData?r.putImageData(e,0,0):r.drawImage(e,0,0,e.width,e.height),i=Di}return i.toDataURL(t)}static sRGBToLinear(e){if(typeof HTMLImageElement<"u"&&e instanceof HTMLImageElement||typeof HTMLCanvasElement<"u"&&e instanceof HTMLCanvasElement||typeof ImageBitmap<"u"&&e instanceof ImageBitmap){const t=Fs("canvas");t.width=e.width,t.height=e.height;const i=t.getContext("2d");i.drawImage(e,0,0,e.width,e.height);const r=i.getImageData(0,0,e.width,e.height),s=r.data;for(let a=0;a<s.length;a++)s[a]=Dn(s[a]/255)*255;return i.putImageData(r,0,0),t}else if(e.data){const t=e.data.slice(0);for(let i=0;i<t.length;i++)t instanceof Uint8Array||t instanceof Uint8ClampedArray?t[i]=Math.floor(Dn(t[i]/255)*255):t[i]=Dn(t[i]);return{data:t,width:e.width,height:e.height}}else return De("ImageUtils.sRGBToLinear(): Unsupported image type. No color space conversion applied."),e}}let m_=0;class bl{constructor(e=null){this.isSource=!0,Object.defineProperty(this,"id",{value:m_++}),this.uuid=zr(),this.data=e,this.dataReady=!0,this.version=0}getSize(e){const t=this.data;return typeof HTMLVideoElement<"u"&&t instanceof HTMLVideoElement?e.set(t.videoWidth,t.videoHeight,0):typeof VideoFrame<"u"&&t instanceof VideoFrame?e.set(t.displayWidth,t.displayHeight,0):t!==null?e.set(t.width,t.height,t.depth||0):e.set(0,0,0),e}set needsUpdate(e){e===!0&&this.version++}toJSON(e){const t=e===void 0||typeof e=="string";if(!t&&e.images[this.uuid]!==void 0)return e.images[this.uuid];const i={uuid:this.uuid,url:""},r=this.data;if(r!==null){let s;if(Array.isArray(r)){s=[];for(let a=0,o=r.length;a<o;a++)r[a].isDataTexture?s.push(va(r[a].image)):s.push(va(r[a]))}else s=va(r);i.url=s}return t||(e.images[this.uuid]=i),i}}function va(n){return typeof HTMLImageElement<"u"&&n instanceof HTMLImageElement||typeof HTMLCanvasElement<"u"&&n instanceof HTMLCanvasElement||typeof ImageBitmap<"u"&&n instanceof ImageBitmap?p_.getDataURL(n):n.data?{data:Array.from(n.data),width:n.width,height:n.height,type:n.data.constructor.name}:(De("Texture: Unable to serialize Texture."),{})}let __=0;const Sa=new B;class Nt extends Ti{constructor(e=Nt.DEFAULT_IMAGE,t=Nt.DEFAULT_MAPPING,i=Cn,r=Cn,s=Dt,a=ci,o=nn,l=Yt,c=Nt.DEFAULT_ANISOTROPY,u=qn){super(),this.isTexture=!0,Object.defineProperty(this,"id",{value:__++}),this.uuid=zr(),this.name="",this.source=new bl(e),this.mipmaps=[],this.mapping=t,this.channel=0,this.wrapS=i,this.wrapT=r,this.magFilter=s,this.minFilter=a,this.anisotropy=c,this.format=o,this.internalFormat=null,this.type=l,this.offset=new Ve(0,0),this.repeat=new Ve(1,1),this.center=new Ve(0,0),this.rotation=0,this.matrixAutoUpdate=!0,this.matrix=new Ie,this.generateMipmaps=!0,this.premultiplyAlpha=!1,this.flipY=!0,this.unpackAlignment=4,this.colorSpace=u,this.userData={},this.updateRanges=[],this.version=0,this.onUpdate=null,this.renderTarget=null,this.isRenderTargetTexture=!1,this.isArrayTexture=!!(e&&e.depth&&e.depth>1),this.pmremVersion=0,this.normalized=!1}get width(){return this.source.getSize(Sa).x}get height(){return this.source.getSize(Sa).y}get depth(){return this.source.getSize(Sa).z}get image(){return this.source.data}set image(e){this.source.data=e}updateMatrix(){this.matrix.setUvTransform(this.offset.x,this.offset.y,this.repeat.x,this.repeat.y,this.rotation,this.center.x,this.center.y)}addUpdateRange(e,t){this.updateRanges.push({start:e,count:t})}clearUpdateRanges(){this.updateRanges.length=0}clone(){return new this.constructor().copy(this)}copy(e){return this.name=e.name,this.source=e.source,this.mipmaps=e.mipmaps.slice(0),this.mapping=e.mapping,this.channel=e.channel,this.wrapS=e.wrapS,this.wrapT=e.wrapT,this.magFilter=e.magFilter,this.minFilter=e.minFilter,this.anisotropy=e.anisotropy,this.format=e.format,this.internalFormat=e.internalFormat,this.type=e.type,this.normalized=e.normalized,this.offset.copy(e.offset),this.repeat.copy(e.repeat),this.center.copy(e.center),this.rotation=e.rotation,this.matrixAutoUpdate=e.matrixAutoUpdate,this.matrix.copy(e.matrix),this.generateMipmaps=e.generateMipmaps,this.premultiplyAlpha=e.premultiplyAlpha,this.flipY=e.flipY,this.unpackAlignment=e.unpackAlignment,this.colorSpace=e.colorSpace,this.renderTarget=e.renderTarget,this.isRenderTargetTexture=e.isRenderTargetTexture,this.isArrayTexture=e.isArrayTexture,this.userData=JSON.parse(JSON.stringify(e.userData)),this.needsUpdate=!0,this}setValues(e){for(const t in e){const i=e[t];if(i===void 0){De(`Texture.setValues(): parameter '${t}' has value of undefined.`);continue}const r=this[t];if(r===void 0){De(`Texture.setValues(): property '${t}' does not exist.`);continue}r&&i&&r.isVector2&&i.isVector2||r&&i&&r.isVector3&&i.isVector3||r&&i&&r.isMatrix3&&i.isMatrix3?r.copy(i):this[t]=i}}toJSON(e){const t=e===void 0||typeof e=="string";if(!t&&e.textures[this.uuid]!==void 0)return e.textures[this.uuid];const i={metadata:{version:4.7,type:"Texture",generator:"Texture.toJSON"},uuid:this.uuid,name:this.name,image:this.source.toJSON(e).uuid,mapping:this.mapping,channel:this.channel,repeat:[this.repeat.x,this.repeat.y],offset:[this.offset.x,this.offset.y],center:[this.center.x,this.center.y],rotation:this.rotation,wrap:[this.wrapS,this.wrapT],format:this.format,internalFormat:this.internalFormat,type:this.type,normalized:this.normalized,colorSpace:this.colorSpace,minFilter:this.minFilter,magFilter:this.magFilter,anisotropy:this.anisotropy,flipY:this.flipY,generateMipmaps:this.generateMipmaps,premultiplyAlpha:this.premultiplyAlpha,unpackAlignment:this.unpackAlignment};return Object.keys(this.userData).length>0&&(i.userData=this.userData),t||(e.textures[this.uuid]=i),i}dispose(){this.dispatchEvent({type:"dispose"})}transformUv(e){if(this.mapping!==Af)return e;if(e.applyMatrix3(this.matrix),e.x<0||e.x>1)switch(this.wrapS){case co:e.x=e.x-Math.floor(e.x);break;case Cn:e.x=e.x<0?0:1;break;case uo:Math.abs(Math.floor(e.x)%2)===1?e.x=Math.ceil(e.x)-e.x:e.x=e.x-Math.floor(e.x);break}if(e.y<0||e.y>1)switch(this.wrapT){case co:e.y=e.y-Math.floor(e.y);break;case Cn:e.y=e.y<0?0:1;break;case uo:Math.abs(Math.floor(e.y)%2)===1?e.y=Math.ceil(e.y)-e.y:e.y=e.y-Math.floor(e.y);break}return this.flipY&&(e.y=1-e.y),e}set needsUpdate(e){e===!0&&(this.version++,this.source.needsUpdate=!0)}set needsPMREMUpdate(e){e===!0&&this.pmremVersion++}}Nt.DEFAULT_IMAGE=null;Nt.DEFAULT_MAPPING=Af;Nt.DEFAULT_ANISOTROPY=1;const ic=class ic{constructor(e=0,t=0,i=0,r=1){this.x=e,this.y=t,this.z=i,this.w=r}get width(){return this.z}set width(e){this.z=e}get height(){return this.w}set height(e){this.w=e}set(e,t,i,r){return this.x=e,this.y=t,this.z=i,this.w=r,this}setScalar(e){return this.x=e,this.y=e,this.z=e,this.w=e,this}setX(e){return this.x=e,this}setY(e){return this.y=e,this}setZ(e){return this.z=e,this}setW(e){return this.w=e,this}setComponent(e,t){switch(e){case 0:this.x=t;break;case 1:this.y=t;break;case 2:this.z=t;break;case 3:this.w=t;break;default:throw new Error("THREE.Vector4: index is out of range: "+e)}return this}getComponent(e){switch(e){case 0:return this.x;case 1:return this.y;case 2:return this.z;case 3:return this.w;default:throw new Error("THREE.Vector4: index is out of range: "+e)}}clone(){return new this.constructor(this.x,this.y,this.z,this.w)}copy(e){return this.x=e.x,this.y=e.y,this.z=e.z,this.w=e.w!==void 0?e.w:1,this}add(e){return this.x+=e.x,this.y+=e.y,this.z+=e.z,this.w+=e.w,this}addScalar(e){return this.x+=e,this.y+=e,this.z+=e,this.w+=e,this}addVectors(e,t){return this.x=e.x+t.x,this.y=e.y+t.y,this.z=e.z+t.z,this.w=e.w+t.w,this}addScaledVector(e,t){return this.x+=e.x*t,this.y+=e.y*t,this.z+=e.z*t,this.w+=e.w*t,this}sub(e){return this.x-=e.x,this.y-=e.y,this.z-=e.z,this.w-=e.w,this}subScalar(e){return this.x-=e,this.y-=e,this.z-=e,this.w-=e,this}subVectors(e,t){return this.x=e.x-t.x,this.y=e.y-t.y,this.z=e.z-t.z,this.w=e.w-t.w,this}multiply(e){return this.x*=e.x,this.y*=e.y,this.z*=e.z,this.w*=e.w,this}multiplyScalar(e){return this.x*=e,this.y*=e,this.z*=e,this.w*=e,this}applyMatrix4(e){const t=this.x,i=this.y,r=this.z,s=this.w,a=e.elements;return this.x=a[0]*t+a[4]*i+a[8]*r+a[12]*s,this.y=a[1]*t+a[5]*i+a[9]*r+a[13]*s,this.z=a[2]*t+a[6]*i+a[10]*r+a[14]*s,this.w=a[3]*t+a[7]*i+a[11]*r+a[15]*s,this}divide(e){return this.x/=e.x,this.y/=e.y,this.z/=e.z,this.w/=e.w,this}divideScalar(e){return this.multiplyScalar(1/e)}setAxisAngleFromQuaternion(e){this.w=2*Math.acos(e.w);const t=Math.sqrt(1-e.w*e.w);return t<1e-4?(this.x=1,this.y=0,this.z=0):(this.x=e.x/t,this.y=e.y/t,this.z=e.z/t),this}setAxisAngleFromRotationMatrix(e){let t,i,r,s;const l=e.elements,c=l[0],u=l[4],h=l[8],d=l[1],m=l[5],x=l[9],S=l[2],p=l[6],f=l[10];if(Math.abs(u-d)<.01&&Math.abs(h-S)<.01&&Math.abs(x-p)<.01){if(Math.abs(u+d)<.1&&Math.abs(h+S)<.1&&Math.abs(x+p)<.1&&Math.abs(c+m+f-3)<.1)return this.set(1,0,0,0),this;t=Math.PI;const w=(c+1)/2,M=(m+1)/2,A=(f+1)/2,E=(u+d)/4,R=(h+S)/4,g=(x+p)/4;return w>M&&w>A?w<.01?(i=0,r=.707106781,s=.707106781):(i=Math.sqrt(w),r=E/i,s=R/i):M>A?M<.01?(i=.707106781,r=0,s=.707106781):(r=Math.sqrt(M),i=E/r,s=g/r):A<.01?(i=.707106781,r=.707106781,s=0):(s=Math.sqrt(A),i=R/s,r=g/s),this.set(i,r,s,t),this}let y=Math.sqrt((p-x)*(p-x)+(h-S)*(h-S)+(d-u)*(d-u));return Math.abs(y)<.001&&(y=1),this.x=(p-x)/y,this.y=(h-S)/y,this.z=(d-u)/y,this.w=Math.acos((c+m+f-1)/2),this}setFromMatrixPosition(e){const t=e.elements;return this.x=t[12],this.y=t[13],this.z=t[14],this.w=t[15],this}min(e){return this.x=Math.min(this.x,e.x),this.y=Math.min(this.y,e.y),this.z=Math.min(this.z,e.z),this.w=Math.min(this.w,e.w),this}max(e){return this.x=Math.max(this.x,e.x),this.y=Math.max(this.y,e.y),this.z=Math.max(this.z,e.z),this.w=Math.max(this.w,e.w),this}clamp(e,t){return this.x=ke(this.x,e.x,t.x),this.y=ke(this.y,e.y,t.y),this.z=ke(this.z,e.z,t.z),this.w=ke(this.w,e.w,t.w),this}clampScalar(e,t){return this.x=ke(this.x,e,t),this.y=ke(this.y,e,t),this.z=ke(this.z,e,t),this.w=ke(this.w,e,t),this}clampLength(e,t){const i=this.length();return this.divideScalar(i||1).multiplyScalar(ke(i,e,t))}floor(){return this.x=Math.floor(this.x),this.y=Math.floor(this.y),this.z=Math.floor(this.z),this.w=Math.floor(this.w),this}ceil(){return this.x=Math.ceil(this.x),this.y=Math.ceil(this.y),this.z=Math.ceil(this.z),this.w=Math.ceil(this.w),this}round(){return this.x=Math.round(this.x),this.y=Math.round(this.y),this.z=Math.round(this.z),this.w=Math.round(this.w),this}roundToZero(){return this.x=Math.trunc(this.x),this.y=Math.trunc(this.y),this.z=Math.trunc(this.z),this.w=Math.trunc(this.w),this}negate(){return this.x=-this.x,this.y=-this.y,this.z=-this.z,this.w=-this.w,this}dot(e){return this.x*e.x+this.y*e.y+this.z*e.z+this.w*e.w}lengthSq(){return this.x*this.x+this.y*this.y+this.z*this.z+this.w*this.w}length(){return Math.sqrt(this.x*this.x+this.y*this.y+this.z*this.z+this.w*this.w)}manhattanLength(){return Math.abs(this.x)+Math.abs(this.y)+Math.abs(this.z)+Math.abs(this.w)}normalize(){return this.divideScalar(this.length()||1)}setLength(e){return this.normalize().multiplyScalar(e)}lerp(e,t){return this.x+=(e.x-this.x)*t,this.y+=(e.y-this.y)*t,this.z+=(e.z-this.z)*t,this.w+=(e.w-this.w)*t,this}lerpVectors(e,t,i){return this.x=e.x+(t.x-e.x)*i,this.y=e.y+(t.y-e.y)*i,this.z=e.z+(t.z-e.z)*i,this.w=e.w+(t.w-e.w)*i,this}equals(e){return e.x===this.x&&e.y===this.y&&e.z===this.z&&e.w===this.w}fromArray(e,t=0){return this.x=e[t],this.y=e[t+1],this.z=e[t+2],this.w=e[t+3],this}toArray(e=[],t=0){return e[t]=this.x,e[t+1]=this.y,e[t+2]=this.z,e[t+3]=this.w,e}fromBufferAttribute(e,t){return this.x=e.getX(t),this.y=e.getY(t),this.z=e.getZ(t),this.w=e.getW(t),this}random(){return this.x=Math.random(),this.y=Math.random(),this.z=Math.random(),this.w=Math.random(),this}*[Symbol.iterator](){yield this.x,yield this.y,yield this.z,yield this.w}};ic.prototype.isVector4=!0;let ut=ic;class g_ extends Ti{constructor(e=1,t=1,i={}){super(),i=Object.assign({generateMipmaps:!1,internalFormat:null,minFilter:Dt,depthBuffer:!0,stencilBuffer:!1,resolveDepthBuffer:!0,resolveStencilBuffer:!0,depthTexture:null,samples:0,count:1,depth:1,multiview:!1,useArrayDepthTexture:!1},i),this.isRenderTarget=!0,this.width=e,this.height=t,this.depth=i.depth,this.scissor=new ut(0,0,e,t),this.scissorTest=!1,this.viewport=new ut(0,0,e,t),this.textures=[];const r={width:e,height:t,depth:i.depth},s=new Nt(r),a=i.count;for(let o=0;o<a;o++)this.textures[o]=s.clone(),this.textures[o].isRenderTargetTexture=!0,this.textures[o].renderTarget=this;this._setTextureOptions(i),this.depthBuffer=i.depthBuffer,this.stencilBuffer=i.stencilBuffer,this.resolveDepthBuffer=i.resolveDepthBuffer,this.resolveStencilBuffer=i.resolveStencilBuffer,this._depthTexture=null,this.depthTexture=i.depthTexture,this.samples=i.samples,this.multiview=i.multiview,this.useArrayDepthTexture=i.useArrayDepthTexture}_setTextureOptions(e={}){const t={minFilter:Dt,generateMipmaps:!1,flipY:!1,internalFormat:null};e.mapping!==void 0&&(t.mapping=e.mapping),e.wrapS!==void 0&&(t.wrapS=e.wrapS),e.wrapT!==void 0&&(t.wrapT=e.wrapT),e.wrapR!==void 0&&(t.wrapR=e.wrapR),e.magFilter!==void 0&&(t.magFilter=e.magFilter),e.minFilter!==void 0&&(t.minFilter=e.minFilter),e.format!==void 0&&(t.format=e.format),e.type!==void 0&&(t.type=e.type),e.anisotropy!==void 0&&(t.anisotropy=e.anisotropy),e.colorSpace!==void 0&&(t.colorSpace=e.colorSpace),e.flipY!==void 0&&(t.flipY=e.flipY),e.generateMipmaps!==void 0&&(t.generateMipmaps=e.generateMipmaps),e.internalFormat!==void 0&&(t.internalFormat=e.internalFormat);for(let i=0;i<this.textures.length;i++)this.textures[i].setValues(t)}get texture(){return this.textures[0]}set texture(e){this.textures[0]=e}set depthTexture(e){this._depthTexture!==null&&(this._depthTexture.renderTarget=null),e!==null&&(e.renderTarget=this),this._depthTexture=e}get depthTexture(){return this._depthTexture}setSize(e,t,i=1){if(this.width!==e||this.height!==t||this.depth!==i){this.width=e,this.height=t,this.depth=i;for(let r=0,s=this.textures.length;r<s;r++)this.textures[r].image.width=e,this.textures[r].image.height=t,this.textures[r].image.depth=i,this.textures[r].isData3DTexture!==!0&&(this.textures[r].isArrayTexture=this.textures[r].image.depth>1);this.dispose()}this.viewport.set(0,0,e,t),this.scissor.set(0,0,e,t)}clone(){return new this.constructor().copy(this)}copy(e){this.width=e.width,this.height=e.height,this.depth=e.depth,this.scissor.copy(e.scissor),this.scissorTest=e.scissorTest,this.viewport.copy(e.viewport),this.textures.length=0;for(let t=0,i=e.textures.length;t<i;t++){this.textures[t]=e.textures[t].clone(),this.textures[t].isRenderTargetTexture=!0,this.textures[t].renderTarget=this;const r=Object.assign({},e.textures[t].image);this.textures[t].source=new bl(r)}return this.depthBuffer=e.depthBuffer,this.stencilBuffer=e.stencilBuffer,this.resolveDepthBuffer=e.resolveDepthBuffer,this.resolveStencilBuffer=e.resolveStencilBuffer,e.depthTexture!==null&&(this.depthTexture=e.depthTexture.clone()),this.samples=e.samples,this.multiview=e.multiview,this.useArrayDepthTexture=e.useArrayDepthTexture,this}dispose(){this.dispatchEvent({type:"dispose"})}}class gn extends g_{constructor(e=1,t=1,i={}){super(e,t,i),this.isWebGLRenderTarget=!0}}class Nf extends Nt{constructor(e=null,t=1,i=1,r=1){super(null),this.isDataArrayTexture=!0,this.image={data:e,width:t,height:i,depth:r},this.magFilter=At,this.minFilter=At,this.wrapR=Cn,this.generateMipmaps=!1,this.flipY=!1,this.unpackAlignment=1,this.layerUpdates=new Set}addLayerUpdate(e){this.layerUpdates.add(e)}clearLayerUpdates(){this.layerUpdates.clear()}}class x_ extends Nt{constructor(e=null,t=1,i=1,r=1){super(null),this.isData3DTexture=!0,this.image={data:e,width:t,height:i,depth:r},this.magFilter=At,this.minFilter=At,this.wrapR=Cn,this.generateMipmaps=!1,this.flipY=!1,this.unpackAlignment=1}}const ks=class ks{constructor(e,t,i,r,s,a,o,l,c,u,h,d,m,x,S,p){this.elements=[1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1],e!==void 0&&this.set(e,t,i,r,s,a,o,l,c,u,h,d,m,x,S,p)}set(e,t,i,r,s,a,o,l,c,u,h,d,m,x,S,p){const f=this.elements;return f[0]=e,f[4]=t,f[8]=i,f[12]=r,f[1]=s,f[5]=a,f[9]=o,f[13]=l,f[2]=c,f[6]=u,f[10]=h,f[14]=d,f[3]=m,f[7]=x,f[11]=S,f[15]=p,this}identity(){return this.set(1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1),this}clone(){return new ks().fromArray(this.elements)}copy(e){const t=this.elements,i=e.elements;return t[0]=i[0],t[1]=i[1],t[2]=i[2],t[3]=i[3],t[4]=i[4],t[5]=i[5],t[6]=i[6],t[7]=i[7],t[8]=i[8],t[9]=i[9],t[10]=i[10],t[11]=i[11],t[12]=i[12],t[13]=i[13],t[14]=i[14],t[15]=i[15],this}copyPosition(e){const t=this.elements,i=e.elements;return t[12]=i[12],t[13]=i[13],t[14]=i[14],this}setFromMatrix3(e){const t=e.elements;return this.set(t[0],t[3],t[6],0,t[1],t[4],t[7],0,t[2],t[5],t[8],0,0,0,0,1),this}extractBasis(e,t,i){return this.determinantAffine()===0?(e.set(1,0,0),t.set(0,1,0),i.set(0,0,1),this):(e.setFromMatrixColumn(this,0),t.setFromMatrixColumn(this,1),i.setFromMatrixColumn(this,2),this)}makeBasis(e,t,i){return this.set(e.x,t.x,i.x,0,e.y,t.y,i.y,0,e.z,t.z,i.z,0,0,0,0,1),this}extractRotation(e){if(e.determinantAffine()===0)return this.identity();const t=this.elements,i=e.elements,r=1/Li.setFromMatrixColumn(e,0).length(),s=1/Li.setFromMatrixColumn(e,1).length(),a=1/Li.setFromMatrixColumn(e,2).length();return t[0]=i[0]*r,t[1]=i[1]*r,t[2]=i[2]*r,t[3]=0,t[4]=i[4]*s,t[5]=i[5]*s,t[6]=i[6]*s,t[7]=0,t[8]=i[8]*a,t[9]=i[9]*a,t[10]=i[10]*a,t[11]=0,t[12]=0,t[13]=0,t[14]=0,t[15]=1,this}makeRotationFromEuler(e){const t=this.elements,i=e.x,r=e.y,s=e.z,a=Math.cos(i),o=Math.sin(i),l=Math.cos(r),c=Math.sin(r),u=Math.cos(s),h=Math.sin(s);if(e.order==="XYZ"){const d=a*u,m=a*h,x=o*u,S=o*h;t[0]=l*u,t[4]=-l*h,t[8]=c,t[1]=m+x*c,t[5]=d-S*c,t[9]=-o*l,t[2]=S-d*c,t[6]=x+m*c,t[10]=a*l}else if(e.order==="YXZ"){const d=l*u,m=l*h,x=c*u,S=c*h;t[0]=d+S*o,t[4]=x*o-m,t[8]=a*c,t[1]=a*h,t[5]=a*u,t[9]=-o,t[2]=m*o-x,t[6]=S+d*o,t[10]=a*l}else if(e.order==="ZXY"){const d=l*u,m=l*h,x=c*u,S=c*h;t[0]=d-S*o,t[4]=-a*h,t[8]=x+m*o,t[1]=m+x*o,t[5]=a*u,t[9]=S-d*o,t[2]=-a*c,t[6]=o,t[10]=a*l}else if(e.order==="ZYX"){const d=a*u,m=a*h,x=o*u,S=o*h;t[0]=l*u,t[4]=x*c-m,t[8]=d*c+S,t[1]=l*h,t[5]=S*c+d,t[9]=m*c-x,t[2]=-c,t[6]=o*l,t[10]=a*l}else if(e.order==="YZX"){const d=a*l,m=a*c,x=o*l,S=o*c;t[0]=l*u,t[4]=S-d*h,t[8]=x*h+m,t[1]=h,t[5]=a*u,t[9]=-o*u,t[2]=-c*u,t[6]=m*h+x,t[10]=d-S*h}else if(e.order==="XZY"){const d=a*l,m=a*c,x=o*l,S=o*c;t[0]=l*u,t[4]=-h,t[8]=c*u,t[1]=d*h+S,t[5]=a*u,t[9]=m*h-x,t[2]=x*h-m,t[6]=o*u,t[10]=S*h+d}return t[3]=0,t[7]=0,t[11]=0,t[12]=0,t[13]=0,t[14]=0,t[15]=1,this}makeRotationFromQuaternion(e){return this.compose(v_,e,S_)}lookAt(e,t,i){const r=this.elements;return kt.subVectors(e,t),kt.lengthSq()===0&&(kt.z=1),kt.normalize(),zn.crossVectors(i,kt),zn.lengthSq()===0&&(Math.abs(i.z)===1?kt.x+=1e-4:kt.z+=1e-4,kt.normalize(),zn.crossVectors(i,kt)),zn.normalize(),Yr.crossVectors(kt,zn),r[0]=zn.x,r[4]=Yr.x,r[8]=kt.x,r[1]=zn.y,r[5]=Yr.y,r[9]=kt.y,r[2]=zn.z,r[6]=Yr.z,r[10]=kt.z,this}multiply(e){return this.multiplyMatrices(this,e)}premultiply(e){return this.multiplyMatrices(e,this)}multiplyMatrices(e,t){const i=e.elements,r=t.elements,s=this.elements,a=i[0],o=i[4],l=i[8],c=i[12],u=i[1],h=i[5],d=i[9],m=i[13],x=i[2],S=i[6],p=i[10],f=i[14],y=i[3],w=i[7],M=i[11],A=i[15],E=r[0],R=r[4],g=r[8],T=r[12],D=r[1],C=r[5],N=r[9],X=r[13],q=r[2],F=r[6],Y=r[10],H=r[14],Z=r[3],ee=r[7],se=r[11],ie=r[15];return s[0]=a*E+o*D+l*q+c*Z,s[4]=a*R+o*C+l*F+c*ee,s[8]=a*g+o*N+l*Y+c*se,s[12]=a*T+o*X+l*H+c*ie,s[1]=u*E+h*D+d*q+m*Z,s[5]=u*R+h*C+d*F+m*ee,s[9]=u*g+h*N+d*Y+m*se,s[13]=u*T+h*X+d*H+m*ie,s[2]=x*E+S*D+p*q+f*Z,s[6]=x*R+S*C+p*F+f*ee,s[10]=x*g+S*N+p*Y+f*se,s[14]=x*T+S*X+p*H+f*ie,s[3]=y*E+w*D+M*q+A*Z,s[7]=y*R+w*C+M*F+A*ee,s[11]=y*g+w*N+M*Y+A*se,s[15]=y*T+w*X+M*H+A*ie,this}multiplyScalar(e){const t=this.elements;return t[0]*=e,t[4]*=e,t[8]*=e,t[12]*=e,t[1]*=e,t[5]*=e,t[9]*=e,t[13]*=e,t[2]*=e,t[6]*=e,t[10]*=e,t[14]*=e,t[3]*=e,t[7]*=e,t[11]*=e,t[15]*=e,this}determinant(){const e=this.elements,t=e[0],i=e[4],r=e[8],s=e[12],a=e[1],o=e[5],l=e[9],c=e[13],u=e[2],h=e[6],d=e[10],m=e[14],x=e[3],S=e[7],p=e[11],f=e[15],y=l*m-c*d,w=o*m-c*h,M=o*d-l*h,A=a*m-c*u,E=a*d-l*u,R=a*h-o*u;return t*(S*y-p*w+f*M)-i*(x*y-p*A+f*E)+r*(x*w-S*A+f*R)-s*(x*M-S*E+p*R)}determinantAffine(){const e=this.elements,t=e[0],i=e[4],r=e[8],s=e[1],a=e[5],o=e[9],l=e[2],c=e[6],u=e[10];return t*(a*u-o*c)-i*(s*u-o*l)+r*(s*c-a*l)}transpose(){const e=this.elements;let t;return t=e[1],e[1]=e[4],e[4]=t,t=e[2],e[2]=e[8],e[8]=t,t=e[6],e[6]=e[9],e[9]=t,t=e[3],e[3]=e[12],e[12]=t,t=e[7],e[7]=e[13],e[13]=t,t=e[11],e[11]=e[14],e[14]=t,this}setPosition(e,t,i){const r=this.elements;return e.isVector3?(r[12]=e.x,r[13]=e.y,r[14]=e.z):(r[12]=e,r[13]=t,r[14]=i),this}invert(){const e=this.elements,t=e[0],i=e[1],r=e[2],s=e[3],a=e[4],o=e[5],l=e[6],c=e[7],u=e[8],h=e[9],d=e[10],m=e[11],x=e[12],S=e[13],p=e[14],f=e[15],y=t*o-i*a,w=t*l-r*a,M=t*c-s*a,A=i*l-r*o,E=i*c-s*o,R=r*c-s*l,g=u*S-h*x,T=u*p-d*x,D=u*f-m*x,C=h*p-d*S,N=h*f-m*S,X=d*f-m*p,q=y*X-w*N+M*C+A*D-E*T+R*g;if(q===0)return this.set(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);const F=1/q;return e[0]=(o*X-l*N+c*C)*F,e[1]=(r*N-i*X-s*C)*F,e[2]=(S*R-p*E+f*A)*F,e[3]=(d*E-h*R-m*A)*F,e[4]=(l*D-a*X-c*T)*F,e[5]=(t*X-r*D+s*T)*F,e[6]=(p*M-x*R-f*w)*F,e[7]=(u*R-d*M+m*w)*F,e[8]=(a*N-o*D+c*g)*F,e[9]=(i*D-t*N-s*g)*F,e[10]=(x*E-S*M+f*y)*F,e[11]=(h*M-u*E-m*y)*F,e[12]=(o*T-a*C-l*g)*F,e[13]=(t*C-i*T+r*g)*F,e[14]=(S*w-x*A-p*y)*F,e[15]=(u*A-h*w+d*y)*F,this}scale(e){const t=this.elements,i=e.x,r=e.y,s=e.z;return t[0]*=i,t[4]*=r,t[8]*=s,t[1]*=i,t[5]*=r,t[9]*=s,t[2]*=i,t[6]*=r,t[10]*=s,t[3]*=i,t[7]*=r,t[11]*=s,this}getMaxScaleOnAxis(){const e=this.elements,t=e[0]*e[0]+e[1]*e[1]+e[2]*e[2],i=e[4]*e[4]+e[5]*e[5]+e[6]*e[6],r=e[8]*e[8]+e[9]*e[9]+e[10]*e[10];return Math.sqrt(Math.max(t,i,r))}makeTranslation(e,t,i){return e.isVector3?this.set(1,0,0,e.x,0,1,0,e.y,0,0,1,e.z,0,0,0,1):this.set(1,0,0,e,0,1,0,t,0,0,1,i,0,0,0,1),this}makeRotationX(e){const t=Math.cos(e),i=Math.sin(e);return this.set(1,0,0,0,0,t,-i,0,0,i,t,0,0,0,0,1),this}makeRotationY(e){const t=Math.cos(e),i=Math.sin(e);return this.set(t,0,i,0,0,1,0,0,-i,0,t,0,0,0,0,1),this}makeRotationZ(e){const t=Math.cos(e),i=Math.sin(e);return this.set(t,-i,0,0,i,t,0,0,0,0,1,0,0,0,0,1),this}makeRotationAxis(e,t){const i=Math.cos(t),r=Math.sin(t),s=1-i,a=e.x,o=e.y,l=e.z,c=s*a,u=s*o;return this.set(c*a+i,c*o-r*l,c*l+r*o,0,c*o+r*l,u*o+i,u*l-r*a,0,c*l-r*o,u*l+r*a,s*l*l+i,0,0,0,0,1),this}makeScale(e,t,i){return this.set(e,0,0,0,0,t,0,0,0,0,i,0,0,0,0,1),this}makeShear(e,t,i,r,s,a){return this.set(1,i,s,0,e,1,a,0,t,r,1,0,0,0,0,1),this}compose(e,t,i){const r=this.elements,s=t._x,a=t._y,o=t._z,l=t._w,c=s+s,u=a+a,h=o+o,d=s*c,m=s*u,x=s*h,S=a*u,p=a*h,f=o*h,y=l*c,w=l*u,M=l*h,A=i.x,E=i.y,R=i.z;return r[0]=(1-(S+f))*A,r[1]=(m+M)*A,r[2]=(x-w)*A,r[3]=0,r[4]=(m-M)*E,r[5]=(1-(d+f))*E,r[6]=(p+y)*E,r[7]=0,r[8]=(x+w)*R,r[9]=(p-y)*R,r[10]=(1-(d+S))*R,r[11]=0,r[12]=e.x,r[13]=e.y,r[14]=e.z,r[15]=1,this}decompose(e,t,i){const r=this.elements;e.x=r[12],e.y=r[13],e.z=r[14];const s=this.determinantAffine();if(s===0)return i.set(1,1,1),t.identity(),this;let a=Li.set(r[0],r[1],r[2]).length();const o=Li.set(r[4],r[5],r[6]).length(),l=Li.set(r[8],r[9],r[10]).length();s<0&&(a=-a),Jt.copy(this);const c=1/a,u=1/o,h=1/l;return Jt.elements[0]*=c,Jt.elements[1]*=c,Jt.elements[2]*=c,Jt.elements[4]*=u,Jt.elements[5]*=u,Jt.elements[6]*=u,Jt.elements[8]*=h,Jt.elements[9]*=h,Jt.elements[10]*=h,t.setFromRotationMatrix(Jt),i.x=a,i.y=o,i.z=l,this}makePerspective(e,t,i,r,s,a,o=mn,l=!1){const c=this.elements,u=2*s/(t-e),h=2*s/(i-r),d=(t+e)/(t-e),m=(i+r)/(i-r);let x,S;if(l)x=s/(a-s),S=a*s/(a-s);else if(o===mn)x=-(a+s)/(a-s),S=-2*a*s/(a-s);else if(o===Dr)x=-a/(a-s),S=-a*s/(a-s);else throw new Error("THREE.Matrix4.makePerspective(): Invalid coordinate system: "+o);return c[0]=u,c[4]=0,c[8]=d,c[12]=0,c[1]=0,c[5]=h,c[9]=m,c[13]=0,c[2]=0,c[6]=0,c[10]=x,c[14]=S,c[3]=0,c[7]=0,c[11]=-1,c[15]=0,this}makeOrthographic(e,t,i,r,s,a,o=mn,l=!1){const c=this.elements,u=2/(t-e),h=2/(i-r),d=-(t+e)/(t-e),m=-(i+r)/(i-r);let x,S;if(l)x=1/(a-s),S=a/(a-s);else if(o===mn)x=-2/(a-s),S=-(a+s)/(a-s);else if(o===Dr)x=-1/(a-s),S=-s/(a-s);else throw new Error("THREE.Matrix4.makeOrthographic(): Invalid coordinate system: "+o);return c[0]=u,c[4]=0,c[8]=0,c[12]=d,c[1]=0,c[5]=h,c[9]=0,c[13]=m,c[2]=0,c[6]=0,c[10]=x,c[14]=S,c[3]=0,c[7]=0,c[11]=0,c[15]=1,this}equals(e){const t=this.elements,i=e.elements;for(let r=0;r<16;r++)if(t[r]!==i[r])return!1;return!0}fromArray(e,t=0){for(let i=0;i<16;i++)this.elements[i]=e[i+t];return this}toArray(e=[],t=0){const i=this.elements;return e[t]=i[0],e[t+1]=i[1],e[t+2]=i[2],e[t+3]=i[3],e[t+4]=i[4],e[t+5]=i[5],e[t+6]=i[6],e[t+7]=i[7],e[t+8]=i[8],e[t+9]=i[9],e[t+10]=i[10],e[t+11]=i[11],e[t+12]=i[12],e[t+13]=i[13],e[t+14]=i[14],e[t+15]=i[15],e}};ks.prototype.isMatrix4=!0;let ht=ks;const Li=new B,Jt=new ht,v_=new B(0,0,0),S_=new B(1,1,1),zn=new B,Yr=new B,kt=new B,Xc=new ht,qc=new ir;class Kn{constructor(e=0,t=0,i=0,r=Kn.DEFAULT_ORDER){this.isEuler=!0,this._x=e,this._y=t,this._z=i,this._order=r}get x(){return this._x}set x(e){this._x=e,this._onChangeCallback()}get y(){return this._y}set y(e){this._y=e,this._onChangeCallback()}get z(){return this._z}set z(e){this._z=e,this._onChangeCallback()}get order(){return this._order}set order(e){this._order=e,this._onChangeCallback()}set(e,t,i,r=this._order){return this._x=e,this._y=t,this._z=i,this._order=r,this._onChangeCallback(),this}clone(){return new this.constructor(this._x,this._y,this._z,this._order)}copy(e){return this._x=e._x,this._y=e._y,this._z=e._z,this._order=e._order,this._onChangeCallback(),this}setFromRotationMatrix(e,t=this._order,i=!0){const r=e.elements,s=r[0],a=r[4],o=r[8],l=r[1],c=r[5],u=r[9],h=r[2],d=r[6],m=r[10];switch(t){case"XYZ":this._y=Math.asin(ke(o,-1,1)),Math.abs(o)<.9999999?(this._x=Math.atan2(-u,m),this._z=Math.atan2(-a,s)):(this._x=Math.atan2(d,c),this._z=0);break;case"YXZ":this._x=Math.asin(-ke(u,-1,1)),Math.abs(u)<.9999999?(this._y=Math.atan2(o,m),this._z=Math.atan2(l,c)):(this._y=Math.atan2(-h,s),this._z=0);break;case"ZXY":this._x=Math.asin(ke(d,-1,1)),Math.abs(d)<.9999999?(this._y=Math.atan2(-h,m),this._z=Math.atan2(-a,c)):(this._y=0,this._z=Math.atan2(l,s));break;case"ZYX":this._y=Math.asin(-ke(h,-1,1)),Math.abs(h)<.9999999?(this._x=Math.atan2(d,m),this._z=Math.atan2(l,s)):(this._x=0,this._z=Math.atan2(-a,c));break;case"YZX":this._z=Math.asin(ke(l,-1,1)),Math.abs(l)<.9999999?(this._x=Math.atan2(-u,c),this._y=Math.atan2(-h,s)):(this._x=0,this._y=Math.atan2(o,m));break;case"XZY":this._z=Math.asin(-ke(a,-1,1)),Math.abs(a)<.9999999?(this._x=Math.atan2(d,c),this._y=Math.atan2(o,s)):(this._x=Math.atan2(-u,m),this._y=0);break;default:De("Euler: .setFromRotationMatrix() encountered an unknown order: "+t)}return this._order=t,i===!0&&this._onChangeCallback(),this}setFromQuaternion(e,t,i){return Xc.makeRotationFromQuaternion(e),this.setFromRotationMatrix(Xc,t,i)}setFromVector3(e,t=this._order){return this.set(e.x,e.y,e.z,t)}reorder(e){return qc.setFromEuler(this),this.setFromQuaternion(qc,e)}equals(e){return e._x===this._x&&e._y===this._y&&e._z===this._z&&e._order===this._order}fromArray(e){return this._x=e[0],this._y=e[1],this._z=e[2],e[3]!==void 0&&(this._order=e[3]),this._onChangeCallback(),this}toArray(e=[],t=0){return e[t]=this._x,e[t+1]=this._y,e[t+2]=this._z,e[t+3]=this._order,e}_onChange(e){return this._onChangeCallback=e,this}_onChangeCallback(){}*[Symbol.iterator](){yield this._x,yield this._y,yield this._z,yield this._order}}Kn.DEFAULT_ORDER="XYZ";class Of{constructor(){this.mask=1}set(e){this.mask=(1<<e|0)>>>0}enable(e){this.mask|=1<<e|0}enableAll(){this.mask=-1}toggle(e){this.mask^=1<<e|0}disable(e){this.mask&=~(1<<e|0)}disableAll(){this.mask=0}test(e){return(this.mask&e.mask)!==0}isEnabled(e){return(this.mask&(1<<e|0))!==0}}let M_=0;const Yc=new B,Ii=new ir,En=new ht,$r=new B,dr=new B,E_=new B,y_=new ir,$c=new B(1,0,0),Kc=new B(0,1,0),Zc=new B(0,0,1),Jc={type:"added"},b_={type:"removed"},Ui={type:"childadded",child:null},Ma={type:"childremoved",child:null};class It extends Ti{constructor(){super(),this.isObject3D=!0,Object.defineProperty(this,"id",{value:M_++}),this.uuid=zr(),this.name="",this.type="Object3D",this.parent=null,this.children=[],this.up=It.DEFAULT_UP.clone();const e=new B,t=new Kn,i=new ir,r=new B(1,1,1);function s(){i.setFromEuler(t,!1)}function a(){t.setFromQuaternion(i,void 0,!1)}t._onChange(s),i._onChange(a),Object.defineProperties(this,{position:{configurable:!0,enumerable:!0,value:e},rotation:{configurable:!0,enumerable:!0,value:t},quaternion:{configurable:!0,enumerable:!0,value:i},scale:{configurable:!0,enumerable:!0,value:r},modelViewMatrix:{value:new ht},normalMatrix:{value:new Ie}}),this.matrix=new ht,this.matrixWorld=new ht,this.matrixAutoUpdate=It.DEFAULT_MATRIX_AUTO_UPDATE,this.matrixWorldAutoUpdate=It.DEFAULT_MATRIX_WORLD_AUTO_UPDATE,this.matrixWorldNeedsUpdate=!1,this.layers=new Of,this.visible=!0,this.castShadow=!1,this.receiveShadow=!1,this.frustumCulled=!0,this.renderOrder=0,this.animations=[],this.customDepthMaterial=void 0,this.customDistanceMaterial=void 0,this.static=!1,this.userData={},this.pivot=null}onBeforeShadow(){}onAfterShadow(){}onBeforeRender(){}onAfterRender(){}applyMatrix4(e){this.matrixAutoUpdate&&this.updateMatrix(),this.matrix.premultiply(e),this.matrix.decompose(this.position,this.quaternion,this.scale)}applyQuaternion(e){return this.quaternion.premultiply(e),this}setRotationFromAxisAngle(e,t){this.quaternion.setFromAxisAngle(e,t)}setRotationFromEuler(e){this.quaternion.setFromEuler(e,!0)}setRotationFromMatrix(e){this.quaternion.setFromRotationMatrix(e)}setRotationFromQuaternion(e){this.quaternion.copy(e)}rotateOnAxis(e,t){return Ii.setFromAxisAngle(e,t),this.quaternion.multiply(Ii),this}rotateOnWorldAxis(e,t){return Ii.setFromAxisAngle(e,t),this.quaternion.premultiply(Ii),this}rotateX(e){return this.rotateOnAxis($c,e)}rotateY(e){return this.rotateOnAxis(Kc,e)}rotateZ(e){return this.rotateOnAxis(Zc,e)}translateOnAxis(e,t){return Yc.copy(e).applyQuaternion(this.quaternion),this.position.add(Yc.multiplyScalar(t)),this}translateX(e){return this.translateOnAxis($c,e)}translateY(e){return this.translateOnAxis(Kc,e)}translateZ(e){return this.translateOnAxis(Zc,e)}localToWorld(e){return this.updateWorldMatrix(!0,!1),e.applyMatrix4(this.matrixWorld)}worldToLocal(e){return this.updateWorldMatrix(!0,!1),e.applyMatrix4(En.copy(this.matrixWorld).invert())}lookAt(e,t,i){e.isVector3?$r.copy(e):$r.set(e,t,i);const r=this.parent;this.updateWorldMatrix(!0,!1),dr.setFromMatrixPosition(this.matrixWorld),this.isCamera||this.isLight?En.lookAt(dr,$r,this.up):En.lookAt($r,dr,this.up),this.quaternion.setFromRotationMatrix(En),r&&(En.extractRotation(r.matrixWorld),Ii.setFromRotationMatrix(En),this.quaternion.premultiply(Ii.invert()))}add(e){if(arguments.length>1){for(let t=0;t<arguments.length;t++)this.add(arguments[t]);return this}return e===this?($e("Object3D.add: object can't be added as a child of itself.",e),this):(e&&e.isObject3D?(e.removeFromParent(),e.parent=this,this.children.push(e),e.dispatchEvent(Jc),Ui.child=e,this.dispatchEvent(Ui),Ui.child=null):$e("Object3D.add: object not an instance of THREE.Object3D.",e),this)}remove(e){if(arguments.length>1){for(let i=0;i<arguments.length;i++)this.remove(arguments[i]);return this}const t=this.children.indexOf(e);return t!==-1&&(e.parent=null,this.children.splice(t,1),e.dispatchEvent(b_),Ma.child=e,this.dispatchEvent(Ma),Ma.child=null),this}removeFromParent(){const e=this.parent;return e!==null&&e.remove(this),this}clear(){return this.remove(...this.children)}attach(e){return this.updateWorldMatrix(!0,!1),En.copy(this.matrixWorld).invert(),e.parent!==null&&(e.parent.updateWorldMatrix(!0,!1),En.multiply(e.parent.matrixWorld)),e.applyMatrix4(En),e.removeFromParent(),e.parent=this,this.children.push(e),e.updateWorldMatrix(!1,!0),e.dispatchEvent(Jc),Ui.child=e,this.dispatchEvent(Ui),Ui.child=null,this}getObjectById(e){return this.getObjectByProperty("id",e)}getObjectByName(e){return this.getObjectByProperty("name",e)}getObjectByProperty(e,t){if(this[e]===t)return this;for(let i=0,r=this.children.length;i<r;i++){const a=this.children[i].getObjectByProperty(e,t);if(a!==void 0)return a}}getObjectsByProperty(e,t,i=[]){this[e]===t&&i.push(this);const r=this.children;for(let s=0,a=r.length;s<a;s++)r[s].getObjectsByProperty(e,t,i);return i}getWorldPosition(e){return this.updateWorldMatrix(!0,!1),e.setFromMatrixPosition(this.matrixWorld)}getWorldQuaternion(e){return this.updateWorldMatrix(!0,!1),this.matrixWorld.decompose(dr,e,E_),e}getWorldScale(e){return this.updateWorldMatrix(!0,!1),this.matrixWorld.decompose(dr,y_,e),e}getWorldDirection(e){this.updateWorldMatrix(!0,!1);const t=this.matrixWorld.elements;return e.set(t[8],t[9],t[10]).normalize()}raycast(){}traverse(e){e(this);const t=this.children;for(let i=0,r=t.length;i<r;i++)t[i].traverse(e)}traverseVisible(e){if(this.visible===!1)return;e(this);const t=this.children;for(let i=0,r=t.length;i<r;i++)t[i].traverseVisible(e)}traverseAncestors(e){const t=this.parent;t!==null&&(e(t),t.traverseAncestors(e))}updateMatrix(){this.matrix.compose(this.position,this.quaternion,this.scale);const e=this.pivot;if(e!==null){const t=e.x,i=e.y,r=e.z,s=this.matrix.elements;s[12]+=t-s[0]*t-s[4]*i-s[8]*r,s[13]+=i-s[1]*t-s[5]*i-s[9]*r,s[14]+=r-s[2]*t-s[6]*i-s[10]*r}this.matrixWorldNeedsUpdate=!0}updateMatrixWorld(e){this.matrixAutoUpdate&&this.updateMatrix(),(this.matrixWorldNeedsUpdate||e)&&(this.matrixWorldAutoUpdate===!0&&(this.parent===null?this.matrixWorld.copy(this.matrix):this.matrixWorld.multiplyMatrices(this.parent.matrixWorld,this.matrix)),this.matrixWorldNeedsUpdate=!1,e=!0);const t=this.children;for(let i=0,r=t.length;i<r;i++)t[i].updateMatrixWorld(e)}updateWorldMatrix(e,t,i=!1){const r=this.parent;if(e===!0&&r!==null&&r.updateWorldMatrix(!0,!1),this.matrixAutoUpdate&&this.updateMatrix(),(this.matrixWorldNeedsUpdate||i)&&(this.matrixWorldAutoUpdate===!0&&(this.parent===null?this.matrixWorld.copy(this.matrix):this.matrixWorld.multiplyMatrices(this.parent.matrixWorld,this.matrix)),this.matrixWorldNeedsUpdate=!1,i=!0),t===!0){const s=this.children;for(let a=0,o=s.length;a<o;a++)s[a].updateWorldMatrix(!1,!0,i)}}toJSON(e){const t=e===void 0||typeof e=="string",i={};t&&(e={geometries:{},materials:{},textures:{},images:{},shapes:{},skeletons:{},animations:{},nodes:{}},i.metadata={version:4.7,type:"Object",generator:"Object3D.toJSON"});const r={};r.uuid=this.uuid,r.type=this.type,this.name!==""&&(r.name=this.name),this.castShadow===!0&&(r.castShadow=!0),this.receiveShadow===!0&&(r.receiveShadow=!0),this.visible===!1&&(r.visible=!1),this.frustumCulled===!1&&(r.frustumCulled=!1),this.renderOrder!==0&&(r.renderOrder=this.renderOrder),this.static!==!1&&(r.static=this.static),Object.keys(this.userData).length>0&&(r.userData=this.userData),r.layers=this.layers.mask,r.matrix=this.matrix.toArray(),r.up=this.up.toArray(),this.pivot!==null&&(r.pivot=this.pivot.toArray()),this.matrixAutoUpdate===!1&&(r.matrixAutoUpdate=!1),this.morphTargetDictionary!==void 0&&(r.morphTargetDictionary=Object.assign({},this.morphTargetDictionary)),this.morphTargetInfluences!==void 0&&(r.morphTargetInfluences=this.morphTargetInfluences.slice()),this.isInstancedMesh&&(r.type="InstancedMesh",r.count=this.count,r.instanceMatrix=this.instanceMatrix.toJSON(),this.instanceColor!==null&&(r.instanceColor=this.instanceColor.toJSON())),this.isBatchedMesh&&(r.type="BatchedMesh",r.perObjectFrustumCulled=this.perObjectFrustumCulled,r.sortObjects=this.sortObjects,r.drawRanges=this._drawRanges,r.reservedRanges=this._reservedRanges,r.geometryInfo=this._geometryInfo.map(o=>({...o,boundingBox:o.boundingBox?o.boundingBox.toJSON():void 0,boundingSphere:o.boundingSphere?o.boundingSphere.toJSON():void 0})),r.instanceInfo=this._instanceInfo.map(o=>({...o})),r.availableInstanceIds=this._availableInstanceIds.slice(),r.availableGeometryIds=this._availableGeometryIds.slice(),r.nextIndexStart=this._nextIndexStart,r.nextVertexStart=this._nextVertexStart,r.geometryCount=this._geometryCount,r.maxInstanceCount=this._maxInstanceCount,r.maxVertexCount=this._maxVertexCount,r.maxIndexCount=this._maxIndexCount,r.geometryInitialized=this._geometryInitialized,r.matricesTexture=this._matricesTexture.toJSON(e),r.indirectTexture=this._indirectTexture.toJSON(e),this._colorsTexture!==null&&(r.colorsTexture=this._colorsTexture.toJSON(e)),this.boundingSphere!==null&&(r.boundingSphere=this.boundingSphere.toJSON()),this.boundingBox!==null&&(r.boundingBox=this.boundingBox.toJSON()));function s(o,l){return o[l.uuid]===void 0&&(o[l.uuid]=l.toJSON(e)),l.uuid}if(this.isScene)this.background&&(this.background.isColor?r.background=this.background.toJSON():this.background.isTexture&&(r.background=this.background.toJSON(e).uuid)),this.environment&&this.environment.isTexture&&this.environment.isRenderTargetTexture!==!0&&(r.environment=this.environment.toJSON(e).uuid);else if(this.isMesh||this.isLine||this.isPoints){r.geometry=s(e.geometries,this.geometry);const o=this.geometry.parameters;if(o!==void 0&&o.shapes!==void 0){const l=o.shapes;if(Array.isArray(l))for(let c=0,u=l.length;c<u;c++){const h=l[c];s(e.shapes,h)}else s(e.shapes,l)}}if(this.isSkinnedMesh&&(r.bindMode=this.bindMode,r.bindMatrix=this.bindMatrix.toArray(),this.skeleton!==void 0&&(s(e.skeletons,this.skeleton),r.skeleton=this.skeleton.uuid)),this.material!==void 0)if(Array.isArray(this.material)){const o=[];for(let l=0,c=this.material.length;l<c;l++)o.push(s(e.materials,this.material[l]));r.material=o}else r.material=s(e.materials,this.material);if(this.children.length>0){r.children=[];for(let o=0;o<this.children.length;o++)r.children.push(this.children[o].toJSON(e).object)}if(this.animations.length>0){r.animations=[];for(let o=0;o<this.animations.length;o++){const l=this.animations[o];r.animations.push(s(e.animations,l))}}if(t){const o=a(e.geometries),l=a(e.materials),c=a(e.textures),u=a(e.images),h=a(e.shapes),d=a(e.skeletons),m=a(e.animations),x=a(e.nodes);o.length>0&&(i.geometries=o),l.length>0&&(i.materials=l),c.length>0&&(i.textures=c),u.length>0&&(i.images=u),h.length>0&&(i.shapes=h),d.length>0&&(i.skeletons=d),m.length>0&&(i.animations=m),x.length>0&&(i.nodes=x)}return i.object=r,i;function a(o){const l=[];for(const c in o){const u=o[c];delete u.metadata,l.push(u)}return l}}clone(e){return new this.constructor().copy(this,e)}copy(e,t=!0){if(this.name=e.name,this.up.copy(e.up),this.position.copy(e.position),this.rotation.order=e.rotation.order,this.quaternion.copy(e.quaternion),this.scale.copy(e.scale),this.pivot=e.pivot!==null?e.pivot.clone():null,this.matrix.copy(e.matrix),this.matrixWorld.copy(e.matrixWorld),this.matrixAutoUpdate=e.matrixAutoUpdate,this.matrixWorldAutoUpdate=e.matrixWorldAutoUpdate,this.matrixWorldNeedsUpdate=e.matrixWorldNeedsUpdate,this.layers.mask=e.layers.mask,this.visible=e.visible,this.castShadow=e.castShadow,this.receiveShadow=e.receiveShadow,this.frustumCulled=e.frustumCulled,this.renderOrder=e.renderOrder,this.static=e.static,this.animations=e.animations.slice(),this.userData=JSON.parse(JSON.stringify(e.userData)),t===!0)for(let i=0;i<e.children.length;i++){const r=e.children[i];this.add(r.clone())}return this}}It.DEFAULT_UP=new B(0,1,0);It.DEFAULT_MATRIX_AUTO_UPDATE=!0;It.DEFAULT_MATRIX_WORLD_AUTO_UPDATE=!0;class yr extends It{constructor(){super(),this.isGroup=!0,this.type="Group"}}const T_={type:"move"};class Ea{constructor(){this._targetRay=null,this._grip=null,this._hand=null}getHandSpace(){return this._hand===null&&(this._hand=new yr,this._hand.matrixAutoUpdate=!1,this._hand.visible=!1,this._hand.joints={},this._hand.inputState={pinching:!1}),this._hand}getTargetRaySpace(){return this._targetRay===null&&(this._targetRay=new yr,this._targetRay.matrixAutoUpdate=!1,this._targetRay.visible=!1,this._targetRay.hasLinearVelocity=!1,this._targetRay.linearVelocity=new B,this._targetRay.hasAngularVelocity=!1,this._targetRay.angularVelocity=new B),this._targetRay}getGripSpace(){return this._grip===null&&(this._grip=new yr,this._grip.matrixAutoUpdate=!1,this._grip.visible=!1,this._grip.hasLinearVelocity=!1,this._grip.linearVelocity=new B,this._grip.hasAngularVelocity=!1,this._grip.angularVelocity=new B,this._grip.eventsEnabled=!1),this._grip}dispatchEvent(e){return this._targetRay!==null&&this._targetRay.dispatchEvent(e),this._grip!==null&&this._grip.dispatchEvent(e),this._hand!==null&&this._hand.dispatchEvent(e),this}connect(e){if(e&&e.hand){const t=this._hand;if(t)for(const i of e.hand.values())this._getHandJoint(t,i)}return this.dispatchEvent({type:"connected",data:e}),this}disconnect(e){return this.dispatchEvent({type:"disconnected",data:e}),this._targetRay!==null&&(this._targetRay.visible=!1),this._grip!==null&&(this._grip.visible=!1),this._hand!==null&&(this._hand.visible=!1),this}update(e,t,i){let r=null,s=null,a=null;const o=this._targetRay,l=this._grip,c=this._hand;if(e&&t.session.visibilityState!=="visible-blurred"){if(c&&e.hand){a=!0;for(const S of e.hand.values()){const p=t.getJointPose(S,i),f=this._getHandJoint(c,S);p!==null&&(f.matrix.fromArray(p.transform.matrix),f.matrix.decompose(f.position,f.rotation,f.scale),f.matrixWorldNeedsUpdate=!0,f.jointRadius=p.radius),f.visible=p!==null}const u=c.joints["index-finger-tip"],h=c.joints["thumb-tip"],d=u.position.distanceTo(h.position),m=.02,x=.005;c.inputState.pinching&&d>m+x?(c.inputState.pinching=!1,this.dispatchEvent({type:"pinchend",handedness:e.handedness,target:this})):!c.inputState.pinching&&d<=m-x&&(c.inputState.pinching=!0,this.dispatchEvent({type:"pinchstart",handedness:e.handedness,target:this}))}else l!==null&&e.gripSpace&&(s=t.getPose(e.gripSpace,i),s!==null&&(l.matrix.fromArray(s.transform.matrix),l.matrix.decompose(l.position,l.rotation,l.scale),l.matrixWorldNeedsUpdate=!0,s.linearVelocity?(l.hasLinearVelocity=!0,l.linearVelocity.copy(s.linearVelocity)):l.hasLinearVelocity=!1,s.angularVelocity?(l.hasAngularVelocity=!0,l.angularVelocity.copy(s.angularVelocity)):l.hasAngularVelocity=!1,l.eventsEnabled&&l.dispatchEvent({type:"gripUpdated",data:e,target:this})));o!==null&&(r=t.getPose(e.targetRaySpace,i),r===null&&s!==null&&(r=s),r!==null&&(o.matrix.fromArray(r.transform.matrix),o.matrix.decompose(o.position,o.rotation,o.scale),o.matrixWorldNeedsUpdate=!0,r.linearVelocity?(o.hasLinearVelocity=!0,o.linearVelocity.copy(r.linearVelocity)):o.hasLinearVelocity=!1,r.angularVelocity?(o.hasAngularVelocity=!0,o.angularVelocity.copy(r.angularVelocity)):o.hasAngularVelocity=!1,this.dispatchEvent(T_)))}return o!==null&&(o.visible=r!==null),l!==null&&(l.visible=s!==null),c!==null&&(c.visible=a!==null),this}_getHandJoint(e,t){if(e.joints[t.jointName]===void 0){const i=new yr;i.matrixAutoUpdate=!1,i.visible=!1,e.joints[t.jointName]=i,e.add(i)}return e.joints[t.jointName]}}const Ff={aliceblue:15792383,antiquewhite:16444375,aqua:65535,aquamarine:8388564,azure:15794175,beige:16119260,bisque:16770244,black:0,blanchedalmond:16772045,blue:255,blueviolet:9055202,brown:10824234,burlywood:14596231,cadetblue:6266528,chartreuse:8388352,chocolate:13789470,coral:16744272,cornflowerblue:6591981,cornsilk:16775388,crimson:14423100,cyan:65535,darkblue:139,darkcyan:35723,darkgoldenrod:12092939,darkgray:11119017,darkgreen:25600,darkgrey:11119017,darkkhaki:12433259,darkmagenta:9109643,darkolivegreen:5597999,darkorange:16747520,darkorchid:10040012,darkred:9109504,darksalmon:15308410,darkseagreen:9419919,darkslateblue:4734347,darkslategray:3100495,darkslategrey:3100495,darkturquoise:52945,darkviolet:9699539,deeppink:16716947,deepskyblue:49151,dimgray:6908265,dimgrey:6908265,dodgerblue:2003199,firebrick:11674146,floralwhite:16775920,forestgreen:2263842,fuchsia:16711935,gainsboro:14474460,ghostwhite:16316671,gold:16766720,goldenrod:14329120,gray:8421504,green:32768,greenyellow:11403055,grey:8421504,honeydew:15794160,hotpink:16738740,indianred:13458524,indigo:4915330,ivory:16777200,khaki:15787660,lavender:15132410,lavenderblush:16773365,lawngreen:8190976,lemonchiffon:16775885,lightblue:11393254,lightcoral:15761536,lightcyan:14745599,lightgoldenrodyellow:16448210,lightgray:13882323,lightgreen:9498256,lightgrey:13882323,lightpink:16758465,lightsalmon:16752762,lightseagreen:2142890,lightskyblue:8900346,lightslategray:7833753,lightslategrey:7833753,lightsteelblue:11584734,lightyellow:16777184,lime:65280,limegreen:3329330,linen:16445670,magenta:16711935,maroon:8388608,mediumaquamarine:6737322,mediumblue:205,mediumorchid:12211667,mediumpurple:9662683,mediumseagreen:3978097,mediumslateblue:8087790,mediumspringgreen:64154,mediumturquoise:4772300,mediumvioletred:13047173,midnightblue:1644912,mintcream:16121850,mistyrose:16770273,moccasin:16770229,navajowhite:16768685,navy:128,oldlace:16643558,olive:8421376,olivedrab:7048739,orange:16753920,orangered:16729344,orchid:14315734,palegoldenrod:15657130,palegreen:10025880,paleturquoise:11529966,palevioletred:14381203,papayawhip:16773077,peachpuff:16767673,peru:13468991,pink:16761035,plum:14524637,powderblue:11591910,purple:8388736,rebeccapurple:6697881,red:16711680,rosybrown:12357519,royalblue:4286945,saddlebrown:9127187,salmon:16416882,sandybrown:16032864,seagreen:3050327,seashell:16774638,sienna:10506797,silver:12632256,skyblue:8900331,slateblue:6970061,slategray:7372944,slategrey:7372944,snow:16775930,springgreen:65407,steelblue:4620980,tan:13808780,teal:32896,thistle:14204888,tomato:16737095,turquoise:4251856,violet:15631086,wheat:16113331,white:16777215,whitesmoke:16119285,yellow:16776960,yellowgreen:10145074},Hn={h:0,s:0,l:0},Kr={h:0,s:0,l:0};function ya(n,e,t){return t<0&&(t+=1),t>1&&(t-=1),t<1/6?n+(e-n)*6*t:t<1/2?e:t<2/3?n+(e-n)*6*(2/3-t):n}class qe{constructor(e,t,i){return this.isColor=!0,this.r=1,this.g=1,this.b=1,this.set(e,t,i)}set(e,t,i){if(t===void 0&&i===void 0){const r=e;r&&r.isColor?this.copy(r):typeof r=="number"?this.setHex(r):typeof r=="string"&&this.setStyle(r)}else this.setRGB(e,t,i);return this}setScalar(e){return this.r=e,this.g=e,this.b=e,this}setHex(e,t=Xt){return e=Math.floor(e),this.r=(e>>16&255)/255,this.g=(e>>8&255)/255,this.b=(e&255)/255,Ge.colorSpaceToWorking(this,t),this}setRGB(e,t,i,r=Ge.workingColorSpace){return this.r=e,this.g=t,this.b=i,Ge.colorSpaceToWorking(this,r),this}setHSL(e,t,i,r=Ge.workingColorSpace){if(e=d_(e,1),t=ke(t,0,1),i=ke(i,0,1),t===0)this.r=this.g=this.b=i;else{const s=i<=.5?i*(1+t):i+t-i*t,a=2*i-s;this.r=ya(a,s,e+1/3),this.g=ya(a,s,e),this.b=ya(a,s,e-1/3)}return Ge.colorSpaceToWorking(this,r),this}setStyle(e,t=Xt){function i(s){s!==void 0&&parseFloat(s)<1&&De("Color: Alpha component of "+e+" will be ignored.")}let r;if(r=/^(\w+)\(([^\)]*)\)/.exec(e)){let s;const a=r[1],o=r[2];switch(a){case"rgb":case"rgba":if(s=/^\s*(\d+)\s*,\s*(\d+)\s*,\s*(\d+)\s*(?:,\s*(\d*\.?\d+)\s*)?$/.exec(o))return i(s[4]),this.setRGB(Math.min(255,parseInt(s[1],10))/255,Math.min(255,parseInt(s[2],10))/255,Math.min(255,parseInt(s[3],10))/255,t);if(s=/^\s*(\d+)\%\s*,\s*(\d+)\%\s*,\s*(\d+)\%\s*(?:,\s*(\d*\.?\d+)\s*)?$/.exec(o))return i(s[4]),this.setRGB(Math.min(100,parseInt(s[1],10))/100,Math.min(100,parseInt(s[2],10))/100,Math.min(100,parseInt(s[3],10))/100,t);break;case"hsl":case"hsla":if(s=/^\s*(\d*\.?\d+)\s*,\s*(\d*\.?\d+)\%\s*,\s*(\d*\.?\d+)\%\s*(?:,\s*(\d*\.?\d+)\s*)?$/.exec(o))return i(s[4]),this.setHSL(parseFloat(s[1])/360,parseFloat(s[2])/100,parseFloat(s[3])/100,t);break;default:De("Color: Unknown color model "+e)}}else if(r=/^\#([A-Fa-f\d]+)$/.exec(e)){const s=r[1],a=s.length;if(a===3)return this.setRGB(parseInt(s.charAt(0),16)/15,parseInt(s.charAt(1),16)/15,parseInt(s.charAt(2),16)/15,t);if(a===6)return this.setHex(parseInt(s,16),t);De("Color: Invalid hex color "+e)}else if(e&&e.length>0)return this.setColorName(e,t);return this}setColorName(e,t=Xt){const i=Ff[e.toLowerCase()];return i!==void 0?this.setHex(i,t):De("Color: Unknown color "+e),this}clone(){return new this.constructor(this.r,this.g,this.b)}copy(e){return this.r=e.r,this.g=e.g,this.b=e.b,this}copySRGBToLinear(e){return this.r=Dn(e.r),this.g=Dn(e.g),this.b=Dn(e.b),this}copyLinearToSRGB(e){return this.r=Yi(e.r),this.g=Yi(e.g),this.b=Yi(e.b),this}convertSRGBToLinear(){return this.copySRGBToLinear(this),this}convertLinearToSRGB(){return this.copyLinearToSRGB(this),this}getHex(e=Xt){return Ge.workingToColorSpace(Pt.copy(this),e),Math.round(ke(Pt.r*255,0,255))*65536+Math.round(ke(Pt.g*255,0,255))*256+Math.round(ke(Pt.b*255,0,255))}getHexString(e=Xt){return("000000"+this.getHex(e).toString(16)).slice(-6)}getHSL(e,t=Ge.workingColorSpace){Ge.workingToColorSpace(Pt.copy(this),t);const i=Pt.r,r=Pt.g,s=Pt.b,a=Math.max(i,r,s),o=Math.min(i,r,s);let l,c;const u=(o+a)/2;if(o===a)l=0,c=0;else{const h=a-o;switch(c=u<=.5?h/(a+o):h/(2-a-o),a){case i:l=(r-s)/h+(r<s?6:0);break;case r:l=(s-i)/h+2;break;case s:l=(i-r)/h+4;break}l/=6}return e.h=l,e.s=c,e.l=u,e}getRGB(e,t=Ge.workingColorSpace){return Ge.workingToColorSpace(Pt.copy(this),t),e.r=Pt.r,e.g=Pt.g,e.b=Pt.b,e}getStyle(e=Xt){Ge.workingToColorSpace(Pt.copy(this),e);const t=Pt.r,i=Pt.g,r=Pt.b;return e!==Xt?`color(${e} ${t.toFixed(3)} ${i.toFixed(3)} ${r.toFixed(3)})`:`rgb(${Math.round(t*255)},${Math.round(i*255)},${Math.round(r*255)})`}offsetHSL(e,t,i){return this.getHSL(Hn),this.setHSL(Hn.h+e,Hn.s+t,Hn.l+i)}add(e){return this.r+=e.r,this.g+=e.g,this.b+=e.b,this}addColors(e,t){return this.r=e.r+t.r,this.g=e.g+t.g,this.b=e.b+t.b,this}addScalar(e){return this.r+=e,this.g+=e,this.b+=e,this}sub(e){return this.r=Math.max(0,this.r-e.r),this.g=Math.max(0,this.g-e.g),this.b=Math.max(0,this.b-e.b),this}multiply(e){return this.r*=e.r,this.g*=e.g,this.b*=e.b,this}multiplyScalar(e){return this.r*=e,this.g*=e,this.b*=e,this}lerp(e,t){return this.r+=(e.r-this.r)*t,this.g+=(e.g-this.g)*t,this.b+=(e.b-this.b)*t,this}lerpColors(e,t,i){return this.r=e.r+(t.r-e.r)*i,this.g=e.g+(t.g-e.g)*i,this.b=e.b+(t.b-e.b)*i,this}lerpHSL(e,t){this.getHSL(Hn),e.getHSL(Kr);const i=_a(Hn.h,Kr.h,t),r=_a(Hn.s,Kr.s,t),s=_a(Hn.l,Kr.l,t);return this.setHSL(i,r,s),this}setFromVector3(e){return this.r=e.x,this.g=e.y,this.b=e.z,this}applyMatrix3(e){const t=this.r,i=this.g,r=this.b,s=e.elements;return this.r=s[0]*t+s[3]*i+s[6]*r,this.g=s[1]*t+s[4]*i+s[7]*r,this.b=s[2]*t+s[5]*i+s[8]*r,this}equals(e){return e.r===this.r&&e.g===this.g&&e.b===this.b}fromArray(e,t=0){return this.r=e[t],this.g=e[t+1],this.b=e[t+2],this}toArray(e=[],t=0){return e[t]=this.r,e[t+1]=this.g,e[t+2]=this.b,e}fromBufferAttribute(e,t){return this.r=e.getX(t),this.g=e.getY(t),this.b=e.getZ(t),this}toJSON(){return this.getHex()}*[Symbol.iterator](){yield this.r,yield this.g,yield this.b}}const Pt=new qe;qe.NAMES=Ff;class A_ extends It{constructor(){super(),this.isScene=!0,this.type="Scene",this.background=null,this.environment=null,this.fog=null,this.backgroundBlurriness=0,this.backgroundIntensity=1,this.backgroundRotation=new Kn,this.environmentIntensity=1,this.environmentRotation=new Kn,this.overrideMaterial=null,typeof __THREE_DEVTOOLS__<"u"&&__THREE_DEVTOOLS__.dispatchEvent(new CustomEvent("observe",{detail:this}))}copy(e,t){return super.copy(e,t),e.background!==null&&(this.background=e.background.clone()),e.environment!==null&&(this.environment=e.environment.clone()),e.fog!==null&&(this.fog=e.fog.clone()),this.backgroundBlurriness=e.backgroundBlurriness,this.backgroundIntensity=e.backgroundIntensity,this.backgroundRotation.copy(e.backgroundRotation),this.environmentIntensity=e.environmentIntensity,this.environmentRotation.copy(e.environmentRotation),e.overrideMaterial!==null&&(this.overrideMaterial=e.overrideMaterial.clone()),this.matrixAutoUpdate=e.matrixAutoUpdate,this}toJSON(e){const t=super.toJSON(e);return this.fog!==null&&(t.object.fog=this.fog.toJSON()),this.backgroundBlurriness>0&&(t.object.backgroundBlurriness=this.backgroundBlurriness),this.backgroundIntensity!==1&&(t.object.backgroundIntensity=this.backgroundIntensity),t.object.backgroundRotation=this.backgroundRotation.toArray(),this.environmentIntensity!==1&&(t.object.environmentIntensity=this.environmentIntensity),t.object.environmentRotation=this.environmentRotation.toArray(),t}}const Qt=new B,yn=new B,ba=new B,bn=new B,Ni=new B,Oi=new B,Qc=new B,Ta=new B,Aa=new B,wa=new B,Ra=new ut,Ca=new ut,Pa=new ut;class tn{constructor(e=new B,t=new B,i=new B){this.a=e,this.b=t,this.c=i}static getNormal(e,t,i,r){r.subVectors(i,t),Qt.subVectors(e,t),r.cross(Qt);const s=r.lengthSq();return s>0?r.multiplyScalar(1/Math.sqrt(s)):r.set(0,0,0)}static getBarycoord(e,t,i,r,s){Qt.subVectors(r,t),yn.subVectors(i,t),ba.subVectors(e,t);const a=Qt.dot(Qt),o=Qt.dot(yn),l=Qt.dot(ba),c=yn.dot(yn),u=yn.dot(ba),h=a*c-o*o;if(h===0)return s.set(0,0,0),null;const d=1/h,m=(c*l-o*u)*d,x=(a*u-o*l)*d;return s.set(1-m-x,x,m)}static containsPoint(e,t,i,r){return this.getBarycoord(e,t,i,r,bn)===null?!1:bn.x>=0&&bn.y>=0&&bn.x+bn.y<=1}static getInterpolation(e,t,i,r,s,a,o,l){return this.getBarycoord(e,t,i,r,bn)===null?(l.x=0,l.y=0,"z"in l&&(l.z=0),"w"in l&&(l.w=0),null):(l.setScalar(0),l.addScaledVector(s,bn.x),l.addScaledVector(a,bn.y),l.addScaledVector(o,bn.z),l)}static getInterpolatedAttribute(e,t,i,r,s,a){return Ra.setScalar(0),Ca.setScalar(0),Pa.setScalar(0),Ra.fromBufferAttribute(e,t),Ca.fromBufferAttribute(e,i),Pa.fromBufferAttribute(e,r),a.setScalar(0),a.addScaledVector(Ra,s.x),a.addScaledVector(Ca,s.y),a.addScaledVector(Pa,s.z),a}static isFrontFacing(e,t,i,r){return Qt.subVectors(i,t),yn.subVectors(e,t),Qt.cross(yn).dot(r)<0}set(e,t,i){return this.a.copy(e),this.b.copy(t),this.c.copy(i),this}setFromPointsAndIndices(e,t,i,r){return this.a.copy(e[t]),this.b.copy(e[i]),this.c.copy(e[r]),this}setFromAttributeAndIndices(e,t,i,r){return this.a.fromBufferAttribute(e,t),this.b.fromBufferAttribute(e,i),this.c.fromBufferAttribute(e,r),this}clone(){return new this.constructor().copy(this)}copy(e){return this.a.copy(e.a),this.b.copy(e.b),this.c.copy(e.c),this}getArea(){return Qt.subVectors(this.c,this.b),yn.subVectors(this.a,this.b),Qt.cross(yn).length()*.5}getMidpoint(e){return e.addVectors(this.a,this.b).add(this.c).multiplyScalar(1/3)}getNormal(e){return tn.getNormal(this.a,this.b,this.c,e)}getPlane(e){return e.setFromCoplanarPoints(this.a,this.b,this.c)}getBarycoord(e,t){return tn.getBarycoord(e,this.a,this.b,this.c,t)}getInterpolation(e,t,i,r,s){return tn.getInterpolation(e,this.a,this.b,this.c,t,i,r,s)}containsPoint(e){return tn.containsPoint(e,this.a,this.b,this.c)}isFrontFacing(e){return tn.isFrontFacing(this.a,this.b,this.c,e)}intersectsBox(e){return e.intersectsTriangle(this)}closestPointToPoint(e,t){const i=this.a,r=this.b,s=this.c;let a,o;Ni.subVectors(r,i),Oi.subVectors(s,i),Ta.subVectors(e,i);const l=Ni.dot(Ta),c=Oi.dot(Ta);if(l<=0&&c<=0)return t.copy(i);Aa.subVectors(e,r);const u=Ni.dot(Aa),h=Oi.dot(Aa);if(u>=0&&h<=u)return t.copy(r);const d=l*h-u*c;if(d<=0&&l>=0&&u<=0)return a=l/(l-u),t.copy(i).addScaledVector(Ni,a);wa.subVectors(e,s);const m=Ni.dot(wa),x=Oi.dot(wa);if(x>=0&&m<=x)return t.copy(s);const S=m*c-l*x;if(S<=0&&c>=0&&x<=0)return o=c/(c-x),t.copy(i).addScaledVector(Oi,o);const p=u*x-m*h;if(p<=0&&h-u>=0&&m-x>=0)return Qc.subVectors(s,r),o=(h-u)/(h-u+(m-x)),t.copy(r).addScaledVector(Qc,o);const f=1/(p+S+d);return a=S*f,o=d*f,t.copy(i).addScaledVector(Ni,a).addScaledVector(Oi,o)}equals(e){return e.a.equals(this.a)&&e.b.equals(this.b)&&e.c.equals(this.c)}}class Hr{constructor(e=new B(1/0,1/0,1/0),t=new B(-1/0,-1/0,-1/0)){this.isBox3=!0,this.min=e,this.max=t}set(e,t){return this.min.copy(e),this.max.copy(t),this}setFromArray(e){this.makeEmpty();for(let t=0,i=e.length;t<i;t+=3)this.expandByPoint(jt.fromArray(e,t));return this}setFromBufferAttribute(e){this.makeEmpty();for(let t=0,i=e.count;t<i;t++)this.expandByPoint(jt.fromBufferAttribute(e,t));return this}setFromPoints(e){this.makeEmpty();for(let t=0,i=e.length;t<i;t++)this.expandByPoint(e[t]);return this}setFromCenterAndSize(e,t){const i=jt.copy(t).multiplyScalar(.5);return this.min.copy(e).sub(i),this.max.copy(e).add(i),this}setFromObject(e,t=!1){return this.makeEmpty(),this.expandByObject(e,t)}clone(){return new this.constructor().copy(this)}copy(e){return this.min.copy(e.min),this.max.copy(e.max),this}makeEmpty(){return this.min.x=this.min.y=this.min.z=1/0,this.max.x=this.max.y=this.max.z=-1/0,this}isEmpty(){return this.max.x<this.min.x||this.max.y<this.min.y||this.max.z<this.min.z}getCenter(e){return this.isEmpty()?e.set(0,0,0):e.addVectors(this.min,this.max).multiplyScalar(.5)}getSize(e){return this.isEmpty()?e.set(0,0,0):e.subVectors(this.max,this.min)}expandByPoint(e){return this.min.min(e),this.max.max(e),this}expandByVector(e){return this.min.sub(e),this.max.add(e),this}expandByScalar(e){return this.min.addScalar(-e),this.max.addScalar(e),this}expandByObject(e,t=!1){e.updateWorldMatrix(!1,!1);const i=e.geometry;if(i!==void 0){const s=i.getAttribute("position");if(t===!0&&s!==void 0&&e.isInstancedMesh!==!0)for(let a=0,o=s.count;a<o;a++)e.isMesh===!0?e.getVertexPosition(a,jt):jt.fromBufferAttribute(s,a),jt.applyMatrix4(e.matrixWorld),this.expandByPoint(jt);else e.boundingBox!==void 0?(e.boundingBox===null&&e.computeBoundingBox(),Zr.copy(e.boundingBox)):(i.boundingBox===null&&i.computeBoundingBox(),Zr.copy(i.boundingBox)),Zr.applyMatrix4(e.matrixWorld),this.union(Zr)}const r=e.children;for(let s=0,a=r.length;s<a;s++)this.expandByObject(r[s],t);return this}containsPoint(e){return e.x>=this.min.x&&e.x<=this.max.x&&e.y>=this.min.y&&e.y<=this.max.y&&e.z>=this.min.z&&e.z<=this.max.z}containsBox(e){return this.min.x<=e.min.x&&e.max.x<=this.max.x&&this.min.y<=e.min.y&&e.max.y<=this.max.y&&this.min.z<=e.min.z&&e.max.z<=this.max.z}getParameter(e,t){return t.set((e.x-this.min.x)/(this.max.x-this.min.x),(e.y-this.min.y)/(this.max.y-this.min.y),(e.z-this.min.z)/(this.max.z-this.min.z))}intersectsBox(e){return e.max.x>=this.min.x&&e.min.x<=this.max.x&&e.max.y>=this.min.y&&e.min.y<=this.max.y&&e.max.z>=this.min.z&&e.min.z<=this.max.z}intersectsSphere(e){return this.clampPoint(e.center,jt),jt.distanceToSquared(e.center)<=e.radius*e.radius}intersectsPlane(e){let t,i;return e.normal.x>0?(t=e.normal.x*this.min.x,i=e.normal.x*this.max.x):(t=e.normal.x*this.max.x,i=e.normal.x*this.min.x),e.normal.y>0?(t+=e.normal.y*this.min.y,i+=e.normal.y*this.max.y):(t+=e.normal.y*this.max.y,i+=e.normal.y*this.min.y),e.normal.z>0?(t+=e.normal.z*this.min.z,i+=e.normal.z*this.max.z):(t+=e.normal.z*this.max.z,i+=e.normal.z*this.min.z),t<=-e.constant&&i>=-e.constant}intersectsTriangle(e){if(this.isEmpty())return!1;this.getCenter(hr),Jr.subVectors(this.max,hr),Fi.subVectors(e.a,hr),Bi.subVectors(e.b,hr),zi.subVectors(e.c,hr),Vn.subVectors(Bi,Fi),Gn.subVectors(zi,Bi),ei.subVectors(Fi,zi);let t=[0,-Vn.z,Vn.y,0,-Gn.z,Gn.y,0,-ei.z,ei.y,Vn.z,0,-Vn.x,Gn.z,0,-Gn.x,ei.z,0,-ei.x,-Vn.y,Vn.x,0,-Gn.y,Gn.x,0,-ei.y,ei.x,0];return!Da(t,Fi,Bi,zi,Jr)||(t=[1,0,0,0,1,0,0,0,1],!Da(t,Fi,Bi,zi,Jr))?!1:(Qr.crossVectors(Vn,Gn),t=[Qr.x,Qr.y,Qr.z],Da(t,Fi,Bi,zi,Jr))}clampPoint(e,t){return t.copy(e).clamp(this.min,this.max)}distanceToPoint(e){return this.clampPoint(e,jt).distanceTo(e)}getBoundingSphere(e){return this.isEmpty()?e.makeEmpty():(this.getCenter(e.center),e.radius=this.getSize(jt).length()*.5),e}intersect(e){return this.min.max(e.min),this.max.min(e.max),this.isEmpty()&&this.makeEmpty(),this}union(e){return this.min.min(e.min),this.max.max(e.max),this}applyMatrix4(e){return this.isEmpty()?this:(Tn[0].set(this.min.x,this.min.y,this.min.z).applyMatrix4(e),Tn[1].set(this.min.x,this.min.y,this.max.z).applyMatrix4(e),Tn[2].set(this.min.x,this.max.y,this.min.z).applyMatrix4(e),Tn[3].set(this.min.x,this.max.y,this.max.z).applyMatrix4(e),Tn[4].set(this.max.x,this.min.y,this.min.z).applyMatrix4(e),Tn[5].set(this.max.x,this.min.y,this.max.z).applyMatrix4(e),Tn[6].set(this.max.x,this.max.y,this.min.z).applyMatrix4(e),Tn[7].set(this.max.x,this.max.y,this.max.z).applyMatrix4(e),this.setFromPoints(Tn),this)}translate(e){return this.min.add(e),this.max.add(e),this}equals(e){return e.min.equals(this.min)&&e.max.equals(this.max)}toJSON(){return{min:this.min.toArray(),max:this.max.toArray()}}fromJSON(e){return this.min.fromArray(e.min),this.max.fromArray(e.max),this}}const Tn=[new B,new B,new B,new B,new B,new B,new B,new B],jt=new B,Zr=new Hr,Fi=new B,Bi=new B,zi=new B,Vn=new B,Gn=new B,ei=new B,hr=new B,Jr=new B,Qr=new B,ti=new B;function Da(n,e,t,i,r){for(let s=0,a=n.length-3;s<=a;s+=3){ti.fromArray(n,s);const o=r.x*Math.abs(ti.x)+r.y*Math.abs(ti.y)+r.z*Math.abs(ti.z),l=e.dot(ti),c=t.dot(ti),u=i.dot(ti);if(Math.max(-Math.max(l,c,u),Math.min(l,c,u))>o)return!1}return!0}const vt=new B,jr=new Ve;let w_=0;class xn extends Ti{constructor(e,t,i=!1){if(super(),Array.isArray(e))throw new TypeError("THREE.BufferAttribute: array should be a Typed Array.");this.isBufferAttribute=!0,Object.defineProperty(this,"id",{value:w_++}),this.name="",this.array=e,this.itemSize=t,this.count=e!==void 0?e.length/t:0,this.normalized=i,this.usage=Bc,this.updateRanges=[],this.gpuType=pn,this.version=0}onUploadCallback(){}set needsUpdate(e){e===!0&&this.version++}setUsage(e){return this.usage=e,this}addUpdateRange(e,t){this.updateRanges.push({start:e,count:t})}clearUpdateRanges(){this.updateRanges.length=0}copy(e){return this.name=e.name,this.array=new e.array.constructor(e.array),this.itemSize=e.itemSize,this.count=e.count,this.normalized=e.normalized,this.usage=e.usage,this.gpuType=e.gpuType,this}copyAt(e,t,i){e*=this.itemSize,i*=t.itemSize;for(let r=0,s=this.itemSize;r<s;r++)this.array[e+r]=t.array[i+r];return this}copyArray(e){return this.array.set(e),this}applyMatrix3(e){if(this.itemSize===2)for(let t=0,i=this.count;t<i;t++)jr.fromBufferAttribute(this,t),jr.applyMatrix3(e),this.setXY(t,jr.x,jr.y);else if(this.itemSize===3)for(let t=0,i=this.count;t<i;t++)vt.fromBufferAttribute(this,t),vt.applyMatrix3(e),this.setXYZ(t,vt.x,vt.y,vt.z);return this}applyMatrix4(e){for(let t=0,i=this.count;t<i;t++)vt.fromBufferAttribute(this,t),vt.applyMatrix4(e),this.setXYZ(t,vt.x,vt.y,vt.z);return this}applyNormalMatrix(e){for(let t=0,i=this.count;t<i;t++)vt.fromBufferAttribute(this,t),vt.applyNormalMatrix(e),this.setXYZ(t,vt.x,vt.y,vt.z);return this}transformDirection(e){for(let t=0,i=this.count;t<i;t++)vt.fromBufferAttribute(this,t),vt.transformDirection(e),this.setXYZ(t,vt.x,vt.y,vt.z);return this}set(e,t=0){return this.array.set(e,t),this}getComponent(e,t){let i=this.array[e*this.itemSize+t];return this.normalized&&(i=fr(i,this.array)),i}setComponent(e,t,i){return this.normalized&&(i=zt(i,this.array)),this.array[e*this.itemSize+t]=i,this}getX(e){let t=this.array[e*this.itemSize];return this.normalized&&(t=fr(t,this.array)),t}setX(e,t){return this.normalized&&(t=zt(t,this.array)),this.array[e*this.itemSize]=t,this}getY(e){let t=this.array[e*this.itemSize+1];return this.normalized&&(t=fr(t,this.array)),t}setY(e,t){return this.normalized&&(t=zt(t,this.array)),this.array[e*this.itemSize+1]=t,this}getZ(e){let t=this.array[e*this.itemSize+2];return this.normalized&&(t=fr(t,this.array)),t}setZ(e,t){return this.normalized&&(t=zt(t,this.array)),this.array[e*this.itemSize+2]=t,this}getW(e){let t=this.array[e*this.itemSize+3];return this.normalized&&(t=fr(t,this.array)),t}setW(e,t){return this.normalized&&(t=zt(t,this.array)),this.array[e*this.itemSize+3]=t,this}setXY(e,t,i){return e*=this.itemSize,this.normalized&&(t=zt(t,this.array),i=zt(i,this.array)),this.array[e+0]=t,this.array[e+1]=i,this}setXYZ(e,t,i,r){return e*=this.itemSize,this.normalized&&(t=zt(t,this.array),i=zt(i,this.array),r=zt(r,this.array)),this.array[e+0]=t,this.array[e+1]=i,this.array[e+2]=r,this}setXYZW(e,t,i,r,s){return e*=this.itemSize,this.normalized&&(t=zt(t,this.array),i=zt(i,this.array),r=zt(r,this.array),s=zt(s,this.array)),this.array[e+0]=t,this.array[e+1]=i,this.array[e+2]=r,this.array[e+3]=s,this}onUpload(e){return this.onUploadCallback=e,this}clone(){return new this.constructor(this.array,this.itemSize).copy(this)}toJSON(){const e={itemSize:this.itemSize,type:this.array.constructor.name,array:Array.from(this.array),normalized:this.normalized};return this.name!==""&&(e.name=this.name),this.usage!==Bc&&(e.usage=this.usage),e}dispose(){this.dispatchEvent({type:"dispose"})}}class Bf extends xn{constructor(e,t,i){super(new Uint16Array(e),t,i)}}class zf extends xn{constructor(e,t,i){super(new Uint32Array(e),t,i)}}class Ot extends xn{constructor(e,t,i){super(new Float32Array(e),t,i)}}const R_=new Hr,pr=new B,La=new B;class Tl{constructor(e=new B,t=-1){this.isSphere=!0,this.center=e,this.radius=t}set(e,t){return this.center.copy(e),this.radius=t,this}setFromPoints(e,t){const i=this.center;t!==void 0?i.copy(t):R_.setFromPoints(e).getCenter(i);let r=0;for(let s=0,a=e.length;s<a;s++)r=Math.max(r,i.distanceToSquared(e[s]));return this.radius=Math.sqrt(r),this}copy(e){return this.center.copy(e.center),this.radius=e.radius,this}isEmpty(){return this.radius<0}makeEmpty(){return this.center.set(0,0,0),this.radius=-1,this}containsPoint(e){return e.distanceToSquared(this.center)<=this.radius*this.radius}distanceToPoint(e){return e.distanceTo(this.center)-this.radius}intersectsSphere(e){const t=this.radius+e.radius;return e.center.distanceToSquared(this.center)<=t*t}intersectsBox(e){return e.intersectsSphere(this)}intersectsPlane(e){return Math.abs(e.distanceToPoint(this.center))<=this.radius}clampPoint(e,t){const i=this.center.distanceToSquared(e);return t.copy(e),i>this.radius*this.radius&&(t.sub(this.center).normalize(),t.multiplyScalar(this.radius).add(this.center)),t}getBoundingBox(e){return this.isEmpty()?(e.makeEmpty(),e):(e.set(this.center,this.center),e.expandByScalar(this.radius),e)}applyMatrix4(e){return this.center.applyMatrix4(e),this.radius=this.radius*e.getMaxScaleOnAxis(),this}translate(e){return this.center.add(e),this}expandByPoint(e){if(this.isEmpty())return this.center.copy(e),this.radius=0,this;pr.subVectors(e,this.center);const t=pr.lengthSq();if(t>this.radius*this.radius){const i=Math.sqrt(t),r=(i-this.radius)*.5;this.center.addScaledVector(pr,r/i),this.radius+=r}return this}union(e){return e.isEmpty()?this:this.isEmpty()?(this.copy(e),this):(this.center.equals(e.center)===!0?this.radius=Math.max(this.radius,e.radius):(La.subVectors(e.center,this.center).setLength(e.radius),this.expandByPoint(pr.copy(e.center).add(La)),this.expandByPoint(pr.copy(e.center).sub(La))),this)}equals(e){return e.center.equals(this.center)&&e.radius===this.radius}clone(){return new this.constructor().copy(this)}toJSON(){return{radius:this.radius,center:this.center.toArray()}}fromJSON(e){return this.radius=e.radius,this.center.fromArray(e.center),this}}let C_=0;const Kt=new ht,Ia=new It,Hi=new B,Wt=new Hr,mr=new Hr,yt=new B;class sn extends Ti{constructor(){super(),this.isBufferGeometry=!0,Object.defineProperty(this,"id",{value:C_++}),this.uuid=zr(),this.name="",this.type="BufferGeometry",this.index=null,this.indirect=null,this.indirectOffset=0,this.attributes={},this.morphAttributes={},this.morphTargetsRelative=!1,this.groups=[],this.boundingBox=null,this.boundingSphere=null,this.drawRange={start:0,count:1/0},this.userData={},this._transformed=!1}getIndex(){return this.index}setIndex(e){return Array.isArray(e)?this.index=new(l_(e)?zf:Bf)(e,1):this.index=e,this}setIndirect(e,t=0){return this.indirect=e,this.indirectOffset=t,this}getIndirect(){return this.indirect}getAttribute(e){return this.attributes[e]}setAttribute(e,t){return this.attributes[e]=t,this}deleteAttribute(e){return delete this.attributes[e],this}hasAttribute(e){return this.attributes[e]!==void 0}addGroup(e,t,i=0){this.groups.push({start:e,count:t,materialIndex:i})}clearGroups(){this.groups=[]}setDrawRange(e,t){this.drawRange.start=e,this.drawRange.count=t}applyMatrix4(e){const t=this.attributes.position;t!==void 0&&(t.applyMatrix4(e),t.needsUpdate=!0);const i=this.attributes.normal;if(i!==void 0){const s=new Ie().getNormalMatrix(e);i.applyNormalMatrix(s),i.needsUpdate=!0}const r=this.attributes.tangent;return r!==void 0&&(r.transformDirection(e),r.needsUpdate=!0),this.boundingBox!==null&&this.computeBoundingBox(),this.boundingSphere!==null&&this.computeBoundingSphere(),this._transformed=!0,this}applyQuaternion(e){return Kt.makeRotationFromQuaternion(e),this.applyMatrix4(Kt),this}rotateX(e){return Kt.makeRotationX(e),this.applyMatrix4(Kt),this}rotateY(e){return Kt.makeRotationY(e),this.applyMatrix4(Kt),this}rotateZ(e){return Kt.makeRotationZ(e),this.applyMatrix4(Kt),this}translate(e,t,i){return Kt.makeTranslation(e,t,i),this.applyMatrix4(Kt),this}scale(e,t,i){return Kt.makeScale(e,t,i),this.applyMatrix4(Kt),this}lookAt(e){return Ia.lookAt(e),Ia.updateMatrix(),this.applyMatrix4(Ia.matrix),this}center(){return this.computeBoundingBox(),this.boundingBox.getCenter(Hi).negate(),this.translate(Hi.x,Hi.y,Hi.z),this}setFromPoints(e){const t=this.getAttribute("position");if(t===void 0){const i=[];for(let r=0,s=e.length;r<s;r++){const a=e[r];i.push(a.x,a.y,a.z||0)}this.setAttribute("position",new Ot(i,3))}else{const i=Math.min(e.length,t.count);for(let r=0;r<i;r++){const s=e[r];t.setXYZ(r,s.x,s.y,s.z||0)}e.length>t.count&&De("BufferGeometry: Buffer size too small for points data. Use .dispose() and create a new geometry."),t.needsUpdate=!0}return this}computeBoundingBox(){this.boundingBox===null&&(this.boundingBox=new Hr);const e=this.attributes.position,t=this.morphAttributes.position;if(e&&e.isGLBufferAttribute){$e("BufferGeometry.computeBoundingBox(): GLBufferAttribute requires a manual bounding box.",this),this.boundingBox.set(new B(-1/0,-1/0,-1/0),new B(1/0,1/0,1/0));return}if(e!==void 0){if(this.boundingBox.setFromBufferAttribute(e),t)for(let i=0,r=t.length;i<r;i++){const s=t[i];Wt.setFromBufferAttribute(s),this.morphTargetsRelative?(yt.addVectors(this.boundingBox.min,Wt.min),this.boundingBox.expandByPoint(yt),yt.addVectors(this.boundingBox.max,Wt.max),this.boundingBox.expandByPoint(yt)):(this.boundingBox.expandByPoint(Wt.min),this.boundingBox.expandByPoint(Wt.max))}}else this.boundingBox.makeEmpty();(isNaN(this.boundingBox.min.x)||isNaN(this.boundingBox.min.y)||isNaN(this.boundingBox.min.z))&&$e('BufferGeometry.computeBoundingBox(): Computed min/max have NaN values. The "position" attribute is likely to have NaN values.',this)}computeBoundingSphere(){this.boundingSphere===null&&(this.boundingSphere=new Tl);const e=this.attributes.position,t=this.morphAttributes.position;if(e&&e.isGLBufferAttribute){$e("BufferGeometry.computeBoundingSphere(): GLBufferAttribute requires a manual bounding sphere.",this),this.boundingSphere.set(new B,1/0);return}if(e){const i=this.boundingSphere.center;if(Wt.setFromBufferAttribute(e),t)for(let s=0,a=t.length;s<a;s++){const o=t[s];mr.setFromBufferAttribute(o),this.morphTargetsRelative?(yt.addVectors(Wt.min,mr.min),Wt.expandByPoint(yt),yt.addVectors(Wt.max,mr.max),Wt.expandByPoint(yt)):(Wt.expandByPoint(mr.min),Wt.expandByPoint(mr.max))}Wt.getCenter(i);let r=0;for(let s=0,a=e.count;s<a;s++)yt.fromBufferAttribute(e,s),r=Math.max(r,i.distanceToSquared(yt));if(t)for(let s=0,a=t.length;s<a;s++){const o=t[s],l=this.morphTargetsRelative;for(let c=0,u=o.count;c<u;c++)yt.fromBufferAttribute(o,c),l&&(Hi.fromBufferAttribute(e,c),yt.add(Hi)),r=Math.max(r,i.distanceToSquared(yt))}this.boundingSphere.radius=Math.sqrt(r),isNaN(this.boundingSphere.radius)&&$e('BufferGeometry.computeBoundingSphere(): Computed radius is NaN. The "position" attribute is likely to have NaN values.',this)}}computeTangents(){const e=this.index,t=this.attributes;if(e===null||t.position===void 0||t.normal===void 0||t.uv===void 0){$e("BufferGeometry: .computeTangents() failed. Missing required attributes (index, position, normal or uv)");return}const i=t.position,r=t.normal,s=t.uv;let a=this.getAttribute("tangent");(a===void 0||a.count!==i.count)&&(a=new xn(new Float32Array(4*i.count),4),this.setAttribute("tangent",a));const o=[],l=[];for(let g=0;g<i.count;g++)o[g]=new B,l[g]=new B;const c=new B,u=new B,h=new B,d=new Ve,m=new Ve,x=new Ve,S=new B,p=new B;function f(g,T,D){c.fromBufferAttribute(i,g),u.fromBufferAttribute(i,T),h.fromBufferAttribute(i,D),d.fromBufferAttribute(s,g),m.fromBufferAttribute(s,T),x.fromBufferAttribute(s,D),u.sub(c),h.sub(c),m.sub(d),x.sub(d);const C=1/(m.x*x.y-x.x*m.y);isFinite(C)&&(S.copy(u).multiplyScalar(x.y).addScaledVector(h,-m.y).multiplyScalar(C),p.copy(h).multiplyScalar(m.x).addScaledVector(u,-x.x).multiplyScalar(C),o[g].add(S),o[T].add(S),o[D].add(S),l[g].add(p),l[T].add(p),l[D].add(p))}let y=this.groups;y.length===0&&(y=[{start:0,count:e.count}]);for(let g=0,T=y.length;g<T;++g){const D=y[g],C=D.start,N=D.count;for(let X=C,q=C+N;X<q;X+=3)f(e.getX(X+0),e.getX(X+1),e.getX(X+2))}const w=new B,M=new B,A=new B,E=new B;function R(g){A.fromBufferAttribute(r,g),E.copy(A);const T=o[g];w.copy(T),w.sub(A.multiplyScalar(A.dot(T))).normalize(),M.crossVectors(E,T);const C=M.dot(l[g])<0?-1:1;a.setXYZW(g,w.x,w.y,w.z,C)}for(let g=0,T=y.length;g<T;++g){const D=y[g],C=D.start,N=D.count;for(let X=C,q=C+N;X<q;X+=3)R(e.getX(X+0)),R(e.getX(X+1)),R(e.getX(X+2))}this._transformed=!0}computeVertexNormals(){const e=this.index,t=this.getAttribute("position");if(t!==void 0){let i=this.getAttribute("normal");if(i===void 0||i.count!==t.count)i=new xn(new Float32Array(t.count*3),3),this.setAttribute("normal",i);else for(let d=0,m=i.count;d<m;d++)i.setXYZ(d,0,0,0);const r=new B,s=new B,a=new B,o=new B,l=new B,c=new B,u=new B,h=new B;if(e)for(let d=0,m=e.count;d<m;d+=3){const x=e.getX(d+0),S=e.getX(d+1),p=e.getX(d+2);r.fromBufferAttribute(t,x),s.fromBufferAttribute(t,S),a.fromBufferAttribute(t,p),u.subVectors(a,s),h.subVectors(r,s),u.cross(h),o.fromBufferAttribute(i,x),l.fromBufferAttribute(i,S),c.fromBufferAttribute(i,p),o.add(u),l.add(u),c.add(u),i.setXYZ(x,o.x,o.y,o.z),i.setXYZ(S,l.x,l.y,l.z),i.setXYZ(p,c.x,c.y,c.z)}else for(let d=0,m=t.count;d<m;d+=3)r.fromBufferAttribute(t,d+0),s.fromBufferAttribute(t,d+1),a.fromBufferAttribute(t,d+2),u.subVectors(a,s),h.subVectors(r,s),u.cross(h),i.setXYZ(d+0,u.x,u.y,u.z),i.setXYZ(d+1,u.x,u.y,u.z),i.setXYZ(d+2,u.x,u.y,u.z);this.normalizeNormals(),i.needsUpdate=!0}}normalizeNormals(){const e=this.attributes.normal;for(let t=0,i=e.count;t<i;t++)yt.fromBufferAttribute(e,t),yt.normalize(),e.setXYZ(t,yt.x,yt.y,yt.z)}toNonIndexed(){function e(o,l){const c=o.array,u=o.itemSize,h=o.normalized,d=new c.constructor(l.length*u);let m=0,x=0;for(let S=0,p=l.length;S<p;S++){o.isInterleavedBufferAttribute?m=l[S]*o.data.stride+o.offset:m=l[S]*u;for(let f=0;f<u;f++)d[x++]=c[m++]}return new xn(d,u,h)}if(this.index===null)return De("BufferGeometry.toNonIndexed(): BufferGeometry is already non-indexed."),this;const t=new sn,i=this.index.array,r=this.attributes;for(const o in r){const l=r[o],c=e(l,i);t.setAttribute(o,c)}const s=this.morphAttributes;for(const o in s){const l=[],c=s[o];for(let u=0,h=c.length;u<h;u++){const d=c[u],m=e(d,i);l.push(m)}t.morphAttributes[o]=l}t.morphTargetsRelative=this.morphTargetsRelative;const a=this.groups;for(let o=0,l=a.length;o<l;o++){const c=a[o];t.addGroup(c.start,c.count,c.materialIndex)}return t}toJSON(){const e={metadata:{version:4.7,type:"BufferGeometry",generator:"BufferGeometry.toJSON"}};if(e.uuid=this.uuid,e.type=this.parameters!==void 0&&this._transformed===!0?"BufferGeometry":this.type,this.name!==""&&(e.name=this.name),Object.keys(this.userData).length>0&&(e.userData=this.userData),this.parameters!==void 0&&this._transformed!==!0){const l=this.parameters;for(const c in l)l[c]!==void 0&&(e[c]=l[c]);return e}e.data={attributes:{}};const t=this.index;t!==null&&(e.data.index={type:t.array.constructor.name,array:Array.prototype.slice.call(t.array)});const i=this.attributes;for(const l in i){const c=i[l];e.data.attributes[l]=c.toJSON(e.data)}const r={};let s=!1;for(const l in this.morphAttributes){const c=this.morphAttributes[l],u=[];for(let h=0,d=c.length;h<d;h++){const m=c[h];u.push(m.toJSON(e.data))}u.length>0&&(r[l]=u,s=!0)}s&&(e.data.morphAttributes=r,e.data.morphTargetsRelative=this.morphTargetsRelative);const a=this.groups;a.length>0&&(e.data.groups=JSON.parse(JSON.stringify(a)));const o=this.boundingSphere;return o!==null&&(e.data.boundingSphere=o.toJSON()),e}clone(){return new this.constructor().copy(this)}copy(e){this.index=null,this.attributes={},this.morphAttributes={},this.groups=[],this.boundingBox=null,this.boundingSphere=null;const t={};this.name=e.name;const i=e.index;i!==null&&this.setIndex(i.clone());const r=e.attributes;for(const c in r){const u=r[c];this.setAttribute(c,u.clone(t))}const s=e.morphAttributes;for(const c in s){const u=[],h=s[c];for(let d=0,m=h.length;d<m;d++)u.push(h[d].clone(t));this.morphAttributes[c]=u}this.morphTargetsRelative=e.morphTargetsRelative;const a=e.groups;for(let c=0,u=a.length;c<u;c++){const h=a[c];this.addGroup(h.start,h.count,h.materialIndex)}const o=e.boundingBox;o!==null&&(this.boundingBox=o.clone());const l=e.boundingSphere;return l!==null&&(this.boundingSphere=l.clone()),this.drawRange.start=e.drawRange.start,this.drawRange.count=e.drawRange.count,this.userData=e.userData,this._transformed=e._transformed,this}dispose(){this.dispatchEvent({type:"dispose"})}}let P_=0;class Vr extends Ti{constructor(){super(),this.isMaterial=!0,Object.defineProperty(this,"id",{value:P_++}),this.uuid=zr(),this.name="",this.type="Material",this.blending=Xi,this.side=$n,this.vertexColors=!1,this.opacity=1,this.transparent=!1,this.alphaHash=!1,this.blendSrc=eo,this.blendDst=to,this.blendEquation=ai,this.blendSrcAlpha=null,this.blendDstAlpha=null,this.blendEquationAlpha=null,this.blendColor=new qe(0,0,0),this.blendAlpha=0,this.depthFunc=Zi,this.depthTest=!0,this.depthWrite=!0,this.stencilWriteMask=255,this.stencilFunc=Fc,this.stencilRef=0,this.stencilFuncMask=255,this.stencilFail=Pi,this.stencilZFail=Pi,this.stencilZPass=Pi,this.stencilWrite=!1,this.clippingPlanes=null,this.clipIntersection=!1,this.clipShadows=!1,this.shadowSide=null,this.colorWrite=!0,this.precision=null,this.polygonOffset=!1,this.polygonOffsetFactor=0,this.polygonOffsetUnits=0,this.dithering=!1,this.alphaToCoverage=!1,this.premultipliedAlpha=!1,this.forceSinglePass=!1,this.allowOverride=!0,this.visible=!0,this.toneMapped=!0,this.userData={},this.version=0,this._alphaTest=0}get alphaTest(){return this._alphaTest}set alphaTest(e){this._alphaTest>0!=e>0&&this.version++,this._alphaTest=e}onBeforeRender(){}onBeforeCompile(){}customProgramCacheKey(){return this.onBeforeCompile.toString()}setValues(e){if(e!==void 0)for(const t in e){const i=e[t];if(i===void 0){De(`Material: parameter '${t}' has value of undefined.`);continue}const r=this[t];if(r===void 0){De(`Material: '${t}' is not a property of THREE.${this.type}.`);continue}r&&r.isColor?r.set(i):r&&r.isVector2&&i&&i.isVector2||r&&r.isEuler&&i&&i.isEuler||r&&r.isVector3&&i&&i.isVector3?r.copy(i):this[t]=i}}toJSON(e){const t=e===void 0||typeof e=="string";t&&(e={textures:{},images:{}});const i={metadata:{version:4.7,type:"Material",generator:"Material.toJSON"}};i.uuid=this.uuid,i.type=this.type,this.name!==""&&(i.name=this.name),this.color&&this.color.isColor&&(i.color=this.color.getHex()),this.roughness!==void 0&&(i.roughness=this.roughness),this.metalness!==void 0&&(i.metalness=this.metalness),this.sheen!==void 0&&(i.sheen=this.sheen),this.sheenColor&&this.sheenColor.isColor&&(i.sheenColor=this.sheenColor.getHex()),this.sheenRoughness!==void 0&&(i.sheenRoughness=this.sheenRoughness),this.emissive&&this.emissive.isColor&&(i.emissive=this.emissive.getHex()),this.emissiveIntensity!==void 0&&this.emissiveIntensity!==1&&(i.emissiveIntensity=this.emissiveIntensity),this.specular&&this.specular.isColor&&(i.specular=this.specular.getHex()),this.specularIntensity!==void 0&&(i.specularIntensity=this.specularIntensity),this.specularColor&&this.specularColor.isColor&&(i.specularColor=this.specularColor.getHex()),this.shininess!==void 0&&(i.shininess=this.shininess),this.clearcoat!==void 0&&(i.clearcoat=this.clearcoat),this.clearcoatRoughness!==void 0&&(i.clearcoatRoughness=this.clearcoatRoughness),this.clearcoatMap&&this.clearcoatMap.isTexture&&(i.clearcoatMap=this.clearcoatMap.toJSON(e).uuid),this.clearcoatRoughnessMap&&this.clearcoatRoughnessMap.isTexture&&(i.clearcoatRoughnessMap=this.clearcoatRoughnessMap.toJSON(e).uuid),this.clearcoatNormalMap&&this.clearcoatNormalMap.isTexture&&(i.clearcoatNormalMap=this.clearcoatNormalMap.toJSON(e).uuid,i.clearcoatNormalScale=this.clearcoatNormalScale.toArray()),this.sheenColorMap&&this.sheenColorMap.isTexture&&(i.sheenColorMap=this.sheenColorMap.toJSON(e).uuid),this.sheenRoughnessMap&&this.sheenRoughnessMap.isTexture&&(i.sheenRoughnessMap=this.sheenRoughnessMap.toJSON(e).uuid),this.dispersion!==void 0&&(i.dispersion=this.dispersion),this.iridescence!==void 0&&(i.iridescence=this.iridescence),this.iridescenceIOR!==void 0&&(i.iridescenceIOR=this.iridescenceIOR),this.iridescenceThicknessRange!==void 0&&(i.iridescenceThicknessRange=this.iridescenceThicknessRange),this.iridescenceMap&&this.iridescenceMap.isTexture&&(i.iridescenceMap=this.iridescenceMap.toJSON(e).uuid),this.iridescenceThicknessMap&&this.iridescenceThicknessMap.isTexture&&(i.iridescenceThicknessMap=this.iridescenceThicknessMap.toJSON(e).uuid),this.anisotropy!==void 0&&(i.anisotropy=this.anisotropy),this.anisotropyRotation!==void 0&&(i.anisotropyRotation=this.anisotropyRotation),this.anisotropyMap&&this.anisotropyMap.isTexture&&(i.anisotropyMap=this.anisotropyMap.toJSON(e).uuid),this.map&&this.map.isTexture&&(i.map=this.map.toJSON(e).uuid),this.matcap&&this.matcap.isTexture&&(i.matcap=this.matcap.toJSON(e).uuid),this.alphaMap&&this.alphaMap.isTexture&&(i.alphaMap=this.alphaMap.toJSON(e).uuid),this.lightMap&&this.lightMap.isTexture&&(i.lightMap=this.lightMap.toJSON(e).uuid,i.lightMapIntensity=this.lightMapIntensity),this.aoMap&&this.aoMap.isTexture&&(i.aoMap=this.aoMap.toJSON(e).uuid,i.aoMapIntensity=this.aoMapIntensity),this.bumpMap&&this.bumpMap.isTexture&&(i.bumpMap=this.bumpMap.toJSON(e).uuid,i.bumpScale=this.bumpScale),this.normalMap&&this.normalMap.isTexture&&(i.normalMap=this.normalMap.toJSON(e).uuid,i.normalMapType=this.normalMapType,i.normalScale=this.normalScale.toArray()),this.displacementMap&&this.displacementMap.isTexture&&(i.displacementMap=this.displacementMap.toJSON(e).uuid,i.displacementScale=this.displacementScale,i.displacementBias=this.displacementBias),this.roughnessMap&&this.roughnessMap.isTexture&&(i.roughnessMap=this.roughnessMap.toJSON(e).uuid),this.metalnessMap&&this.metalnessMap.isTexture&&(i.metalnessMap=this.metalnessMap.toJSON(e).uuid),this.emissiveMap&&this.emissiveMap.isTexture&&(i.emissiveMap=this.emissiveMap.toJSON(e).uuid),this.specularMap&&this.specularMap.isTexture&&(i.specularMap=this.specularMap.toJSON(e).uuid),this.specularIntensityMap&&this.specularIntensityMap.isTexture&&(i.specularIntensityMap=this.specularIntensityMap.toJSON(e).uuid),this.specularColorMap&&this.specularColorMap.isTexture&&(i.specularColorMap=this.specularColorMap.toJSON(e).uuid),this.envMap&&this.envMap.isTexture&&(i.envMap=this.envMap.toJSON(e).uuid,this.combine!==void 0&&(i.combine=this.combine)),this.envMapRotation!==void 0&&(i.envMapRotation=this.envMapRotation.toArray()),this.envMapIntensity!==void 0&&(i.envMapIntensity=this.envMapIntensity),this.reflectivity!==void 0&&(i.reflectivity=this.reflectivity),this.refractionRatio!==void 0&&(i.refractionRatio=this.refractionRatio),this.gradientMap&&this.gradientMap.isTexture&&(i.gradientMap=this.gradientMap.toJSON(e).uuid),this.transmission!==void 0&&(i.transmission=this.transmission),this.transmissionMap&&this.transmissionMap.isTexture&&(i.transmissionMap=this.transmissionMap.toJSON(e).uuid),this.thickness!==void 0&&(i.thickness=this.thickness),this.thicknessMap&&this.thicknessMap.isTexture&&(i.thicknessMap=this.thicknessMap.toJSON(e).uuid),this.attenuationDistance!==void 0&&this.attenuationDistance!==1/0&&(i.attenuationDistance=this.attenuationDistance),this.attenuationColor!==void 0&&(i.attenuationColor=this.attenuationColor.getHex()),this.size!==void 0&&(i.size=this.size),this.shadowSide!==null&&(i.shadowSide=this.shadowSide),this.sizeAttenuation!==void 0&&(i.sizeAttenuation=this.sizeAttenuation),this.blending!==Xi&&(i.blending=this.blending),this.side!==$n&&(i.side=this.side),this.vertexColors===!0&&(i.vertexColors=!0),this.opacity<1&&(i.opacity=this.opacity),this.transparent===!0&&(i.transparent=!0),this.blendSrc!==eo&&(i.blendSrc=this.blendSrc),this.blendDst!==to&&(i.blendDst=this.blendDst),this.blendEquation!==ai&&(i.blendEquation=this.blendEquation),this.blendSrcAlpha!==null&&(i.blendSrcAlpha=this.blendSrcAlpha),this.blendDstAlpha!==null&&(i.blendDstAlpha=this.blendDstAlpha),this.blendEquationAlpha!==null&&(i.blendEquationAlpha=this.blendEquationAlpha),this.blendColor&&this.blendColor.isColor&&(i.blendColor=this.blendColor.getHex()),this.blendAlpha!==0&&(i.blendAlpha=this.blendAlpha),this.depthFunc!==Zi&&(i.depthFunc=this.depthFunc),this.depthTest===!1&&(i.depthTest=this.depthTest),this.depthWrite===!1&&(i.depthWrite=this.depthWrite),this.colorWrite===!1&&(i.colorWrite=this.colorWrite),this.stencilWriteMask!==255&&(i.stencilWriteMask=this.stencilWriteMask),this.stencilFunc!==Fc&&(i.stencilFunc=this.stencilFunc),this.stencilRef!==0&&(i.stencilRef=this.stencilRef),this.stencilFuncMask!==255&&(i.stencilFuncMask=this.stencilFuncMask),this.stencilFail!==Pi&&(i.stencilFail=this.stencilFail),this.stencilZFail!==Pi&&(i.stencilZFail=this.stencilZFail),this.stencilZPass!==Pi&&(i.stencilZPass=this.stencilZPass),this.stencilWrite===!0&&(i.stencilWrite=this.stencilWrite),this.rotation!==void 0&&this.rotation!==0&&(i.rotation=this.rotation),this.polygonOffset===!0&&(i.polygonOffset=!0),this.polygonOffsetFactor!==0&&(i.polygonOffsetFactor=this.polygonOffsetFactor),this.polygonOffsetUnits!==0&&(i.polygonOffsetUnits=this.polygonOffsetUnits),this.linewidth!==void 0&&this.linewidth!==1&&(i.linewidth=this.linewidth),this.dashSize!==void 0&&(i.dashSize=this.dashSize),this.gapSize!==void 0&&(i.gapSize=this.gapSize),this.scale!==void 0&&(i.scale=this.scale),this.dithering===!0&&(i.dithering=!0),this.alphaTest>0&&(i.alphaTest=this.alphaTest),this.alphaHash===!0&&(i.alphaHash=!0),this.alphaToCoverage===!0&&(i.alphaToCoverage=!0),this.premultipliedAlpha===!0&&(i.premultipliedAlpha=!0),this.forceSinglePass===!0&&(i.forceSinglePass=!0),this.allowOverride===!1&&(i.allowOverride=!1),this.wireframe===!0&&(i.wireframe=!0),this.wireframeLinewidth>1&&(i.wireframeLinewidth=this.wireframeLinewidth),this.wireframeLinecap!=="round"&&(i.wireframeLinecap=this.wireframeLinecap),this.wireframeLinejoin!=="round"&&(i.wireframeLinejoin=this.wireframeLinejoin),this.flatShading===!0&&(i.flatShading=!0),this.visible===!1&&(i.visible=!1),this.toneMapped===!1&&(i.toneMapped=!1),this.fog===!1&&(i.fog=!1),Object.keys(this.userData).length>0&&(i.userData=this.userData);function r(s){const a=[];for(const o in s){const l=s[o];delete l.metadata,a.push(l)}return a}if(t){const s=r(e.textures),a=r(e.images);s.length>0&&(i.textures=s),a.length>0&&(i.images=a)}return i}fromJSON(e,t){if(e.uuid!==void 0&&(this.uuid=e.uuid),e.name!==void 0&&(this.name=e.name),e.color!==void 0&&this.color!==void 0&&this.color.setHex(e.color),e.roughness!==void 0&&(this.roughness=e.roughness),e.metalness!==void 0&&(this.metalness=e.metalness),e.sheen!==void 0&&(this.sheen=e.sheen),e.sheenColor!==void 0&&(this.sheenColor=new qe().setHex(e.sheenColor)),e.sheenRoughness!==void 0&&(this.sheenRoughness=e.sheenRoughness),e.emissive!==void 0&&this.emissive!==void 0&&this.emissive.setHex(e.emissive),e.specular!==void 0&&this.specular!==void 0&&this.specular.setHex(e.specular),e.specularIntensity!==void 0&&(this.specularIntensity=e.specularIntensity),e.specularColor!==void 0&&this.specularColor!==void 0&&this.specularColor.setHex(e.specularColor),e.shininess!==void 0&&(this.shininess=e.shininess),e.clearcoat!==void 0&&(this.clearcoat=e.clearcoat),e.clearcoatRoughness!==void 0&&(this.clearcoatRoughness=e.clearcoatRoughness),e.dispersion!==void 0&&(this.dispersion=e.dispersion),e.iridescence!==void 0&&(this.iridescence=e.iridescence),e.iridescenceIOR!==void 0&&(this.iridescenceIOR=e.iridescenceIOR),e.iridescenceThicknessRange!==void 0&&(this.iridescenceThicknessRange=e.iridescenceThicknessRange),e.transmission!==void 0&&(this.transmission=e.transmission),e.thickness!==void 0&&(this.thickness=e.thickness),e.attenuationDistance!==void 0&&(this.attenuationDistance=e.attenuationDistance),e.attenuationColor!==void 0&&this.attenuationColor!==void 0&&this.attenuationColor.setHex(e.attenuationColor),e.anisotropy!==void 0&&(this.anisotropy=e.anisotropy),e.anisotropyRotation!==void 0&&(this.anisotropyRotation=e.anisotropyRotation),e.fog!==void 0&&(this.fog=e.fog),e.flatShading!==void 0&&(this.flatShading=e.flatShading),e.blending!==void 0&&(this.blending=e.blending),e.combine!==void 0&&(this.combine=e.combine),e.side!==void 0&&(this.side=e.side),e.shadowSide!==void 0&&(this.shadowSide=e.shadowSide),e.opacity!==void 0&&(this.opacity=e.opacity),e.transparent!==void 0&&(this.transparent=e.transparent),e.alphaTest!==void 0&&(this.alphaTest=e.alphaTest),e.alphaHash!==void 0&&(this.alphaHash=e.alphaHash),e.depthFunc!==void 0&&(this.depthFunc=e.depthFunc),e.depthTest!==void 0&&(this.depthTest=e.depthTest),e.depthWrite!==void 0&&(this.depthWrite=e.depthWrite),e.colorWrite!==void 0&&(this.colorWrite=e.colorWrite),e.blendSrc!==void 0&&(this.blendSrc=e.blendSrc),e.blendDst!==void 0&&(this.blendDst=e.blendDst),e.blendEquation!==void 0&&(this.blendEquation=e.blendEquation),e.blendSrcAlpha!==void 0&&(this.blendSrcAlpha=e.blendSrcAlpha),e.blendDstAlpha!==void 0&&(this.blendDstAlpha=e.blendDstAlpha),e.blendEquationAlpha!==void 0&&(this.blendEquationAlpha=e.blendEquationAlpha),e.blendColor!==void 0&&this.blendColor!==void 0&&this.blendColor.setHex(e.blendColor),e.blendAlpha!==void 0&&(this.blendAlpha=e.blendAlpha),e.stencilWriteMask!==void 0&&(this.stencilWriteMask=e.stencilWriteMask),e.stencilFunc!==void 0&&(this.stencilFunc=e.stencilFunc),e.stencilRef!==void 0&&(this.stencilRef=e.stencilRef),e.stencilFuncMask!==void 0&&(this.stencilFuncMask=e.stencilFuncMask),e.stencilFail!==void 0&&(this.stencilFail=e.stencilFail),e.stencilZFail!==void 0&&(this.stencilZFail=e.stencilZFail),e.stencilZPass!==void 0&&(this.stencilZPass=e.stencilZPass),e.stencilWrite!==void 0&&(this.stencilWrite=e.stencilWrite),e.wireframe!==void 0&&(this.wireframe=e.wireframe),e.wireframeLinewidth!==void 0&&(this.wireframeLinewidth=e.wireframeLinewidth),e.wireframeLinecap!==void 0&&(this.wireframeLinecap=e.wireframeLinecap),e.wireframeLinejoin!==void 0&&(this.wireframeLinejoin=e.wireframeLinejoin),e.rotation!==void 0&&(this.rotation=e.rotation),e.linewidth!==void 0&&(this.linewidth=e.linewidth),e.dashSize!==void 0&&(this.dashSize=e.dashSize),e.gapSize!==void 0&&(this.gapSize=e.gapSize),e.scale!==void 0&&(this.scale=e.scale),e.polygonOffset!==void 0&&(this.polygonOffset=e.polygonOffset),e.polygonOffsetFactor!==void 0&&(this.polygonOffsetFactor=e.polygonOffsetFactor),e.polygonOffsetUnits!==void 0&&(this.polygonOffsetUnits=e.polygonOffsetUnits),e.dithering!==void 0&&(this.dithering=e.dithering),e.alphaToCoverage!==void 0&&(this.alphaToCoverage=e.alphaToCoverage),e.premultipliedAlpha!==void 0&&(this.premultipliedAlpha=e.premultipliedAlpha),e.forceSinglePass!==void 0&&(this.forceSinglePass=e.forceSinglePass),e.allowOverride!==void 0&&(this.allowOverride=e.allowOverride),e.visible!==void 0&&(this.visible=e.visible),e.toneMapped!==void 0&&(this.toneMapped=e.toneMapped),e.userData!==void 0&&(this.userData=e.userData),e.vertexColors!==void 0&&(typeof e.vertexColors=="number"?this.vertexColors=e.vertexColors>0:this.vertexColors=e.vertexColors),e.size!==void 0&&(this.size=e.size),e.sizeAttenuation!==void 0&&(this.sizeAttenuation=e.sizeAttenuation),e.map!==void 0&&(this.map=t[e.map]||null),e.matcap!==void 0&&(this.matcap=t[e.matcap]||null),e.alphaMap!==void 0&&(this.alphaMap=t[e.alphaMap]||null),e.bumpMap!==void 0&&(this.bumpMap=t[e.bumpMap]||null),e.bumpScale!==void 0&&(this.bumpScale=e.bumpScale),e.normalMap!==void 0&&(this.normalMap=t[e.normalMap]||null),e.normalMapType!==void 0&&(this.normalMapType=e.normalMapType),e.normalScale!==void 0){let i=e.normalScale;Array.isArray(i)===!1&&(i=[i,i]),this.normalScale=new Ve().fromArray(i)}return e.displacementMap!==void 0&&(this.displacementMap=t[e.displacementMap]||null),e.displacementScale!==void 0&&(this.displacementScale=e.displacementScale),e.displacementBias!==void 0&&(this.displacementBias=e.displacementBias),e.roughnessMap!==void 0&&(this.roughnessMap=t[e.roughnessMap]||null),e.metalnessMap!==void 0&&(this.metalnessMap=t[e.metalnessMap]||null),e.emissiveMap!==void 0&&(this.emissiveMap=t[e.emissiveMap]||null),e.emissiveIntensity!==void 0&&(this.emissiveIntensity=e.emissiveIntensity),e.specularMap!==void 0&&(this.specularMap=t[e.specularMap]||null),e.specularIntensityMap!==void 0&&(this.specularIntensityMap=t[e.specularIntensityMap]||null),e.specularColorMap!==void 0&&(this.specularColorMap=t[e.specularColorMap]||null),e.envMap!==void 0&&(this.envMap=t[e.envMap]||null),e.envMapRotation!==void 0&&this.envMapRotation.fromArray(e.envMapRotation),e.envMapIntensity!==void 0&&(this.envMapIntensity=e.envMapIntensity),e.reflectivity!==void 0&&(this.reflectivity=e.reflectivity),e.refractionRatio!==void 0&&(this.refractionRatio=e.refractionRatio),e.lightMap!==void 0&&(this.lightMap=t[e.lightMap]||null),e.lightMapIntensity!==void 0&&(this.lightMapIntensity=e.lightMapIntensity),e.aoMap!==void 0&&(this.aoMap=t[e.aoMap]||null),e.aoMapIntensity!==void 0&&(this.aoMapIntensity=e.aoMapIntensity),e.gradientMap!==void 0&&(this.gradientMap=t[e.gradientMap]||null),e.clearcoatMap!==void 0&&(this.clearcoatMap=t[e.clearcoatMap]||null),e.clearcoatRoughnessMap!==void 0&&(this.clearcoatRoughnessMap=t[e.clearcoatRoughnessMap]||null),e.clearcoatNormalMap!==void 0&&(this.clearcoatNormalMap=t[e.clearcoatNormalMap]||null),e.clearcoatNormalScale!==void 0&&(this.clearcoatNormalScale=new Ve().fromArray(e.clearcoatNormalScale)),e.iridescenceMap!==void 0&&(this.iridescenceMap=t[e.iridescenceMap]||null),e.iridescenceThicknessMap!==void 0&&(this.iridescenceThicknessMap=t[e.iridescenceThicknessMap]||null),e.transmissionMap!==void 0&&(this.transmissionMap=t[e.transmissionMap]||null),e.thicknessMap!==void 0&&(this.thicknessMap=t[e.thicknessMap]||null),e.anisotropyMap!==void 0&&(this.anisotropyMap=t[e.anisotropyMap]||null),e.sheenColorMap!==void 0&&(this.sheenColorMap=t[e.sheenColorMap]||null),e.sheenRoughnessMap!==void 0&&(this.sheenRoughnessMap=t[e.sheenRoughnessMap]||null),this}clone(){return new this.constructor().copy(this)}copy(e){this.name=e.name,this.blending=e.blending,this.side=e.side,this.vertexColors=e.vertexColors,this.opacity=e.opacity,this.transparent=e.transparent,this.blendSrc=e.blendSrc,this.blendDst=e.blendDst,this.blendEquation=e.blendEquation,this.blendSrcAlpha=e.blendSrcAlpha,this.blendDstAlpha=e.blendDstAlpha,this.blendEquationAlpha=e.blendEquationAlpha,this.blendColor.copy(e.blendColor),this.blendAlpha=e.blendAlpha,this.depthFunc=e.depthFunc,this.depthTest=e.depthTest,this.depthWrite=e.depthWrite,this.stencilWriteMask=e.stencilWriteMask,this.stencilFunc=e.stencilFunc,this.stencilRef=e.stencilRef,this.stencilFuncMask=e.stencilFuncMask,this.stencilFail=e.stencilFail,this.stencilZFail=e.stencilZFail,this.stencilZPass=e.stencilZPass,this.stencilWrite=e.stencilWrite;const t=e.clippingPlanes;let i=null;if(t!==null){const r=t.length;i=new Array(r);for(let s=0;s!==r;++s)i[s]=t[s].clone()}return this.clippingPlanes=i,this.clipIntersection=e.clipIntersection,this.clipShadows=e.clipShadows,this.shadowSide=e.shadowSide,this.colorWrite=e.colorWrite,this.precision=e.precision,this.polygonOffset=e.polygonOffset,this.polygonOffsetFactor=e.polygonOffsetFactor,this.polygonOffsetUnits=e.polygonOffsetUnits,this.dithering=e.dithering,this.alphaTest=e.alphaTest,this.alphaHash=e.alphaHash,this.alphaToCoverage=e.alphaToCoverage,this.premultipliedAlpha=e.premultipliedAlpha,this.forceSinglePass=e.forceSinglePass,this.allowOverride=e.allowOverride,this.visible=e.visible,this.toneMapped=e.toneMapped,this.userData=JSON.parse(JSON.stringify(e.userData)),this}dispose(){this.dispatchEvent({type:"dispose"})}set needsUpdate(e){e===!0&&this.version++}}const An=new B,Ua=new B,es=new B,kn=new B,Na=new B,ts=new B,Oa=new B;class D_{constructor(e=new B,t=new B(0,0,-1)){this.origin=e,this.direction=t}set(e,t){return this.origin.copy(e),this.direction.copy(t),this}copy(e){return this.origin.copy(e.origin),this.direction.copy(e.direction),this}at(e,t){return t.copy(this.origin).addScaledVector(this.direction,e)}lookAt(e){return this.direction.copy(e).sub(this.origin).normalize(),this}recast(e){return this.origin.copy(this.at(e,An)),this}closestPointToPoint(e,t){t.subVectors(e,this.origin);const i=t.dot(this.direction);return i<0?t.copy(this.origin):t.copy(this.origin).addScaledVector(this.direction,i)}distanceToPoint(e){return Math.sqrt(this.distanceSqToPoint(e))}distanceSqToPoint(e){const t=An.subVectors(e,this.origin).dot(this.direction);return t<0?this.origin.distanceToSquared(e):(An.copy(this.origin).addScaledVector(this.direction,t),An.distanceToSquared(e))}distanceSqToSegment(e,t,i,r){Ua.copy(e).add(t).multiplyScalar(.5),es.copy(t).sub(e).normalize(),kn.copy(this.origin).sub(Ua);const s=e.distanceTo(t)*.5,a=-this.direction.dot(es),o=kn.dot(this.direction),l=-kn.dot(es),c=kn.lengthSq(),u=Math.abs(1-a*a);let h,d,m,x;if(u>0)if(h=a*l-o,d=a*o-l,x=s*u,h>=0)if(d>=-x)if(d<=x){const S=1/u;h*=S,d*=S,m=h*(h+a*d+2*o)+d*(a*h+d+2*l)+c}else d=s,h=Math.max(0,-(a*d+o)),m=-h*h+d*(d+2*l)+c;else d=-s,h=Math.max(0,-(a*d+o)),m=-h*h+d*(d+2*l)+c;else d<=-x?(h=Math.max(0,-(-a*s+o)),d=h>0?-s:Math.min(Math.max(-s,-l),s),m=-h*h+d*(d+2*l)+c):d<=x?(h=0,d=Math.min(Math.max(-s,-l),s),m=d*(d+2*l)+c):(h=Math.max(0,-(a*s+o)),d=h>0?s:Math.min(Math.max(-s,-l),s),m=-h*h+d*(d+2*l)+c);else d=a>0?-s:s,h=Math.max(0,-(a*d+o)),m=-h*h+d*(d+2*l)+c;return i&&i.copy(this.origin).addScaledVector(this.direction,h),r&&r.copy(Ua).addScaledVector(es,d),m}intersectSphere(e,t){An.subVectors(e.center,this.origin);const i=An.dot(this.direction),r=An.dot(An)-i*i,s=e.radius*e.radius;if(r>s)return null;const a=Math.sqrt(s-r),o=i-a,l=i+a;return l<0?null:o<0?this.at(l,t):this.at(o,t)}intersectsSphere(e){return e.radius<0?!1:this.distanceSqToPoint(e.center)<=e.radius*e.radius}distanceToPlane(e){const t=e.normal.dot(this.direction);if(t===0)return e.distanceToPoint(this.origin)===0?0:null;const i=-(this.origin.dot(e.normal)+e.constant)/t;return i>=0?i:null}intersectPlane(e,t){const i=this.distanceToPlane(e);return i===null?null:this.at(i,t)}intersectsPlane(e){const t=e.distanceToPoint(this.origin);return t===0||e.normal.dot(this.direction)*t<0}intersectBox(e,t){let i,r,s,a,o,l;const c=1/this.direction.x,u=1/this.direction.y,h=1/this.direction.z,d=this.origin;return c>=0?(i=(e.min.x-d.x)*c,r=(e.max.x-d.x)*c):(i=(e.max.x-d.x)*c,r=(e.min.x-d.x)*c),u>=0?(s=(e.min.y-d.y)*u,a=(e.max.y-d.y)*u):(s=(e.max.y-d.y)*u,a=(e.min.y-d.y)*u),i>a||s>r||((s>i||isNaN(i))&&(i=s),(a<r||isNaN(r))&&(r=a),h>=0?(o=(e.min.z-d.z)*h,l=(e.max.z-d.z)*h):(o=(e.max.z-d.z)*h,l=(e.min.z-d.z)*h),i>l||o>r)||((o>i||i!==i)&&(i=o),(l<r||r!==r)&&(r=l),r<0)?null:this.at(i>=0?i:r,t)}intersectsBox(e){return this.intersectBox(e,An)!==null}intersectTriangle(e,t,i,r,s){Na.subVectors(t,e),ts.subVectors(i,e),Oa.crossVectors(Na,ts);let a=this.direction.dot(Oa),o;if(a>0){if(r)return null;o=1}else if(a<0)o=-1,a=-a;else return null;kn.subVectors(this.origin,e);const l=o*this.direction.dot(ts.crossVectors(kn,ts));if(l<0)return null;const c=o*this.direction.dot(Na.cross(kn));if(c<0||l+c>a)return null;const u=-o*kn.dot(Oa);return u<0?null:this.at(u/a,s)}applyMatrix4(e){return this.origin.applyMatrix4(e),this.direction.transformDirection(e),this}equals(e){return e.origin.equals(this.origin)&&e.direction.equals(this.direction)}clone(){return new this.constructor().copy(this)}}class Hf extends Vr{constructor(e){super(),this.isMeshBasicMaterial=!0,this.type="MeshBasicMaterial",this.color=new qe(16777215),this.map=null,this.lightMap=null,this.lightMapIntensity=1,this.aoMap=null,this.aoMapIntensity=1,this.specularMap=null,this.alphaMap=null,this.envMap=null,this.envMapRotation=new Kn,this.combine=xf,this.reflectivity=1,this.refractionRatio=.98,this.wireframe=!1,this.wireframeLinewidth=1,this.wireframeLinecap="round",this.wireframeLinejoin="round",this.fog=!0,this.setValues(e)}copy(e){return super.copy(e),this.color.copy(e.color),this.map=e.map,this.lightMap=e.lightMap,this.lightMapIntensity=e.lightMapIntensity,this.aoMap=e.aoMap,this.aoMapIntensity=e.aoMapIntensity,this.specularMap=e.specularMap,this.alphaMap=e.alphaMap,this.envMap=e.envMap,this.envMapRotation.copy(e.envMapRotation),this.combine=e.combine,this.reflectivity=e.reflectivity,this.refractionRatio=e.refractionRatio,this.wireframe=e.wireframe,this.wireframeLinewidth=e.wireframeLinewidth,this.wireframeLinecap=e.wireframeLinecap,this.wireframeLinejoin=e.wireframeLinejoin,this.fog=e.fog,this}}const jc=new ht,ni=new D_,ns=new Tl,eu=new B,is=new B,rs=new B,ss=new B,Fa=new B,as=new B,tu=new B,os=new B;class bt extends It{constructor(e=new sn,t=new Hf){super(),this.isMesh=!0,this.type="Mesh",this.geometry=e,this.material=t,this.morphTargetDictionary=void 0,this.morphTargetInfluences=void 0,this.count=1,this.updateMorphTargets()}copy(e,t){return super.copy(e,t),e.morphTargetInfluences!==void 0&&(this.morphTargetInfluences=e.morphTargetInfluences.slice()),e.morphTargetDictionary!==void 0&&(this.morphTargetDictionary=Object.assign({},e.morphTargetDictionary)),this.material=Array.isArray(e.material)?e.material.slice():e.material,this.geometry=e.geometry,this}updateMorphTargets(){const t=this.geometry.morphAttributes,i=Object.keys(t);if(i.length>0){const r=t[i[0]];if(r!==void 0){this.morphTargetInfluences=[],this.morphTargetDictionary={};for(let s=0,a=r.length;s<a;s++){const o=r[s].name||String(s);this.morphTargetInfluences.push(0),this.morphTargetDictionary[o]=s}}}}getVertexPosition(e,t){const i=this.geometry,r=i.attributes.position,s=i.morphAttributes.position,a=i.morphTargetsRelative;t.fromBufferAttribute(r,e);const o=this.morphTargetInfluences;if(s&&o){as.set(0,0,0);for(let l=0,c=s.length;l<c;l++){const u=o[l],h=s[l];u!==0&&(Fa.fromBufferAttribute(h,e),a?as.addScaledVector(Fa,u):as.addScaledVector(Fa.sub(t),u))}t.add(as)}return t}raycast(e,t){const i=this.geometry,r=this.material,s=this.matrixWorld;r!==void 0&&(i.boundingSphere===null&&i.computeBoundingSphere(),ns.copy(i.boundingSphere),ns.applyMatrix4(s),ni.copy(e.ray).recast(e.near),!(ns.containsPoint(ni.origin)===!1&&(ni.intersectSphere(ns,eu)===null||ni.origin.distanceToSquared(eu)>(e.far-e.near)**2))&&(jc.copy(s).invert(),ni.copy(e.ray).applyMatrix4(jc),!(i.boundingBox!==null&&ni.intersectsBox(i.boundingBox)===!1)&&this._computeIntersections(e,t,ni)))}_computeIntersections(e,t,i){let r;const s=this.geometry,a=this.material,o=s.index,l=s.attributes.position,c=s.attributes.uv,u=s.attributes.uv1,h=s.attributes.normal,d=s.groups,m=s.drawRange;if(o!==null)if(Array.isArray(a))for(let x=0,S=d.length;x<S;x++){const p=d[x],f=a[p.materialIndex],y=Math.max(p.start,m.start),w=Math.min(o.count,Math.min(p.start+p.count,m.start+m.count));for(let M=y,A=w;M<A;M+=3){const E=o.getX(M),R=o.getX(M+1),g=o.getX(M+2);r=ls(this,f,e,i,c,u,h,E,R,g),r&&(r.faceIndex=Math.floor(M/3),r.face.materialIndex=p.materialIndex,t.push(r))}}else{const x=Math.max(0,m.start),S=Math.min(o.count,m.start+m.count);for(let p=x,f=S;p<f;p+=3){const y=o.getX(p),w=o.getX(p+1),M=o.getX(p+2);r=ls(this,a,e,i,c,u,h,y,w,M),r&&(r.faceIndex=Math.floor(p/3),t.push(r))}}else if(l!==void 0)if(Array.isArray(a))for(let x=0,S=d.length;x<S;x++){const p=d[x],f=a[p.materialIndex],y=Math.max(p.start,m.start),w=Math.min(l.count,Math.min(p.start+p.count,m.start+m.count));for(let M=y,A=w;M<A;M+=3){const E=M,R=M+1,g=M+2;r=ls(this,f,e,i,c,u,h,E,R,g),r&&(r.faceIndex=Math.floor(M/3),r.face.materialIndex=p.materialIndex,t.push(r))}}else{const x=Math.max(0,m.start),S=Math.min(l.count,m.start+m.count);for(let p=x,f=S;p<f;p+=3){const y=p,w=p+1,M=p+2;r=ls(this,a,e,i,c,u,h,y,w,M),r&&(r.faceIndex=Math.floor(p/3),t.push(r))}}}}function L_(n,e,t,i,r,s,a,o){let l;if(e.side===Vt?l=i.intersectTriangle(a,s,r,!0,o):l=i.intersectTriangle(r,s,a,e.side===$n,o),l===null)return null;os.copy(o),os.applyMatrix4(n.matrixWorld);const c=t.ray.origin.distanceTo(os);return c<t.near||c>t.far?null:{distance:c,point:os.clone(),object:n}}function ls(n,e,t,i,r,s,a,o,l,c){n.getVertexPosition(o,is),n.getVertexPosition(l,rs),n.getVertexPosition(c,ss);const u=L_(n,e,t,i,is,rs,ss,tu);if(u){const h=new B;tn.getBarycoord(tu,is,rs,ss,h),r&&(u.uv=tn.getInterpolatedAttribute(r,o,l,c,h,new Ve)),s&&(u.uv1=tn.getInterpolatedAttribute(s,o,l,c,h,new Ve)),a&&(u.normal=tn.getInterpolatedAttribute(a,o,l,c,h,new B),u.normal.dot(i.direction)>0&&u.normal.multiplyScalar(-1));const d={a:o,b:l,c,normal:new B,materialIndex:0};tn.getNormal(is,rs,ss,d.normal),u.face=d,u.barycoord=h}return u}class I_ extends Nt{constructor(e=null,t=1,i=1,r,s,a,o,l,c=At,u=At,h,d){super(null,a,o,l,c,u,r,s,h,d),this.isDataTexture=!0,this.image={data:e,width:t,height:i},this.generateMipmaps=!1,this.flipY=!1,this.unpackAlignment=1}}const Ba=new B,U_=new B,N_=new Ie;class si{constructor(e=new B(1,0,0),t=0){this.isPlane=!0,this.normal=e,this.constant=t}set(e,t){return this.normal.copy(e),this.constant=t,this}setComponents(e,t,i,r){return this.normal.set(e,t,i),this.constant=r,this}setFromNormalAndCoplanarPoint(e,t){return this.normal.copy(e),this.constant=-t.dot(this.normal),this}setFromCoplanarPoints(e,t,i){const r=Ba.subVectors(i,t).cross(U_.subVectors(e,t)).normalize();return this.setFromNormalAndCoplanarPoint(r,e),this}copy(e){return this.normal.copy(e.normal),this.constant=e.constant,this}normalize(){const e=1/this.normal.length();return this.normal.multiplyScalar(e),this.constant*=e,this}negate(){return this.constant*=-1,this.normal.negate(),this}distanceToPoint(e){return this.normal.dot(e)+this.constant}distanceToSphere(e){return this.distanceToPoint(e.center)-e.radius}projectPoint(e,t){return t.copy(e).addScaledVector(this.normal,-this.distanceToPoint(e))}intersectLine(e,t,i=!0){const r=e.delta(Ba),s=this.normal.dot(r);if(s===0)return this.distanceToPoint(e.start)===0?t.copy(e.start):null;const a=-(e.start.dot(this.normal)+this.constant)/s;return i===!0&&(a<0||a>1)?null:t.copy(e.start).addScaledVector(r,a)}intersectsLine(e){const t=this.distanceToPoint(e.start),i=this.distanceToPoint(e.end);return t<0&&i>0||i<0&&t>0}intersectsBox(e){return e.intersectsPlane(this)}intersectsSphere(e){return e.intersectsPlane(this)}coplanarPoint(e){return e.copy(this.normal).multiplyScalar(-this.constant)}applyMatrix4(e,t){const i=t||N_.getNormalMatrix(e),r=this.coplanarPoint(Ba).applyMatrix4(e),s=this.normal.applyMatrix3(i).normalize();return this.constant=-r.dot(s),this}translate(e){return this.constant-=e.dot(this.normal),this}equals(e){return e.normal.equals(this.normal)&&e.constant===this.constant}clone(){return new this.constructor().copy(this)}}const ii=new Tl,O_=new Ve(.5,.5),cs=new B;class Al{constructor(e=new si,t=new si,i=new si,r=new si,s=new si,a=new si){this.planes=[e,t,i,r,s,a]}set(e,t,i,r,s,a){const o=this.planes;return o[0].copy(e),o[1].copy(t),o[2].copy(i),o[3].copy(r),o[4].copy(s),o[5].copy(a),this}copy(e){const t=this.planes;for(let i=0;i<6;i++)t[i].copy(e.planes[i]);return this}setFromProjectionMatrix(e,t=mn,i=!1){const r=this.planes,s=e.elements,a=s[0],o=s[1],l=s[2],c=s[3],u=s[4],h=s[5],d=s[6],m=s[7],x=s[8],S=s[9],p=s[10],f=s[11],y=s[12],w=s[13],M=s[14],A=s[15];if(r[0].setComponents(c-a,m-u,f-x,A-y).normalize(),r[1].setComponents(c+a,m+u,f+x,A+y).normalize(),r[2].setComponents(c+o,m+h,f+S,A+w).normalize(),r[3].setComponents(c-o,m-h,f-S,A-w).normalize(),i)r[4].setComponents(l,d,p,M).normalize(),r[5].setComponents(c-l,m-d,f-p,A-M).normalize();else if(r[4].setComponents(c-l,m-d,f-p,A-M).normalize(),t===mn)r[5].setComponents(c+l,m+d,f+p,A+M).normalize();else if(t===Dr)r[5].setComponents(l,d,p,M).normalize();else throw new Error("THREE.Frustum.setFromProjectionMatrix(): Invalid coordinate system: "+t);return this}intersectsObject(e){if(e.boundingSphere!==void 0)e.boundingSphere===null&&e.computeBoundingSphere(),ii.copy(e.boundingSphere).applyMatrix4(e.matrixWorld);else{const t=e.geometry;t.boundingSphere===null&&t.computeBoundingSphere(),ii.copy(t.boundingSphere).applyMatrix4(e.matrixWorld)}return this.intersectsSphere(ii)}intersectsSprite(e){ii.center.set(0,0,0);const t=O_.distanceTo(e.center);return ii.radius=.7071067811865476+t,ii.applyMatrix4(e.matrixWorld),this.intersectsSphere(ii)}intersectsSphere(e){const t=this.planes,i=e.center,r=-e.radius;for(let s=0;s<6;s++)if(t[s].distanceToPoint(i)<r)return!1;return!0}intersectsBox(e){const t=this.planes;for(let i=0;i<6;i++){const r=t[i];if(cs.x=r.normal.x>0?e.max.x:e.min.x,cs.y=r.normal.y>0?e.max.y:e.min.y,cs.z=r.normal.z>0?e.max.z:e.min.z,r.distanceToPoint(cs)<0)return!1}return!0}containsPoint(e){const t=this.planes;for(let i=0;i<6;i++)if(t[i].distanceToPoint(e)<0)return!1;return!0}clone(){return new this.constructor().copy(this)}}class Vf extends Nt{constructor(e=[],t=Si,i,r,s,a,o,l,c,u){super(e,t,i,r,s,a,o,l,c,u),this.isCubeTexture=!0,this.flipY=!1}get images(){return this.image}set images(e){this.image=e}}class Qi extends Nt{constructor(e,t,i=vn,r,s,a,o=At,l=At,c,u=Un,h=1){if(u!==Un&&u!==ui)throw new Error("THREE.DepthTexture: format must be either THREE.DepthFormat or THREE.DepthStencilFormat");const d={width:e,height:t,depth:h};super(d,r,s,a,o,l,u,i,c),this.isDepthTexture=!0,this.flipY=!1,this.generateMipmaps=!1,this.compareFunction=null}copy(e){return super.copy(e),this.source=new bl(Object.assign({},e.image)),this.compareFunction=e.compareFunction,this}toJSON(e){const t=super.toJSON(e);return this.compareFunction!==null&&(t.compareFunction=this.compareFunction),t}}class F_ extends Qi{constructor(e,t=vn,i=Si,r,s,a=At,o=At,l,c=Un){const u={width:e,height:e,depth:1},h=[u,u,u,u,u,u];super(e,e,t,i,r,s,a,o,l,c),this.image=h,this.isCubeDepthTexture=!0,this.isCubeTexture=!0}get images(){return this.image}set images(e){this.image=e}}class Gf extends Nt{constructor(e=null){super(),this.sourceTexture=e,this.isExternalTexture=!0}copy(e){return super.copy(e),this.sourceTexture=e.sourceTexture,this}}class en extends sn{constructor(e=1,t=1,i=1,r=1,s=1,a=1){super(),this.type="BoxGeometry",this.parameters={width:e,height:t,depth:i,widthSegments:r,heightSegments:s,depthSegments:a};const o=this;r=Math.floor(r),s=Math.floor(s),a=Math.floor(a);const l=[],c=[],u=[],h=[];let d=0,m=0;x("z","y","x",-1,-1,i,t,e,a,s,0),x("z","y","x",1,-1,i,t,-e,a,s,1),x("x","z","y",1,1,e,i,t,r,a,2),x("x","z","y",1,-1,e,i,-t,r,a,3),x("x","y","z",1,-1,e,t,i,r,s,4),x("x","y","z",-1,-1,e,t,-i,r,s,5),this.setIndex(l),this.setAttribute("position",new Ot(c,3)),this.setAttribute("normal",new Ot(u,3)),this.setAttribute("uv",new Ot(h,2));function x(S,p,f,y,w,M,A,E,R,g,T){const D=M/R,C=A/g,N=M/2,X=A/2,q=E/2,F=R+1,Y=g+1;let H=0,Z=0;const ee=new B;for(let se=0;se<Y;se++){const ie=se*C-X;for(let xe=0;xe<F;xe++){const He=xe*D-N;ee[S]=He*y,ee[p]=ie*w,ee[f]=q,c.push(ee.x,ee.y,ee.z),ee[S]=0,ee[p]=0,ee[f]=E>0?1:-1,u.push(ee.x,ee.y,ee.z),h.push(xe/R),h.push(1-se/g),H+=1}}for(let se=0;se<g;se++)for(let ie=0;ie<R;ie++){const xe=d+ie+F*se,He=d+ie+F*(se+1),je=d+(ie+1)+F*(se+1),We=d+(ie+1)+F*se;l.push(xe,He,We),l.push(He,je,We),Z+=6}o.addGroup(m,Z,T),m+=Z,d+=H}}copy(e){return super.copy(e),this.parameters=Object.assign({},e.parameters),this}static fromJSON(e){return new en(e.width,e.height,e.depth,e.widthSegments,e.heightSegments,e.depthSegments)}}class wl extends sn{constructor(e=1,t=32,i=0,r=Math.PI*2){super(),this.type="CircleGeometry",this.parameters={radius:e,segments:t,thetaStart:i,thetaLength:r},t=Math.max(3,t);const s=[],a=[],o=[],l=[],c=new B,u=new Ve;a.push(0,0,0),o.push(0,0,1),l.push(.5,.5);for(let h=0,d=3;h<=t;h++,d+=3){const m=i+h/t*r;c.x=e*Math.cos(m),c.y=e*Math.sin(m),a.push(c.x,c.y,c.z),o.push(0,0,1),u.x=(a[d]/e+1)/2,u.y=(a[d+1]/e+1)/2,l.push(u.x,u.y)}for(let h=1;h<=t;h++)s.push(h,h+1,0);this.setIndex(s),this.setAttribute("position",new Ot(a,3)),this.setAttribute("normal",new Ot(o,3)),this.setAttribute("uv",new Ot(l,2))}copy(e){return super.copy(e),this.parameters=Object.assign({},e.parameters),this}static fromJSON(e){return new wl(e.radius,e.segments,e.thetaStart,e.thetaLength)}}class Bs extends sn{constructor(e=1,t=1,i=1,r=32,s=1,a=!1,o=0,l=Math.PI*2){super(),this.type="CylinderGeometry",this.parameters={radiusTop:e,radiusBottom:t,height:i,radialSegments:r,heightSegments:s,openEnded:a,thetaStart:o,thetaLength:l};const c=this;r=Math.floor(r),s=Math.floor(s);const u=[],h=[],d=[],m=[];let x=0;const S=[],p=i/2;let f=0;y(),a===!1&&(e>0&&w(!0),t>0&&w(!1)),this.setIndex(u),this.setAttribute("position",new Ot(h,3)),this.setAttribute("normal",new Ot(d,3)),this.setAttribute("uv",new Ot(m,2));function y(){const M=new B,A=new B;let E=0;const R=(t-e)/i;for(let g=0;g<=s;g++){const T=[],D=g/s,C=D*(t-e)+e;for(let N=0;N<=r;N++){const X=N/r,q=X*l+o,F=Math.sin(q),Y=Math.cos(q);A.x=C*F,A.y=-D*i+p,A.z=C*Y,h.push(A.x,A.y,A.z),M.set(F,R,Y).normalize(),d.push(M.x,M.y,M.z),m.push(X,1-D),T.push(x++)}S.push(T)}for(let g=0;g<r;g++)for(let T=0;T<s;T++){const D=S[T][g],C=S[T+1][g],N=S[T+1][g+1],X=S[T][g+1];(e>0||T!==0)&&(u.push(D,C,X),E+=3),(t>0||T!==s-1)&&(u.push(C,N,X),E+=3)}c.addGroup(f,E,0),f+=E}function w(M){const A=x,E=new Ve,R=new B;let g=0;const T=M===!0?e:t,D=M===!0?1:-1;for(let N=1;N<=r;N++)h.push(0,p*D,0),d.push(0,D,0),m.push(.5,.5),x++;const C=x;for(let N=0;N<=r;N++){const q=N/r*l+o,F=Math.cos(q),Y=Math.sin(q);R.x=T*Y,R.y=p*D,R.z=T*F,h.push(R.x,R.y,R.z),d.push(0,D,0),E.x=F*.5+.5,E.y=Y*.5*D+.5,m.push(E.x,E.y),x++}for(let N=0;N<r;N++){const X=A+N,q=C+N;M===!0?u.push(q,q+1,X):u.push(q+1,q,X),g+=3}c.addGroup(f,g,M===!0?1:2),f+=g}}copy(e){return super.copy(e),this.parameters=Object.assign({},e.parameters),this}static fromJSON(e){return new Bs(e.radiusTop,e.radiusBottom,e.height,e.radialSegments,e.heightSegments,e.openEnded,e.thetaStart,e.thetaLength)}}class $s extends sn{constructor(e=1,t=1,i=1,r=1){super(),this.type="PlaneGeometry",this.parameters={width:e,height:t,widthSegments:i,heightSegments:r};const s=e/2,a=t/2,o=Math.floor(i),l=Math.floor(r),c=o+1,u=l+1,h=e/o,d=t/l,m=[],x=[],S=[],p=[];for(let f=0;f<u;f++){const y=f*d-a;for(let w=0;w<c;w++){const M=w*h-s;x.push(M,-y,0),S.push(0,0,1),p.push(w/o),p.push(1-f/l)}}for(let f=0;f<l;f++)for(let y=0;y<o;y++){const w=y+c*f,M=y+c*(f+1),A=y+1+c*(f+1),E=y+1+c*f;m.push(w,M,E),m.push(M,A,E)}this.setIndex(m),this.setAttribute("position",new Ot(x,3)),this.setAttribute("normal",new Ot(S,3)),this.setAttribute("uv",new Ot(p,2))}copy(e){return super.copy(e),this.parameters=Object.assign({},e.parameters),this}static fromJSON(e){return new $s(e.width,e.height,e.widthSegments,e.heightSegments)}}function ji(n){const e={};for(const t in n){e[t]={};for(const i in n[t]){const r=n[t][i];if(nu(r))r.isRenderTargetTexture?(De("UniformsUtils: Textures of render targets cannot be cloned via cloneUniforms() or mergeUniforms()."),e[t][i]=null):e[t][i]=r.clone();else if(Array.isArray(r))if(nu(r[0])){const s=[];for(let a=0,o=r.length;a<o;a++)s[a]=r[a].clone();e[t][i]=s}else e[t][i]=r.slice();else e[t][i]=r}}return e}function Ut(n){const e={};for(let t=0;t<n.length;t++){const i=ji(n[t]);for(const r in i)e[r]=i[r]}return e}function nu(n){return n&&(n.isColor||n.isMatrix3||n.isMatrix4||n.isVector2||n.isVector3||n.isVector4||n.isTexture||n.isQuaternion)}function B_(n){const e=[];for(let t=0;t<n.length;t++)e.push(n[t].clone());return e}function kf(n){const e=n.getRenderTarget();return e===null?n.outputColorSpace:e.isXRRenderTarget===!0?e.texture.colorSpace:Ge.workingColorSpace}const z_={clone:ji,merge:Ut};var H_=`void main() {
	gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
}`,V_=`void main() {
	gl_FragColor = vec4( 1.0, 0.0, 0.0, 1.0 );
}`;class Sn extends Vr{constructor(e){super(),this.isShaderMaterial=!0,this.type="ShaderMaterial",this.defines={},this.uniforms={},this.uniformsGroups=[],this.vertexShader=H_,this.fragmentShader=V_,this.linewidth=1,this.wireframe=!1,this.wireframeLinewidth=1,this.fog=!1,this.lights=!1,this.clipping=!1,this.forceSinglePass=!0,this.extensions={clipCullDistance:!1,multiDraw:!1},this.defaultAttributeValues={color:[1,1,1],uv:[0,0],uv1:[0,0]},this.index0AttributeName=void 0,this.uniformsNeedUpdate=!1,this.glslVersion=null,e!==void 0&&this.setValues(e)}copy(e){return super.copy(e),this.fragmentShader=e.fragmentShader,this.vertexShader=e.vertexShader,this.uniforms=ji(e.uniforms),this.uniformsGroups=B_(e.uniformsGroups),this.defines=Object.assign({},e.defines),this.wireframe=e.wireframe,this.wireframeLinewidth=e.wireframeLinewidth,this.fog=e.fog,this.lights=e.lights,this.clipping=e.clipping,this.extensions=Object.assign({},e.extensions),this.glslVersion=e.glslVersion,this.defaultAttributeValues=Object.assign({},e.defaultAttributeValues),this.index0AttributeName=e.index0AttributeName,this.uniformsNeedUpdate=e.uniformsNeedUpdate,this}toJSON(e){const t=super.toJSON(e);t.glslVersion=this.glslVersion,t.uniforms={};for(const r in this.uniforms){const a=this.uniforms[r].value;a&&a.isTexture?t.uniforms[r]={type:"t",value:a.toJSON(e).uuid}:a&&a.isColor?t.uniforms[r]={type:"c",value:a.getHex()}:a&&a.isVector2?t.uniforms[r]={type:"v2",value:a.toArray()}:a&&a.isVector3?t.uniforms[r]={type:"v3",value:a.toArray()}:a&&a.isVector4?t.uniforms[r]={type:"v4",value:a.toArray()}:a&&a.isMatrix3?t.uniforms[r]={type:"m3",value:a.toArray()}:a&&a.isMatrix4?t.uniforms[r]={type:"m4",value:a.toArray()}:t.uniforms[r]={value:a}}Object.keys(this.defines).length>0&&(t.defines=this.defines),t.vertexShader=this.vertexShader,t.fragmentShader=this.fragmentShader,t.lights=this.lights,t.clipping=this.clipping;const i={};for(const r in this.extensions)this.extensions[r]===!0&&(i[r]=!0);return Object.keys(i).length>0&&(t.extensions=i),t}fromJSON(e,t){if(super.fromJSON(e,t),e.uniforms!==void 0)for(const i in e.uniforms){const r=e.uniforms[i];switch(this.uniforms[i]={},r.type){case"t":this.uniforms[i].value=t[r.value]||null;break;case"c":this.uniforms[i].value=new qe().setHex(r.value);break;case"v2":this.uniforms[i].value=new Ve().fromArray(r.value);break;case"v3":this.uniforms[i].value=new B().fromArray(r.value);break;case"v4":this.uniforms[i].value=new ut().fromArray(r.value);break;case"m3":this.uniforms[i].value=new Ie().fromArray(r.value);break;case"m4":this.uniforms[i].value=new ht().fromArray(r.value);break;default:this.uniforms[i].value=r.value}}if(e.defines!==void 0&&(this.defines=e.defines),e.vertexShader!==void 0&&(this.vertexShader=e.vertexShader),e.fragmentShader!==void 0&&(this.fragmentShader=e.fragmentShader),e.glslVersion!==void 0&&(this.glslVersion=e.glslVersion),e.extensions!==void 0)for(const i in e.extensions)this.extensions[i]=e.extensions[i];return e.lights!==void 0&&(this.lights=e.lights),e.clipping!==void 0&&(this.clipping=e.clipping),this}}class G_ extends Sn{constructor(e){super(e),this.isRawShaderMaterial=!0,this.type="RawShaderMaterial"}}class _r extends Vr{constructor(e){super(),this.isMeshStandardMaterial=!0,this.type="MeshStandardMaterial",this.defines={STANDARD:""},this.color=new qe(16777215),this.roughness=1,this.metalness=0,this.map=null,this.lightMap=null,this.lightMapIntensity=1,this.aoMap=null,this.aoMapIntensity=1,this.emissive=new qe(0),this.emissiveIntensity=1,this.emissiveMap=null,this.bumpMap=null,this.bumpScale=1,this.normalMap=null,this.normalMapType=Go,this.normalScale=new Ve(1,1),this.displacementMap=null,this.displacementScale=1,this.displacementBias=0,this.roughnessMap=null,this.metalnessMap=null,this.alphaMap=null,this.envMap=null,this.envMapRotation=new Kn,this.envMapIntensity=1,this.wireframe=!1,this.wireframeLinewidth=1,this.wireframeLinecap="round",this.wireframeLinejoin="round",this.flatShading=!1,this.fog=!0,this.setValues(e)}copy(e){return super.copy(e),this.defines={STANDARD:""},this.color.copy(e.color),this.roughness=e.roughness,this.metalness=e.metalness,this.map=e.map,this.lightMap=e.lightMap,this.lightMapIntensity=e.lightMapIntensity,this.aoMap=e.aoMap,this.aoMapIntensity=e.aoMapIntensity,this.emissive.copy(e.emissive),this.emissiveMap=e.emissiveMap,this.emissiveIntensity=e.emissiveIntensity,this.bumpMap=e.bumpMap,this.bumpScale=e.bumpScale,this.normalMap=e.normalMap,this.normalMapType=e.normalMapType,this.normalScale.copy(e.normalScale),this.displacementMap=e.displacementMap,this.displacementScale=e.displacementScale,this.displacementBias=e.displacementBias,this.roughnessMap=e.roughnessMap,this.metalnessMap=e.metalnessMap,this.alphaMap=e.alphaMap,this.envMap=e.envMap,this.envMapRotation.copy(e.envMapRotation),this.envMapIntensity=e.envMapIntensity,this.wireframe=e.wireframe,this.wireframeLinewidth=e.wireframeLinewidth,this.wireframeLinecap=e.wireframeLinecap,this.wireframeLinejoin=e.wireframeLinejoin,this.flatShading=e.flatShading,this.fog=e.fog,this}}class k_ extends Vr{constructor(e){super(),this.isMeshDepthMaterial=!0,this.type="MeshDepthMaterial",this.depthPacking=e_,this.map=null,this.alphaMap=null,this.displacementMap=null,this.displacementScale=1,this.displacementBias=0,this.wireframe=!1,this.wireframeLinewidth=1,this.setValues(e)}copy(e){return super.copy(e),this.depthPacking=e.depthPacking,this.map=e.map,this.alphaMap=e.alphaMap,this.displacementMap=e.displacementMap,this.displacementScale=e.displacementScale,this.displacementBias=e.displacementBias,this.wireframe=e.wireframe,this.wireframeLinewidth=e.wireframeLinewidth,this}}class W_ extends Vr{constructor(e){super(),this.isMeshDistanceMaterial=!0,this.type="MeshDistanceMaterial",this.map=null,this.alphaMap=null,this.displacementMap=null,this.displacementScale=1,this.displacementBias=0,this.setValues(e)}copy(e){return super.copy(e),this.map=e.map,this.alphaMap=e.alphaMap,this.displacementMap=e.displacementMap,this.displacementScale=e.displacementScale,this.displacementBias=e.displacementBias,this}}class Rl extends It{constructor(e,t=1){super(),this.isLight=!0,this.type="Light",this.color=new qe(e),this.intensity=t}dispose(){this.dispatchEvent({type:"dispose"})}copy(e,t){return super.copy(e,t),this.color.copy(e.color),this.intensity=e.intensity,this}toJSON(e){const t=super.toJSON(e);return t.object.color=this.color.getHex(),t.object.intensity=this.intensity,t}}const za=new ht,iu=new B,ru=new B;class Wf{constructor(e){this.camera=e,this.intensity=1,this.bias=0,this.biasNode=null,this.normalBias=0,this.radius=1,this.blurSamples=8,this.mapSize=new Ve(512,512),this.mapType=Yt,this.map=null,this.mapPass=null,this.matrix=new ht,this.autoUpdate=!0,this.needsUpdate=!1,this._frustum=new Al,this._frameExtents=new Ve(1,1),this._viewportCount=1,this._viewports=[new ut(0,0,1,1)]}getViewportCount(){return this._viewportCount}getFrustum(){return this._frustum}updateMatrices(e){const t=this.camera,i=this.matrix;iu.setFromMatrixPosition(e.matrixWorld),t.position.copy(iu),ru.setFromMatrixPosition(e.target.matrixWorld),t.lookAt(ru),t.updateMatrixWorld(),za.multiplyMatrices(t.projectionMatrix,t.matrixWorldInverse),this._frustum.setFromProjectionMatrix(za,t.coordinateSystem,t.reversedDepth),t.coordinateSystem===Dr||t.reversedDepth?i.set(.5,0,0,.5,0,.5,0,.5,0,0,1,0,0,0,0,1):i.set(.5,0,0,.5,0,.5,0,.5,0,0,.5,.5,0,0,0,1),i.multiply(za)}getViewport(e){return this._viewports[e]}getFrameExtents(){return this._frameExtents}dispose(){this.map&&this.map.dispose(),this.mapPass&&this.mapPass.dispose()}copy(e){return this.camera=e.camera.clone(),this.intensity=e.intensity,this.bias=e.bias,this.radius=e.radius,this.autoUpdate=e.autoUpdate,this.needsUpdate=e.needsUpdate,this.normalBias=e.normalBias,this.blurSamples=e.blurSamples,this.mapSize.copy(e.mapSize),this.biasNode=e.biasNode,this}clone(){return new this.constructor().copy(this)}toJSON(){const e={};return this.intensity!==1&&(e.intensity=this.intensity),this.bias!==0&&(e.bias=this.bias),this.normalBias!==0&&(e.normalBias=this.normalBias),this.radius!==1&&(e.radius=this.radius),(this.mapSize.x!==512||this.mapSize.y!==512)&&(e.mapSize=this.mapSize.toArray()),e.camera=this.camera.toJSON(!1).object,delete e.camera.matrix,e}}const us=new B,fs=new ir,un=new B;class Xf extends It{constructor(){super(),this.isCamera=!0,this.type="Camera",this.matrixWorldInverse=new ht,this.projectionMatrix=new ht,this.projectionMatrixInverse=new ht,this.coordinateSystem=mn,this._reversedDepth=!1}get reversedDepth(){return this._reversedDepth}copy(e,t){return super.copy(e,t),this.matrixWorldInverse.copy(e.matrixWorldInverse),this.projectionMatrix.copy(e.projectionMatrix),this.projectionMatrixInverse.copy(e.projectionMatrixInverse),this.coordinateSystem=e.coordinateSystem,this}getWorldDirection(e){return super.getWorldDirection(e).negate()}updateMatrixWorld(e){super.updateMatrixWorld(e),this.matrixWorld.decompose(us,fs,un),un.x===1&&un.y===1&&un.z===1?this.matrixWorldInverse.copy(this.matrixWorld).invert():this.matrixWorldInverse.compose(us,fs,un.set(1,1,1)).invert()}updateWorldMatrix(e,t,i=!1){super.updateWorldMatrix(e,t,i),this.matrixWorld.decompose(us,fs,un),un.x===1&&un.y===1&&un.z===1?this.matrixWorldInverse.copy(this.matrixWorld).invert():this.matrixWorldInverse.compose(us,fs,un.set(1,1,1)).invert()}clone(){return new this.constructor().copy(this)}}const Wn=new B,su=new Ve,au=new Ve;class qt extends Xf{constructor(e=50,t=1,i=.1,r=2e3){super(),this.isPerspectiveCamera=!0,this.type="PerspectiveCamera",this.fov=e,this.zoom=1,this.near=i,this.far=r,this.focus=10,this.aspect=t,this.view=null,this.filmGauge=35,this.filmOffset=0,this.updateProjectionMatrix()}copy(e,t){return super.copy(e,t),this.fov=e.fov,this.zoom=e.zoom,this.near=e.near,this.far=e.far,this.focus=e.focus,this.aspect=e.aspect,this.view=e.view===null?null:Object.assign({},e.view),this.filmGauge=e.filmGauge,this.filmOffset=e.filmOffset,this}setFocalLength(e){const t=.5*this.getFilmHeight()/e;this.fov=ko*2*Math.atan(t),this.updateProjectionMatrix()}getFocalLength(){const e=Math.tan(ma*.5*this.fov);return .5*this.getFilmHeight()/e}getEffectiveFOV(){return ko*2*Math.atan(Math.tan(ma*.5*this.fov)/this.zoom)}getFilmWidth(){return this.filmGauge*Math.min(this.aspect,1)}getFilmHeight(){return this.filmGauge/Math.max(this.aspect,1)}getViewBounds(e,t,i){Wn.set(-1,-1,.5).applyMatrix4(this.projectionMatrixInverse),t.set(Wn.x,Wn.y).multiplyScalar(-e/Wn.z),Wn.set(1,1,.5).applyMatrix4(this.projectionMatrixInverse),i.set(Wn.x,Wn.y).multiplyScalar(-e/Wn.z)}getViewSize(e,t){return this.getViewBounds(e,su,au),t.subVectors(au,su)}setViewOffset(e,t,i,r,s,a){this.aspect=e/t,this.view===null&&(this.view={enabled:!0,fullWidth:1,fullHeight:1,offsetX:0,offsetY:0,width:1,height:1}),this.view.enabled=!0,this.view.fullWidth=e,this.view.fullHeight=t,this.view.offsetX=i,this.view.offsetY=r,this.view.width=s,this.view.height=a,this.updateProjectionMatrix()}clearViewOffset(){this.view!==null&&(this.view.enabled=!1),this.updateProjectionMatrix()}updateProjectionMatrix(){const e=this.near;let t=e*Math.tan(ma*.5*this.fov)/this.zoom,i=2*t,r=this.aspect*i,s=-.5*r;const a=this.view;if(this.view!==null&&this.view.enabled){const l=a.fullWidth,c=a.fullHeight;s+=a.offsetX*r/l,t-=a.offsetY*i/c,r*=a.width/l,i*=a.height/c}const o=this.filmOffset;o!==0&&(s+=e*o/this.getFilmWidth()),this.projectionMatrix.makePerspective(s,s+r,t,t-i,e,this.far,this.coordinateSystem,this.reversedDepth),this.projectionMatrixInverse.copy(this.projectionMatrix).invert()}toJSON(e){const t=super.toJSON(e);return t.object.fov=this.fov,t.object.zoom=this.zoom,t.object.near=this.near,t.object.far=this.far,t.object.focus=this.focus,t.object.aspect=this.aspect,this.view!==null&&(t.object.view=Object.assign({},this.view)),t.object.filmGauge=this.filmGauge,t.object.filmOffset=this.filmOffset,t}}class X_ extends Wf{constructor(){super(new qt(90,1,.5,500)),this.isPointLightShadow=!0}}class q_ extends Rl{constructor(e,t,i=0,r=2){super(e,t),this.isPointLight=!0,this.type="PointLight",this.distance=i,this.decay=r,this.shadow=new X_}get power(){return this.intensity*4*Math.PI}set power(e){this.intensity=e/(4*Math.PI)}dispose(){super.dispose(),this.shadow.dispose()}copy(e,t){return super.copy(e,t),this.distance=e.distance,this.decay=e.decay,this.shadow=e.shadow.clone(),this}toJSON(e){const t=super.toJSON(e);return t.object.distance=this.distance,t.object.decay=this.decay,t.object.shadow=this.shadow.toJSON(),t}}class Cl extends Xf{constructor(e=-1,t=1,i=1,r=-1,s=.1,a=2e3){super(),this.isOrthographicCamera=!0,this.type="OrthographicCamera",this.zoom=1,this.view=null,this.left=e,this.right=t,this.top=i,this.bottom=r,this.near=s,this.far=a,this.updateProjectionMatrix()}copy(e,t){return super.copy(e,t),this.left=e.left,this.right=e.right,this.top=e.top,this.bottom=e.bottom,this.near=e.near,this.far=e.far,this.zoom=e.zoom,this.view=e.view===null?null:Object.assign({},e.view),this}setViewOffset(e,t,i,r,s,a){this.view===null&&(this.view={enabled:!0,fullWidth:1,fullHeight:1,offsetX:0,offsetY:0,width:1,height:1}),this.view.enabled=!0,this.view.fullWidth=e,this.view.fullHeight=t,this.view.offsetX=i,this.view.offsetY=r,this.view.width=s,this.view.height=a,this.updateProjectionMatrix()}clearViewOffset(){this.view!==null&&(this.view.enabled=!1),this.updateProjectionMatrix()}updateProjectionMatrix(){const e=(this.right-this.left)/(2*this.zoom),t=(this.top-this.bottom)/(2*this.zoom),i=(this.right+this.left)/2,r=(this.top+this.bottom)/2;let s=i-e,a=i+e,o=r+t,l=r-t;if(this.view!==null&&this.view.enabled){const c=(this.right-this.left)/this.view.fullWidth/this.zoom,u=(this.top-this.bottom)/this.view.fullHeight/this.zoom;s+=c*this.view.offsetX,a=s+c*this.view.width,o-=u*this.view.offsetY,l=o-u*this.view.height}this.projectionMatrix.makeOrthographic(s,a,o,l,this.near,this.far,this.coordinateSystem,this.reversedDepth),this.projectionMatrixInverse.copy(this.projectionMatrix).invert()}toJSON(e){const t=super.toJSON(e);return t.object.zoom=this.zoom,t.object.left=this.left,t.object.right=this.right,t.object.top=this.top,t.object.bottom=this.bottom,t.object.near=this.near,t.object.far=this.far,this.view!==null&&(t.object.view=Object.assign({},this.view)),t}}class Y_ extends Wf{constructor(){super(new Cl(-5,5,5,-5,.5,500)),this.isDirectionalLightShadow=!0}}class $_ extends Rl{constructor(e,t){super(e,t),this.isDirectionalLight=!0,this.type="DirectionalLight",this.position.copy(It.DEFAULT_UP),this.updateMatrix(),this.target=new It,this.shadow=new Y_}dispose(){super.dispose(),this.shadow.dispose()}copy(e){return super.copy(e),this.target=e.target.clone(),this.shadow=e.shadow.clone(),this}toJSON(e){const t=super.toJSON(e);return t.object.shadow=this.shadow.toJSON(),t.object.target=this.target.uuid,t}}class K_ extends Rl{constructor(e,t){super(e,t),this.isAmbientLight=!0,this.type="AmbientLight"}}const Vi=-90,Gi=1;class Z_ extends It{constructor(e,t,i){super(),this.type="CubeCamera",this.renderTarget=i,this.coordinateSystem=null,this.activeMipmapLevel=0;const r=new qt(Vi,Gi,e,t);r.layers=this.layers,this.add(r);const s=new qt(Vi,Gi,e,t);s.layers=this.layers,this.add(s);const a=new qt(Vi,Gi,e,t);a.layers=this.layers,this.add(a);const o=new qt(Vi,Gi,e,t);o.layers=this.layers,this.add(o);const l=new qt(Vi,Gi,e,t);l.layers=this.layers,this.add(l);const c=new qt(Vi,Gi,e,t);c.layers=this.layers,this.add(c)}updateCoordinateSystem(){const e=this.coordinateSystem,t=this.children.concat(),[i,r,s,a,o,l]=t;for(const c of t)this.remove(c);if(e===mn)i.up.set(0,1,0),i.lookAt(1,0,0),r.up.set(0,1,0),r.lookAt(-1,0,0),s.up.set(0,0,-1),s.lookAt(0,1,0),a.up.set(0,0,1),a.lookAt(0,-1,0),o.up.set(0,1,0),o.lookAt(0,0,1),l.up.set(0,1,0),l.lookAt(0,0,-1);else if(e===Dr)i.up.set(0,-1,0),i.lookAt(-1,0,0),r.up.set(0,-1,0),r.lookAt(1,0,0),s.up.set(0,0,1),s.lookAt(0,1,0),a.up.set(0,0,-1),a.lookAt(0,-1,0),o.up.set(0,-1,0),o.lookAt(0,0,1),l.up.set(0,-1,0),l.lookAt(0,0,-1);else throw new Error("THREE.CubeCamera.updateCoordinateSystem(): Invalid coordinate system: "+e);for(const c of t)this.add(c),c.updateMatrixWorld()}update(e,t){this.parent===null&&this.updateMatrixWorld();const{renderTarget:i,activeMipmapLevel:r}=this;this.coordinateSystem!==e.coordinateSystem&&(this.coordinateSystem=e.coordinateSystem,this.updateCoordinateSystem());const[s,a,o,l,c,u]=this.children,h=e.getRenderTarget(),d=e.getActiveCubeFace(),m=e.getActiveMipmapLevel(),x=e.xr.enabled;e.xr.enabled=!1;const S=i.texture.generateMipmaps;i.texture.generateMipmaps=!1;let p=!1;e.isWebGLRenderer===!0?p=e.state.buffers.depth.getReversed():p=e.reversedDepthBuffer,e.setRenderTarget(i,0,r),p&&e.autoClear===!1&&e.clearDepth(),e.render(t,s),e.setRenderTarget(i,1,r),p&&e.autoClear===!1&&e.clearDepth(),e.render(t,a),e.setRenderTarget(i,2,r),p&&e.autoClear===!1&&e.clearDepth(),e.render(t,o),e.setRenderTarget(i,3,r),p&&e.autoClear===!1&&e.clearDepth(),e.render(t,l),e.setRenderTarget(i,4,r),p&&e.autoClear===!1&&e.clearDepth(),e.render(t,c),i.texture.generateMipmaps=S,e.setRenderTarget(i,5,r),p&&e.autoClear===!1&&e.clearDepth(),e.render(t,u),e.setRenderTarget(h,d,m),e.xr.enabled=x,i.texture.needsPMREMUpdate=!0}}class J_ extends qt{constructor(e=[]){super(),this.isArrayCamera=!0,this.isMultiViewCamera=!1,this.cameras=e}}class Q_{constructor(e=!0){this.autoStart=e,this.startTime=0,this.oldTime=0,this.elapsedTime=0,this.running=!1,De("Clock: This module has been deprecated. Please use THREE.Timer instead.")}start(){this.startTime=performance.now(),this.oldTime=this.startTime,this.elapsedTime=0,this.running=!0}stop(){this.getElapsedTime(),this.running=!1,this.autoStart=!1}getElapsedTime(){return this.getDelta(),this.elapsedTime}getDelta(){let e=0;if(this.autoStart&&!this.running)return this.start(),0;if(this.running){const t=performance.now();e=(t-this.oldTime)/1e3,this.oldTime=t,this.elapsedTime+=e}return e}}const rc=class rc{constructor(e,t,i,r){this.elements=[1,0,0,1],e!==void 0&&this.set(e,t,i,r)}identity(){return this.set(1,0,0,1),this}fromArray(e,t=0){for(let i=0;i<4;i++)this.elements[i]=e[i+t];return this}set(e,t,i,r){const s=this.elements;return s[0]=e,s[2]=t,s[1]=i,s[3]=r,this}};rc.prototype.isMatrix2=!0;let ou=rc;function lu(n,e,t,i){const r=j_(i);switch(t){case Df:return n*e;case If:return n*e/r.components*r.byteLength;case vl:return n*e/r.components*r.byteLength;case Mi:return n*e*2/r.components*r.byteLength;case Sl:return n*e*2/r.components*r.byteLength;case Lf:return n*e*3/r.components*r.byteLength;case nn:return n*e*4/r.components*r.byteLength;case Ml:return n*e*4/r.components*r.byteLength;case bs:case Ts:return Math.floor((n+3)/4)*Math.floor((e+3)/4)*8;case As:case ws:return Math.floor((n+3)/4)*Math.floor((e+3)/4)*16;case ho:case mo:return Math.max(n,16)*Math.max(e,8)/4;case fo:case po:return Math.max(n,8)*Math.max(e,8)/2;case _o:case go:case vo:case So:return Math.floor((n+3)/4)*Math.floor((e+3)/4)*8;case xo:case Is:case Mo:return Math.floor((n+3)/4)*Math.floor((e+3)/4)*16;case Eo:return Math.floor((n+3)/4)*Math.floor((e+3)/4)*16;case yo:return Math.floor((n+4)/5)*Math.floor((e+3)/4)*16;case bo:return Math.floor((n+4)/5)*Math.floor((e+4)/5)*16;case To:return Math.floor((n+5)/6)*Math.floor((e+4)/5)*16;case Ao:return Math.floor((n+5)/6)*Math.floor((e+5)/6)*16;case wo:return Math.floor((n+7)/8)*Math.floor((e+4)/5)*16;case Ro:return Math.floor((n+7)/8)*Math.floor((e+5)/6)*16;case Co:return Math.floor((n+7)/8)*Math.floor((e+7)/8)*16;case Po:return Math.floor((n+9)/10)*Math.floor((e+4)/5)*16;case Do:return Math.floor((n+9)/10)*Math.floor((e+5)/6)*16;case Lo:return Math.floor((n+9)/10)*Math.floor((e+7)/8)*16;case Io:return Math.floor((n+9)/10)*Math.floor((e+9)/10)*16;case Uo:return Math.floor((n+11)/12)*Math.floor((e+9)/10)*16;case No:return Math.floor((n+11)/12)*Math.floor((e+11)/12)*16;case Oo:case Fo:case Bo:return Math.ceil(n/4)*Math.ceil(e/4)*16;case zo:case Ho:return Math.ceil(n/4)*Math.ceil(e/4)*8;case Us:case Vo:return Math.ceil(n/4)*Math.ceil(e/4)*16}throw new Error(`Unable to determine texture byte length for ${t} format.`)}function j_(n){switch(n){case Yt:case wf:return{byteLength:1,components:1};case Cr:case Rf:case In:return{byteLength:2,components:1};case gl:case xl:return{byteLength:2,components:4};case vn:case _l:case pn:return{byteLength:4,components:1};case Cf:case Pf:return{byteLength:4,components:3}}throw new Error(`THREE.TextureUtils: Unknown texture type ${n}.`)}typeof __THREE_DEVTOOLS__<"u"&&__THREE_DEVTOOLS__.dispatchEvent(new CustomEvent("register",{detail:{revision:ml}}));typeof window<"u"&&(window.__THREE__?De("WARNING: Multiple instances of Three.js being imported."):window.__THREE__=ml);function qf(){let n=null,e=!1,t=null,i=null;function r(s,a){t(s,a),i=n.requestAnimationFrame(r)}return{start:function(){e!==!0&&t!==null&&n!==null&&(i=n.requestAnimationFrame(r),e=!0)},stop:function(){n!==null&&n.cancelAnimationFrame(i),e=!1},setAnimationLoop:function(s){t=s},setContext:function(s){n=s}}}function eg(n){const e=new WeakMap;function t(o,l){const c=o.array,u=o.usage,h=c.byteLength,d=n.createBuffer();n.bindBuffer(l,d),n.bufferData(l,c,u),o.onUploadCallback();let m;if(c instanceof Float32Array)m=n.FLOAT;else if(typeof Float16Array<"u"&&c instanceof Float16Array)m=n.HALF_FLOAT;else if(c instanceof Uint16Array)o.isFloat16BufferAttribute?m=n.HALF_FLOAT:m=n.UNSIGNED_SHORT;else if(c instanceof Int16Array)m=n.SHORT;else if(c instanceof Uint32Array)m=n.UNSIGNED_INT;else if(c instanceof Int32Array)m=n.INT;else if(c instanceof Int8Array)m=n.BYTE;else if(c instanceof Uint8Array)m=n.UNSIGNED_BYTE;else if(c instanceof Uint8ClampedArray)m=n.UNSIGNED_BYTE;else throw new Error("THREE.WebGLAttributes: Unsupported buffer data format: "+c);return{buffer:d,type:m,bytesPerElement:c.BYTES_PER_ELEMENT,version:o.version,size:h}}function i(o,l,c){const u=l.array,h=l.updateRanges;if(n.bindBuffer(c,o),h.length===0)n.bufferSubData(c,0,u);else{h.sort((m,x)=>m.start-x.start);let d=0;for(let m=1;m<h.length;m++){const x=h[d],S=h[m];S.start<=x.start+x.count+1?x.count=Math.max(x.count,S.start+S.count-x.start):(++d,h[d]=S)}h.length=d+1;for(let m=0,x=h.length;m<x;m++){const S=h[m];n.bufferSubData(c,S.start*u.BYTES_PER_ELEMENT,u,S.start,S.count)}l.clearUpdateRanges()}l.onUploadCallback()}function r(o){return o.isInterleavedBufferAttribute&&(o=o.data),e.get(o)}function s(o){o.isInterleavedBufferAttribute&&(o=o.data);const l=e.get(o);l&&(n.deleteBuffer(l.buffer),e.delete(o))}function a(o,l){if(o.isInterleavedBufferAttribute&&(o=o.data),o.isGLBufferAttribute){const u=e.get(o);(!u||u.version<o.version)&&e.set(o,{buffer:o.buffer,type:o.type,bytesPerElement:o.elementSize,version:o.version});return}const c=e.get(o);if(c===void 0)e.set(o,t(o,l));else if(c.version<o.version){if(c.size!==o.array.byteLength)throw new Error("THREE.WebGLAttributes: The size of the buffer attribute's array buffer does not match the original size. Resizing buffer attributes is not supported.");i(c.buffer,o,l),c.version=o.version}}return{get:r,remove:s,update:a}}var tg=`#ifdef USE_ALPHAHASH
	if ( diffuseColor.a < getAlphaHashThreshold( vPosition ) ) discard;
#endif`,ng=`#ifdef USE_ALPHAHASH
	const float ALPHA_HASH_SCALE = 0.05;
	float hash2D( vec2 value ) {
		return fract( 1.0e4 * sin( 17.0 * value.x + 0.1 * value.y ) * ( 0.1 + abs( sin( 13.0 * value.y + value.x ) ) ) );
	}
	float hash3D( vec3 value ) {
		return hash2D( vec2( hash2D( value.xy ), value.z ) );
	}
	float getAlphaHashThreshold( vec3 position ) {
		float maxDeriv = max(
			length( dFdx( position.xyz ) ),
			length( dFdy( position.xyz ) )
		);
		float pixScale = 1.0 / ( ALPHA_HASH_SCALE * maxDeriv );
		vec2 pixScales = vec2(
			exp2( floor( log2( pixScale ) ) ),
			exp2( ceil( log2( pixScale ) ) )
		);
		vec2 alpha = vec2(
			hash3D( floor( pixScales.x * position.xyz ) ),
			hash3D( floor( pixScales.y * position.xyz ) )
		);
		float lerpFactor = fract( log2( pixScale ) );
		float x = ( 1.0 - lerpFactor ) * alpha.x + lerpFactor * alpha.y;
		float a = min( lerpFactor, 1.0 - lerpFactor );
		vec3 cases = vec3(
			x * x / ( 2.0 * a * ( 1.0 - a ) ),
			( x - 0.5 * a ) / ( 1.0 - a ),
			1.0 - ( ( 1.0 - x ) * ( 1.0 - x ) / ( 2.0 * a * ( 1.0 - a ) ) )
		);
		float threshold = ( x < ( 1.0 - a ) )
			? ( ( x < a ) ? cases.x : cases.y )
			: cases.z;
		return clamp( threshold , 1.0e-6, 1.0 );
	}
#endif`,ig=`#ifdef USE_ALPHAMAP
	diffuseColor.a *= texture2D( alphaMap, vAlphaMapUv ).g;
#endif`,rg=`#ifdef USE_ALPHAMAP
	uniform sampler2D alphaMap;
#endif`,sg=`#ifdef USE_ALPHATEST
	#ifdef ALPHA_TO_COVERAGE
	diffuseColor.a = smoothstep( alphaTest, alphaTest + fwidth( diffuseColor.a ), diffuseColor.a );
	if ( diffuseColor.a == 0.0 ) discard;
	#else
	if ( diffuseColor.a < alphaTest ) discard;
	#endif
#endif`,ag=`#ifdef USE_ALPHATEST
	uniform float alphaTest;
#endif`,og=`#ifdef USE_AOMAP
	float ambientOcclusion = ( texture2D( aoMap, vAoMapUv ).r - 1.0 ) * aoMapIntensity + 1.0;
	reflectedLight.indirectDiffuse *= ambientOcclusion;
	#if defined( USE_CLEARCOAT ) 
		clearcoatSpecularIndirect *= ambientOcclusion;
	#endif
	#if defined( USE_SHEEN ) 
		sheenSpecularIndirect *= ambientOcclusion;
	#endif
	#if defined( USE_ENVMAP ) && defined( STANDARD )
		float dotNV = saturate( dot( geometryNormal, geometryViewDir ) );
		reflectedLight.indirectSpecular *= computeSpecularOcclusion( dotNV, ambientOcclusion, material.roughness );
	#endif
#endif`,lg=`#ifdef USE_AOMAP
	uniform sampler2D aoMap;
	uniform float aoMapIntensity;
#endif`,cg=`#ifdef USE_BATCHING
	#if ! defined( GL_ANGLE_multi_draw )
	#define gl_DrawID _gl_DrawID
	uniform int _gl_DrawID;
	#endif
	uniform highp sampler2D batchingTexture;
	uniform highp usampler2D batchingIdTexture;
	mat4 getBatchingMatrix( const in float i ) {
		int size = textureSize( batchingTexture, 0 ).x;
		int j = int( i ) * 4;
		int x = j % size;
		int y = j / size;
		vec4 v1 = texelFetch( batchingTexture, ivec2( x, y ), 0 );
		vec4 v2 = texelFetch( batchingTexture, ivec2( x + 1, y ), 0 );
		vec4 v3 = texelFetch( batchingTexture, ivec2( x + 2, y ), 0 );
		vec4 v4 = texelFetch( batchingTexture, ivec2( x + 3, y ), 0 );
		return mat4( v1, v2, v3, v4 );
	}
	float getIndirectIndex( const in int i ) {
		int size = textureSize( batchingIdTexture, 0 ).x;
		int x = i % size;
		int y = i / size;
		return float( texelFetch( batchingIdTexture, ivec2( x, y ), 0 ).r );
	}
#endif
#ifdef USE_BATCHING_COLOR
	uniform sampler2D batchingColorTexture;
	vec4 getBatchingColor( const in float i ) {
		int size = textureSize( batchingColorTexture, 0 ).x;
		int j = int( i );
		int x = j % size;
		int y = j / size;
		return texelFetch( batchingColorTexture, ivec2( x, y ), 0 );
	}
#endif`,ug=`#ifdef USE_BATCHING
	mat4 batchingMatrix = getBatchingMatrix( getIndirectIndex( gl_DrawID ) );
#endif`,fg=`vec3 transformed = vec3( position );
#ifdef USE_ALPHAHASH
	vPosition = vec3( position );
#endif`,dg=`vec3 objectNormal = vec3( normal );
#ifdef USE_TANGENT
	vec3 objectTangent = vec3( tangent.xyz );
#endif`,hg=`float G_BlinnPhong_Implicit( ) {
	return 0.25;
}
float D_BlinnPhong( const in float shininess, const in float dotNH ) {
	return RECIPROCAL_PI * ( shininess * 0.5 + 1.0 ) * pow( dotNH, shininess );
}
vec3 BRDF_BlinnPhong( const in vec3 lightDir, const in vec3 viewDir, const in vec3 normal, const in vec3 specularColor, const in float shininess ) {
	vec3 halfDir = normalize( lightDir + viewDir );
	float dotNH = saturate( dot( normal, halfDir ) );
	float dotVH = saturate( dot( viewDir, halfDir ) );
	vec3 F = F_Schlick( specularColor, 1.0, dotVH );
	float G = G_BlinnPhong_Implicit( );
	float D = D_BlinnPhong( shininess, dotNH );
	return F * ( G * D );
} // validated`,pg=`#ifdef USE_IRIDESCENCE
	const mat3 XYZ_TO_REC709 = mat3(
		 3.2404542, -0.9692660,  0.0556434,
		-1.5371385,  1.8760108, -0.2040259,
		-0.4985314,  0.0415560,  1.0572252
	);
	vec3 Fresnel0ToIor( vec3 fresnel0 ) {
		vec3 sqrtF0 = sqrt( fresnel0 );
		return ( vec3( 1.0 ) + sqrtF0 ) / ( vec3( 1.0 ) - sqrtF0 );
	}
	vec3 IorToFresnel0( vec3 transmittedIor, float incidentIor ) {
		return pow2( ( transmittedIor - vec3( incidentIor ) ) / ( transmittedIor + vec3( incidentIor ) ) );
	}
	float IorToFresnel0( float transmittedIor, float incidentIor ) {
		return pow2( ( transmittedIor - incidentIor ) / ( transmittedIor + incidentIor ));
	}
	vec3 evalSensitivity( float OPD, vec3 shift ) {
		float phase = 2.0 * PI * OPD * 1.0e-9;
		vec3 val = vec3( 5.4856e-13, 4.4201e-13, 5.2481e-13 );
		vec3 pos = vec3( 1.6810e+06, 1.7953e+06, 2.2084e+06 );
		vec3 var = vec3( 4.3278e+09, 9.3046e+09, 6.6121e+09 );
		vec3 xyz = val * sqrt( 2.0 * PI * var ) * cos( pos * phase + shift ) * exp( - pow2( phase ) * var );
		xyz.x += 9.7470e-14 * sqrt( 2.0 * PI * 4.5282e+09 ) * cos( 2.2399e+06 * phase + shift[ 0 ] ) * exp( - 4.5282e+09 * pow2( phase ) );
		xyz /= 1.0685e-7;
		vec3 rgb = XYZ_TO_REC709 * xyz;
		return rgb;
	}
	vec3 evalIridescence( float outsideIOR, float eta2, float cosTheta1, float thinFilmThickness, vec3 baseF0 ) {
		vec3 I;
		float iridescenceIOR = mix( outsideIOR, eta2, smoothstep( 0.0, 0.03, thinFilmThickness ) );
		float sinTheta2Sq = pow2( outsideIOR / iridescenceIOR ) * ( 1.0 - pow2( cosTheta1 ) );
		float cosTheta2Sq = 1.0 - sinTheta2Sq;
		if ( cosTheta2Sq < 0.0 ) {
			return vec3( 1.0 );
		}
		float cosTheta2 = sqrt( cosTheta2Sq );
		float R0 = IorToFresnel0( iridescenceIOR, outsideIOR );
		float R12 = F_Schlick( R0, 1.0, cosTheta1 );
		float T121 = 1.0 - R12;
		float phi12 = 0.0;
		if ( iridescenceIOR < outsideIOR ) phi12 = PI;
		float phi21 = PI - phi12;
		vec3 baseIOR = Fresnel0ToIor( clamp( baseF0, 0.0, 0.9999 ) );		vec3 R1 = IorToFresnel0( baseIOR, iridescenceIOR );
		vec3 R23 = F_Schlick( R1, 1.0, cosTheta2 );
		vec3 phi23 = vec3( 0.0 );
		if ( baseIOR[ 0 ] < iridescenceIOR ) phi23[ 0 ] = PI;
		if ( baseIOR[ 1 ] < iridescenceIOR ) phi23[ 1 ] = PI;
		if ( baseIOR[ 2 ] < iridescenceIOR ) phi23[ 2 ] = PI;
		float OPD = 2.0 * iridescenceIOR * thinFilmThickness * cosTheta2;
		vec3 phi = vec3( phi21 ) + phi23;
		vec3 R123 = clamp( R12 * R23, 1e-5, 0.9999 );
		vec3 r123 = sqrt( R123 );
		vec3 Rs = pow2( T121 ) * R23 / ( vec3( 1.0 ) - R123 );
		vec3 C0 = R12 + Rs;
		I = C0;
		vec3 Cm = Rs - T121;
		for ( int m = 1; m <= 2; ++ m ) {
			Cm *= r123;
			vec3 Sm = 2.0 * evalSensitivity( float( m ) * OPD, float( m ) * phi );
			I += Cm * Sm;
		}
		return max( I, vec3( 0.0 ) );
	}
#endif`,mg=`#ifdef USE_BUMPMAP
	uniform sampler2D bumpMap;
	uniform float bumpScale;
	vec2 dHdxy_fwd() {
		vec2 dSTdx = dFdx( vBumpMapUv );
		vec2 dSTdy = dFdy( vBumpMapUv );
		float Hll = bumpScale * texture2D( bumpMap, vBumpMapUv ).x;
		float dBx = bumpScale * texture2D( bumpMap, vBumpMapUv + dSTdx ).x - Hll;
		float dBy = bumpScale * texture2D( bumpMap, vBumpMapUv + dSTdy ).x - Hll;
		return vec2( dBx, dBy );
	}
	vec3 perturbNormalArb( vec3 surf_pos, vec3 surf_norm, vec2 dHdxy, float faceDirection ) {
		vec3 vSigmaX = normalize( dFdx( surf_pos.xyz ) );
		vec3 vSigmaY = normalize( dFdy( surf_pos.xyz ) );
		vec3 vN = surf_norm;
		vec3 R1 = cross( vSigmaY, vN );
		vec3 R2 = cross( vN, vSigmaX );
		float fDet = dot( vSigmaX, R1 ) * faceDirection;
		vec3 vGrad = sign( fDet ) * ( dHdxy.x * R1 + dHdxy.y * R2 );
		return normalize( abs( fDet ) * surf_norm - vGrad );
	}
#endif`,_g=`#if NUM_CLIPPING_PLANES > 0
	vec4 plane;
	#ifdef ALPHA_TO_COVERAGE
		float distanceToPlane, distanceGradient;
		float clipOpacity = 1.0;
		#pragma unroll_loop_start
		for ( int i = 0; i < UNION_CLIPPING_PLANES; i ++ ) {
			plane = clippingPlanes[ i ];
			distanceToPlane = - dot( vClipPosition, plane.xyz ) + plane.w;
			distanceGradient = fwidth( distanceToPlane ) / 2.0;
			clipOpacity *= smoothstep( - distanceGradient, distanceGradient, distanceToPlane );
			if ( clipOpacity == 0.0 ) discard;
		}
		#pragma unroll_loop_end
		#if UNION_CLIPPING_PLANES < NUM_CLIPPING_PLANES
			float unionClipOpacity = 1.0;
			#pragma unroll_loop_start
			for ( int i = UNION_CLIPPING_PLANES; i < NUM_CLIPPING_PLANES; i ++ ) {
				plane = clippingPlanes[ i ];
				distanceToPlane = - dot( vClipPosition, plane.xyz ) + plane.w;
				distanceGradient = fwidth( distanceToPlane ) / 2.0;
				unionClipOpacity *= 1.0 - smoothstep( - distanceGradient, distanceGradient, distanceToPlane );
			}
			#pragma unroll_loop_end
			clipOpacity *= 1.0 - unionClipOpacity;
		#endif
		diffuseColor.a *= clipOpacity;
		if ( diffuseColor.a == 0.0 ) discard;
	#else
		#pragma unroll_loop_start
		for ( int i = 0; i < UNION_CLIPPING_PLANES; i ++ ) {
			plane = clippingPlanes[ i ];
			if ( dot( vClipPosition, plane.xyz ) > plane.w ) discard;
		}
		#pragma unroll_loop_end
		#if UNION_CLIPPING_PLANES < NUM_CLIPPING_PLANES
			bool clipped = true;
			#pragma unroll_loop_start
			for ( int i = UNION_CLIPPING_PLANES; i < NUM_CLIPPING_PLANES; i ++ ) {
				plane = clippingPlanes[ i ];
				clipped = ( dot( vClipPosition, plane.xyz ) > plane.w ) && clipped;
			}
			#pragma unroll_loop_end
			if ( clipped ) discard;
		#endif
	#endif
#endif`,gg=`#if NUM_CLIPPING_PLANES > 0
	varying vec3 vClipPosition;
	uniform vec4 clippingPlanes[ NUM_CLIPPING_PLANES ];
#endif`,xg=`#if NUM_CLIPPING_PLANES > 0
	varying vec3 vClipPosition;
#endif`,vg=`#if NUM_CLIPPING_PLANES > 0
	vClipPosition = - mvPosition.xyz;
#endif`,Sg=`#if defined( USE_COLOR ) || defined( USE_COLOR_ALPHA )
	diffuseColor *= vColor;
#endif`,Mg=`#if defined( USE_COLOR ) || defined( USE_COLOR_ALPHA )
	varying vec4 vColor;
#endif`,Eg=`#if defined( USE_COLOR ) || defined( USE_COLOR_ALPHA ) || defined( USE_INSTANCING_COLOR ) || defined( USE_BATCHING_COLOR )
	varying vec4 vColor;
#endif`,yg=`#if defined( USE_COLOR ) || defined( USE_COLOR_ALPHA ) || defined( USE_INSTANCING_COLOR ) || defined( USE_BATCHING_COLOR )
	vColor = vec4( 1.0 );
#endif
#ifdef USE_COLOR_ALPHA
	vColor *= color;
#elif defined( USE_COLOR )
	vColor.rgb *= color;
#endif
#ifdef USE_INSTANCING_COLOR
	vColor.rgb *= instanceColor.rgb;
#endif
#ifdef USE_BATCHING_COLOR
	vColor *= getBatchingColor( getIndirectIndex( gl_DrawID ) );
#endif`,bg=`#define PI 3.141592653589793
#define PI2 6.283185307179586
#define PI_HALF 1.5707963267948966
#define RECIPROCAL_PI 0.3183098861837907
#define RECIPROCAL_PI2 0.15915494309189535
#define EPSILON 1e-6
#ifndef saturate
#define saturate( a ) clamp( a, 0.0, 1.0 )
#endif
#define whiteComplement( a ) ( 1.0 - saturate( a ) )
float pow2( const in float x ) { return x*x; }
vec3 pow2( const in vec3 x ) { return x*x; }
float pow3( const in float x ) { return x*x*x; }
float pow4( const in float x ) { float x2 = x*x; return x2*x2; }
float max3( const in vec3 v ) { return max( max( v.x, v.y ), v.z ); }
float average( const in vec3 v ) { return dot( v, vec3( 0.3333333 ) ); }
highp float rand( const in vec2 uv ) {
	const highp float a = 12.9898, b = 78.233, c = 43758.5453;
	highp float dt = dot( uv.xy, vec2( a,b ) ), sn = mod( dt, PI );
	return fract( sin( sn ) * c );
}
#ifdef HIGH_PRECISION
	float precisionSafeLength( vec3 v ) { return length( v ); }
#else
	float precisionSafeLength( vec3 v ) {
		float maxComponent = max3( abs( v ) );
		return length( v / maxComponent ) * maxComponent;
	}
#endif
struct IncidentLight {
	vec3 color;
	vec3 direction;
	bool visible;
};
struct ReflectedLight {
	vec3 directDiffuse;
	vec3 directSpecular;
	vec3 indirectDiffuse;
	vec3 indirectSpecular;
};
#ifdef USE_ALPHAHASH
	varying vec3 vPosition;
#endif
vec3 transformDirection( in vec3 dir, in mat4 matrix ) {
	return normalize( ( matrix * vec4( dir, 0.0 ) ).xyz );
}
#define inverseTransformDirection transformDirectionByInverseViewMatrix
vec3 transformNormalByInverseViewMatrix( in vec3 normal, in mat4 viewMatrix ) {
	return normalize( ( vec4( normal, 0.0 ) * viewMatrix ).xyz );
}
vec3 transformDirectionByInverseViewMatrix( in vec3 dir, in mat4 viewMatrix ) {
	return normalize( ( vec4( dir, 0.0 ) * viewMatrix ).xyz );
}
bool isPerspectiveMatrix( mat4 m ) {
	return m[ 2 ][ 3 ] == - 1.0;
}
vec2 equirectUv( in vec3 dir ) {
	float u = atan( dir.z, dir.x ) * RECIPROCAL_PI2 + 0.5;
	float v = asin( clamp( dir.y, - 1.0, 1.0 ) ) * RECIPROCAL_PI + 0.5;
	return vec2( u, v );
}
vec3 BRDF_Lambert( const in vec3 diffuseColor ) {
	return RECIPROCAL_PI * diffuseColor;
}
vec3 F_Schlick( const in vec3 f0, const in float f90, const in float dotVH ) {
	float fresnel = exp2( ( - 5.55473 * dotVH - 6.98316 ) * dotVH );
	return f0 * ( 1.0 - fresnel ) + ( f90 * fresnel );
}
float F_Schlick( const in float f0, const in float f90, const in float dotVH ) {
	float fresnel = exp2( ( - 5.55473 * dotVH - 6.98316 ) * dotVH );
	return f0 * ( 1.0 - fresnel ) + ( f90 * fresnel );
} // validated`,Tg=`#ifdef ENVMAP_TYPE_CUBE_UV
	#define cubeUV_minMipLevel 4.0
	#define cubeUV_minTileSize 16.0
	float getFace( vec3 direction ) {
		vec3 absDirection = abs( direction );
		float face = - 1.0;
		if ( absDirection.x > absDirection.z ) {
			if ( absDirection.x > absDirection.y )
				face = direction.x > 0.0 ? 0.0 : 3.0;
			else
				face = direction.y > 0.0 ? 1.0 : 4.0;
		} else {
			if ( absDirection.z > absDirection.y )
				face = direction.z > 0.0 ? 2.0 : 5.0;
			else
				face = direction.y > 0.0 ? 1.0 : 4.0;
		}
		return face;
	}
	vec2 getUV( vec3 direction, float face ) {
		vec2 uv;
		if ( face == 0.0 ) {
			uv = vec2( direction.z, direction.y ) / abs( direction.x );
		} else if ( face == 1.0 ) {
			uv = vec2( - direction.x, - direction.z ) / abs( direction.y );
		} else if ( face == 2.0 ) {
			uv = vec2( - direction.x, direction.y ) / abs( direction.z );
		} else if ( face == 3.0 ) {
			uv = vec2( - direction.z, direction.y ) / abs( direction.x );
		} else if ( face == 4.0 ) {
			uv = vec2( - direction.x, direction.z ) / abs( direction.y );
		} else {
			uv = vec2( direction.x, direction.y ) / abs( direction.z );
		}
		return 0.5 * ( uv + 1.0 );
	}
	vec3 bilinearCubeUV( sampler2D envMap, vec3 direction, float mipInt ) {
		float face = getFace( direction );
		float filterInt = max( cubeUV_minMipLevel - mipInt, 0.0 );
		mipInt = max( mipInt, cubeUV_minMipLevel );
		float faceSize = exp2( mipInt );
		highp vec2 uv = getUV( direction, face ) * ( faceSize - 2.0 ) + 1.0;
		if ( face > 2.0 ) {
			uv.y += faceSize;
			face -= 3.0;
		}
		uv.x += face * faceSize;
		uv.x += filterInt * 3.0 * cubeUV_minTileSize;
		uv.y += 4.0 * ( exp2( CUBEUV_MAX_MIP ) - faceSize );
		uv.x *= CUBEUV_TEXEL_WIDTH;
		uv.y *= CUBEUV_TEXEL_HEIGHT;
		#ifdef texture2DGradEXT
			return texture2DGradEXT( envMap, uv, vec2( 0.0 ), vec2( 0.0 ) ).rgb;
		#else
			return texture2D( envMap, uv ).rgb;
		#endif
	}
	#define cubeUV_r0 1.0
	#define cubeUV_m0 - 2.0
	#define cubeUV_r1 0.8
	#define cubeUV_m1 - 1.0
	#define cubeUV_r4 0.4
	#define cubeUV_m4 2.0
	#define cubeUV_r5 0.305
	#define cubeUV_m5 3.0
	#define cubeUV_r6 0.21
	#define cubeUV_m6 4.0
	float roughnessToMip( float roughness ) {
		float mip = 0.0;
		if ( roughness >= cubeUV_r1 ) {
			mip = ( cubeUV_r0 - roughness ) * ( cubeUV_m1 - cubeUV_m0 ) / ( cubeUV_r0 - cubeUV_r1 ) + cubeUV_m0;
		} else if ( roughness >= cubeUV_r4 ) {
			mip = ( cubeUV_r1 - roughness ) * ( cubeUV_m4 - cubeUV_m1 ) / ( cubeUV_r1 - cubeUV_r4 ) + cubeUV_m1;
		} else if ( roughness >= cubeUV_r5 ) {
			mip = ( cubeUV_r4 - roughness ) * ( cubeUV_m5 - cubeUV_m4 ) / ( cubeUV_r4 - cubeUV_r5 ) + cubeUV_m4;
		} else if ( roughness >= cubeUV_r6 ) {
			mip = ( cubeUV_r5 - roughness ) * ( cubeUV_m6 - cubeUV_m5 ) / ( cubeUV_r5 - cubeUV_r6 ) + cubeUV_m5;
		} else {
			mip = - 2.0 * log2( 1.16 * roughness );		}
		return mip;
	}
	vec4 textureCubeUV( sampler2D envMap, vec3 sampleDir, float roughness ) {
		float mip = clamp( roughnessToMip( roughness ), cubeUV_m0, CUBEUV_MAX_MIP );
		float mipF = fract( mip );
		float mipInt = floor( mip );
		vec3 color0 = bilinearCubeUV( envMap, sampleDir, mipInt );
		if ( mipF == 0.0 ) {
			return vec4( color0, 1.0 );
		} else {
			vec3 color1 = bilinearCubeUV( envMap, sampleDir, mipInt + 1.0 );
			return vec4( mix( color0, color1, mipF ), 1.0 );
		}
	}
#endif`,Ag=`vec3 transformedNormal = objectNormal;
#ifdef USE_TANGENT
	vec3 transformedTangent = objectTangent;
#endif
#ifdef USE_BATCHING
	mat3 bm = mat3( batchingMatrix );
	transformedNormal /= vec3( dot( bm[ 0 ], bm[ 0 ] ), dot( bm[ 1 ], bm[ 1 ] ), dot( bm[ 2 ], bm[ 2 ] ) );
	transformedNormal = bm * transformedNormal;
	#ifdef USE_TANGENT
		transformedTangent = bm * transformedTangent;
	#endif
#endif
#ifdef USE_INSTANCING
	mat3 im = mat3( instanceMatrix );
	transformedNormal /= vec3( dot( im[ 0 ], im[ 0 ] ), dot( im[ 1 ], im[ 1 ] ), dot( im[ 2 ], im[ 2 ] ) );
	transformedNormal = im * transformedNormal;
	#ifdef USE_TANGENT
		transformedTangent = im * transformedTangent;
	#endif
#endif
transformedNormal = normalMatrix * transformedNormal;
#ifdef FLIP_SIDED
	transformedNormal = - transformedNormal;
#endif
#ifdef USE_TANGENT
	transformedTangent = ( modelViewMatrix * vec4( transformedTangent, 0.0 ) ).xyz;
#endif`,wg=`#ifdef USE_DISPLACEMENTMAP
	uniform sampler2D displacementMap;
	uniform float displacementScale;
	uniform float displacementBias;
#endif`,Rg=`#ifdef USE_DISPLACEMENTMAP
	transformed += normalize( objectNormal ) * ( texture2D( displacementMap, vDisplacementMapUv ).x * displacementScale + displacementBias );
#endif`,Cg=`#ifdef USE_EMISSIVEMAP
	vec4 emissiveColor = texture2D( emissiveMap, vEmissiveMapUv );
	#ifdef DECODE_VIDEO_TEXTURE_EMISSIVE
		emissiveColor = sRGBTransferEOTF( emissiveColor );
	#endif
	totalEmissiveRadiance *= emissiveColor.rgb;
#endif`,Pg=`#ifdef USE_EMISSIVEMAP
	uniform sampler2D emissiveMap;
#endif`,Dg="gl_FragColor = linearToOutputTexel( gl_FragColor );",Lg=`vec4 LinearTransferOETF( in vec4 value ) {
	return value;
}
vec4 sRGBTransferEOTF( in vec4 value ) {
	return vec4( mix( pow( value.rgb * 0.9478672986 + vec3( 0.0521327014 ), vec3( 2.4 ) ), value.rgb * 0.0773993808, vec3( lessThanEqual( value.rgb, vec3( 0.04045 ) ) ) ), value.a );
}
vec4 sRGBTransferOETF( in vec4 value ) {
	return vec4( mix( pow( value.rgb, vec3( 0.41666 ) ) * 1.055 - vec3( 0.055 ), value.rgb * 12.92, vec3( lessThanEqual( value.rgb, vec3( 0.0031308 ) ) ) ), value.a );
}`,Ig=`#ifdef USE_ENVMAP
	#ifdef ENV_WORLDPOS
		vec3 cameraToFrag;
		if ( isOrthographic ) {
			cameraToFrag = normalize( vec3( - viewMatrix[ 0 ][ 2 ], - viewMatrix[ 1 ][ 2 ], - viewMatrix[ 2 ][ 2 ] ) );
		} else {
			cameraToFrag = normalize( vWorldPosition - cameraPosition );
		}
		vec3 worldNormal = transformNormalByInverseViewMatrix( normal, viewMatrix );
		#ifdef ENVMAP_MODE_REFLECTION
			vec3 reflectVec = reflect( cameraToFrag, worldNormal );
		#else
			vec3 reflectVec = refract( cameraToFrag, worldNormal, refractionRatio );
		#endif
	#else
		vec3 reflectVec = vReflect;
	#endif
	#ifdef ENVMAP_TYPE_CUBE
		vec4 envColor = textureCube( envMap, envMapRotation * reflectVec );
		#ifdef ENVMAP_BLENDING_MULTIPLY
			outgoingLight = mix( outgoingLight, outgoingLight * envColor.xyz, specularStrength * reflectivity );
		#elif defined( ENVMAP_BLENDING_MIX )
			outgoingLight = mix( outgoingLight, envColor.xyz, specularStrength * reflectivity );
		#elif defined( ENVMAP_BLENDING_ADD )
			outgoingLight += envColor.xyz * specularStrength * reflectivity;
		#endif
	#endif
#endif`,Ug=`#ifdef USE_ENVMAP
	uniform float envMapIntensity;
	uniform mat3 envMapRotation;
	#ifdef ENVMAP_TYPE_CUBE
		uniform samplerCube envMap;
	#else
		uniform sampler2D envMap;
	#endif
#endif`,Ng=`#ifdef USE_ENVMAP
	uniform float reflectivity;
	#if defined( USE_BUMPMAP ) || defined( USE_NORMALMAP ) || defined( PHONG ) || defined( LAMBERT )
		#define ENV_WORLDPOS
	#endif
	#ifdef ENV_WORLDPOS
		varying vec3 vWorldPosition;
		uniform float refractionRatio;
	#else
		varying vec3 vReflect;
	#endif
#endif`,Og=`#ifdef USE_ENVMAP
	#if defined( USE_BUMPMAP ) || defined( USE_NORMALMAP ) || defined( PHONG ) || defined( LAMBERT )
		#define ENV_WORLDPOS
	#endif
	#ifdef ENV_WORLDPOS
		
		varying vec3 vWorldPosition;
	#else
		varying vec3 vReflect;
		uniform float refractionRatio;
	#endif
#endif`,Fg=`#ifdef USE_ENVMAP
	#ifdef ENV_WORLDPOS
		vWorldPosition = worldPosition.xyz;
	#else
		vec3 cameraToVertex;
		if ( isOrthographic ) {
			cameraToVertex = normalize( vec3( - viewMatrix[ 0 ][ 2 ], - viewMatrix[ 1 ][ 2 ], - viewMatrix[ 2 ][ 2 ] ) );
		} else {
			cameraToVertex = normalize( worldPosition.xyz - cameraPosition );
		}
		vec3 worldNormal = transformNormalByInverseViewMatrix( transformedNormal, viewMatrix );
		#ifdef ENVMAP_MODE_REFLECTION
			vReflect = reflect( cameraToVertex, worldNormal );
		#else
			vReflect = refract( cameraToVertex, worldNormal, refractionRatio );
		#endif
	#endif
#endif`,Bg=`#ifdef USE_FOG
	vFogDepth = - mvPosition.z;
#endif`,zg=`#ifdef USE_FOG
	varying float vFogDepth;
#endif`,Hg=`#ifdef USE_FOG
	#ifdef FOG_EXP2
		float fogFactor = 1.0 - exp( - fogDensity * fogDensity * vFogDepth * vFogDepth );
	#else
		float fogFactor = smoothstep( fogNear, fogFar, vFogDepth );
	#endif
	gl_FragColor.rgb = mix( gl_FragColor.rgb, fogColor, fogFactor );
#endif`,Vg=`#ifdef USE_FOG
	uniform vec3 fogColor;
	varying float vFogDepth;
	#ifdef FOG_EXP2
		uniform float fogDensity;
	#else
		uniform float fogNear;
		uniform float fogFar;
	#endif
#endif`,Gg=`#ifdef USE_GRADIENTMAP
	uniform sampler2D gradientMap;
#endif
vec3 getGradientIrradiance( vec3 normal, vec3 lightDirection ) {
	float dotNL = dot( normal, lightDirection );
	vec2 coord = vec2( dotNL * 0.5 + 0.5, 0.0 );
	#ifdef USE_GRADIENTMAP
		return vec3( texture2D( gradientMap, coord ).r );
	#else
		vec2 fw = fwidth( coord ) * 0.5;
		return mix( vec3( 0.7 ), vec3( 1.0 ), smoothstep( 0.7 - fw.x, 0.7 + fw.x, coord.x ) );
	#endif
}`,kg=`#ifdef USE_LIGHTMAP
	uniform sampler2D lightMap;
	uniform float lightMapIntensity;
#endif`,Wg=`LambertMaterial material;
material.diffuseColor = diffuseColor.rgb;
material.specularStrength = specularStrength;`,Xg=`varying vec3 vViewPosition;
struct LambertMaterial {
	vec3 diffuseColor;
	float specularStrength;
};
void RE_Direct_Lambert( const in IncidentLight directLight, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in LambertMaterial material, inout ReflectedLight reflectedLight ) {
	float dotNL = saturate( dot( geometryNormal, directLight.direction ) );
	vec3 irradiance = dotNL * directLight.color;
	reflectedLight.directDiffuse += irradiance * BRDF_Lambert( material.diffuseColor );
}
void RE_IndirectDiffuse_Lambert( const in vec3 irradiance, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in LambertMaterial material, inout ReflectedLight reflectedLight ) {
	reflectedLight.indirectDiffuse += irradiance * BRDF_Lambert( material.diffuseColor );
}
#define RE_Direct				RE_Direct_Lambert
#define RE_IndirectDiffuse		RE_IndirectDiffuse_Lambert`,qg=`uniform bool receiveShadow;
uniform vec3 ambientLightColor;
#if defined( USE_LIGHT_PROBES )
	uniform vec3 lightProbe[ 9 ];
#endif
vec3 shGetIrradianceAt( in vec3 normal, in vec3 shCoefficients[ 9 ] ) {
	float x = normal.x, y = normal.y, z = normal.z;
	vec3 result = shCoefficients[ 0 ] * 0.886227;
	result += shCoefficients[ 1 ] * 2.0 * 0.511664 * y;
	result += shCoefficients[ 2 ] * 2.0 * 0.511664 * z;
	result += shCoefficients[ 3 ] * 2.0 * 0.511664 * x;
	result += shCoefficients[ 4 ] * 2.0 * 0.429043 * x * y;
	result += shCoefficients[ 5 ] * 2.0 * 0.429043 * y * z;
	result += shCoefficients[ 6 ] * ( 0.743125 * z * z - 0.247708 );
	result += shCoefficients[ 7 ] * 2.0 * 0.429043 * x * z;
	result += shCoefficients[ 8 ] * 0.429043 * ( x * x - y * y );
	return result;
}
vec3 getLightProbeIrradiance( const in vec3 lightProbe[ 9 ], const in vec3 normal ) {
	vec3 worldNormal = transformNormalByInverseViewMatrix( normal, viewMatrix );
	vec3 irradiance = shGetIrradianceAt( worldNormal, lightProbe );
	return irradiance;
}
vec3 getAmbientLightIrradiance( const in vec3 ambientLightColor ) {
	vec3 irradiance = ambientLightColor;
	return irradiance;
}
float getDistanceAttenuation( const in float lightDistance, const in float cutoffDistance, const in float decayExponent ) {
	float distanceFalloff = 1.0 / max( pow( lightDistance, decayExponent ), 0.01 );
	if ( cutoffDistance > 0.0 ) {
		distanceFalloff *= pow2( saturate( 1.0 - pow4( lightDistance / cutoffDistance ) ) );
	}
	return distanceFalloff;
}
float getSpotAttenuation( const in float coneCosine, const in float penumbraCosine, const in float angleCosine ) {
	return smoothstep( coneCosine, penumbraCosine, angleCosine );
}
#if NUM_DIR_LIGHTS > 0
	struct DirectionalLight {
		vec3 direction;
		vec3 color;
	};
	uniform DirectionalLight directionalLights[ NUM_DIR_LIGHTS ];
	void getDirectionalLightInfo( const in DirectionalLight directionalLight, out IncidentLight light ) {
		light.color = directionalLight.color;
		light.direction = directionalLight.direction;
		light.visible = true;
	}
#endif
#if NUM_POINT_LIGHTS > 0
	struct PointLight {
		vec3 position;
		vec3 color;
		float distance;
		float decay;
	};
	uniform PointLight pointLights[ NUM_POINT_LIGHTS ];
	void getPointLightInfo( const in PointLight pointLight, const in vec3 geometryPosition, out IncidentLight light ) {
		vec3 lVector = pointLight.position - geometryPosition;
		light.direction = normalize( lVector );
		float lightDistance = length( lVector );
		light.color = pointLight.color;
		light.color *= getDistanceAttenuation( lightDistance, pointLight.distance, pointLight.decay );
		light.visible = ( light.color != vec3( 0.0 ) );
	}
#endif
#if NUM_SPOT_LIGHTS > 0
	struct SpotLight {
		vec3 position;
		vec3 direction;
		vec3 color;
		float distance;
		float decay;
		float coneCos;
		float penumbraCos;
	};
	uniform SpotLight spotLights[ NUM_SPOT_LIGHTS ];
	void getSpotLightInfo( const in SpotLight spotLight, const in vec3 geometryPosition, out IncidentLight light ) {
		vec3 lVector = spotLight.position - geometryPosition;
		light.direction = normalize( lVector );
		float angleCos = dot( light.direction, spotLight.direction );
		float spotAttenuation = getSpotAttenuation( spotLight.coneCos, spotLight.penumbraCos, angleCos );
		if ( spotAttenuation > 0.0 ) {
			float lightDistance = length( lVector );
			light.color = spotLight.color * spotAttenuation;
			light.color *= getDistanceAttenuation( lightDistance, spotLight.distance, spotLight.decay );
			light.visible = ( light.color != vec3( 0.0 ) );
		} else {
			light.color = vec3( 0.0 );
			light.visible = false;
		}
	}
#endif
#if NUM_RECT_AREA_LIGHTS > 0
	struct RectAreaLight {
		vec3 color;
		vec3 position;
		vec3 halfWidth;
		vec3 halfHeight;
	};
	uniform sampler2D ltc_1;	uniform sampler2D ltc_2;
	uniform RectAreaLight rectAreaLights[ NUM_RECT_AREA_LIGHTS ];
#endif
#if NUM_HEMI_LIGHTS > 0
	struct HemisphereLight {
		vec3 direction;
		vec3 skyColor;
		vec3 groundColor;
	};
	uniform HemisphereLight hemisphereLights[ NUM_HEMI_LIGHTS ];
	vec3 getHemisphereLightIrradiance( const in HemisphereLight hemiLight, const in vec3 normal ) {
		float dotNL = dot( normal, hemiLight.direction );
		float hemiDiffuseWeight = 0.5 * dotNL + 0.5;
		vec3 irradiance = mix( hemiLight.groundColor, hemiLight.skyColor, hemiDiffuseWeight );
		return irradiance;
	}
#endif
#include <lightprobes_pars_fragment>`,Yg=`#ifdef USE_ENVMAP
	vec3 getIBLIrradiance( const in vec3 normal ) {
		#ifdef ENVMAP_TYPE_CUBE_UV
			vec3 worldNormal = transformNormalByInverseViewMatrix( normal, viewMatrix );
			vec4 envMapColor = textureCubeUV( envMap, envMapRotation * worldNormal, 1.0 );
			return PI * envMapColor.rgb * envMapIntensity;
		#else
			return vec3( 0.0 );
		#endif
	}
	vec3 getIBLRadiance( const in vec3 viewDir, const in vec3 normal, const in float roughness ) {
		#ifdef ENVMAP_TYPE_CUBE_UV
			vec3 reflectVec = reflect( - viewDir, normal );
			reflectVec = normalize( mix( reflectVec, normal, pow4( roughness ) ) );
			reflectVec = transformDirectionByInverseViewMatrix( reflectVec, viewMatrix );
			vec4 envMapColor = textureCubeUV( envMap, envMapRotation * reflectVec, roughness );
			return envMapColor.rgb * envMapIntensity;
		#else
			return vec3( 0.0 );
		#endif
	}
	#ifdef USE_ANISOTROPY
		vec3 getIBLAnisotropyRadiance( const in vec3 viewDir, const in vec3 normal, const in float roughness, const in vec3 bitangent, const in float anisotropy ) {
			#ifdef ENVMAP_TYPE_CUBE_UV
				vec3 bentNormal = cross( bitangent, viewDir );
				bentNormal = normalize( cross( bentNormal, bitangent ) );
				bentNormal = normalize( mix( bentNormal, normal, pow2( pow2( 1.0 - anisotropy * ( 1.0 - roughness ) ) ) ) );
				return getIBLRadiance( viewDir, bentNormal, roughness );
			#else
				return vec3( 0.0 );
			#endif
		}
	#endif
#endif`,$g=`ToonMaterial material;
material.diffuseColor = diffuseColor.rgb;`,Kg=`varying vec3 vViewPosition;
struct ToonMaterial {
	vec3 diffuseColor;
};
void RE_Direct_Toon( const in IncidentLight directLight, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in ToonMaterial material, inout ReflectedLight reflectedLight ) {
	vec3 irradiance = getGradientIrradiance( geometryNormal, directLight.direction ) * directLight.color;
	reflectedLight.directDiffuse += irradiance * BRDF_Lambert( material.diffuseColor );
}
void RE_IndirectDiffuse_Toon( const in vec3 irradiance, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in ToonMaterial material, inout ReflectedLight reflectedLight ) {
	reflectedLight.indirectDiffuse += irradiance * BRDF_Lambert( material.diffuseColor );
}
#define RE_Direct				RE_Direct_Toon
#define RE_IndirectDiffuse		RE_IndirectDiffuse_Toon`,Zg=`BlinnPhongMaterial material;
material.diffuseColor = diffuseColor.rgb;
material.specularColor = specular;
material.specularShininess = shininess;
material.specularStrength = specularStrength;`,Jg=`varying vec3 vViewPosition;
struct BlinnPhongMaterial {
	vec3 diffuseColor;
	vec3 specularColor;
	float specularShininess;
	float specularStrength;
};
void RE_Direct_BlinnPhong( const in IncidentLight directLight, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in BlinnPhongMaterial material, inout ReflectedLight reflectedLight ) {
	float dotNL = saturate( dot( geometryNormal, directLight.direction ) );
	vec3 irradiance = dotNL * directLight.color;
	reflectedLight.directDiffuse += irradiance * BRDF_Lambert( material.diffuseColor );
	reflectedLight.directSpecular += irradiance * BRDF_BlinnPhong( directLight.direction, geometryViewDir, geometryNormal, material.specularColor, material.specularShininess ) * material.specularStrength;
}
void RE_IndirectDiffuse_BlinnPhong( const in vec3 irradiance, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in BlinnPhongMaterial material, inout ReflectedLight reflectedLight ) {
	reflectedLight.indirectDiffuse += irradiance * BRDF_Lambert( material.diffuseColor );
}
#define RE_Direct				RE_Direct_BlinnPhong
#define RE_IndirectDiffuse		RE_IndirectDiffuse_BlinnPhong`,Qg=`PhysicalMaterial material;
material.diffuseColor = diffuseColor.rgb;
material.diffuseContribution = diffuseColor.rgb * ( 1.0 - metalnessFactor );
material.metalness = metalnessFactor;
vec3 dxy = max( abs( dFdx( nonPerturbedNormal ) ), abs( dFdy( nonPerturbedNormal ) ) );
float geometryRoughness = max( max( dxy.x, dxy.y ), dxy.z );
material.roughness = max( roughnessFactor, 0.0525 );material.roughness += geometryRoughness;
material.roughness = min( material.roughness, 1.0 );
#ifdef IOR
	material.ior = ior;
	#ifdef USE_SPECULAR
		float specularIntensityFactor = specularIntensity;
		vec3 specularColorFactor = specularColor;
		#ifdef USE_SPECULAR_COLORMAP
			specularColorFactor *= texture2D( specularColorMap, vSpecularColorMapUv ).rgb;
		#endif
		#ifdef USE_SPECULAR_INTENSITYMAP
			specularIntensityFactor *= texture2D( specularIntensityMap, vSpecularIntensityMapUv ).a;
		#endif
		material.specularF90 = mix( specularIntensityFactor, 1.0, metalnessFactor );
	#else
		float specularIntensityFactor = 1.0;
		vec3 specularColorFactor = vec3( 1.0 );
		material.specularF90 = 1.0;
	#endif
	material.specularColor = min( pow2( ( material.ior - 1.0 ) / ( material.ior + 1.0 ) ) * specularColorFactor, vec3( 1.0 ) ) * specularIntensityFactor;
	material.specularColorBlended = mix( material.specularColor, diffuseColor.rgb, metalnessFactor );
#else
	material.specularColor = vec3( 0.04 );
	material.specularColorBlended = mix( material.specularColor, diffuseColor.rgb, metalnessFactor );
	material.specularF90 = 1.0;
#endif
#ifdef USE_CLEARCOAT
	material.clearcoat = clearcoat;
	material.clearcoatRoughness = clearcoatRoughness;
	material.clearcoatF0 = vec3( 0.04 );
	material.clearcoatF90 = 1.0;
	#ifdef USE_CLEARCOATMAP
		material.clearcoat *= texture2D( clearcoatMap, vClearcoatMapUv ).x;
	#endif
	#ifdef USE_CLEARCOAT_ROUGHNESSMAP
		material.clearcoatRoughness *= texture2D( clearcoatRoughnessMap, vClearcoatRoughnessMapUv ).y;
	#endif
	material.clearcoat = saturate( material.clearcoat );	material.clearcoatRoughness = max( material.clearcoatRoughness, 0.0525 );
	material.clearcoatRoughness += geometryRoughness;
	material.clearcoatRoughness = min( material.clearcoatRoughness, 1.0 );
#endif
#ifdef USE_DISPERSION
	material.dispersion = dispersion;
#endif
#ifdef USE_IRIDESCENCE
	material.iridescence = iridescence;
	material.iridescenceIOR = iridescenceIOR;
	#ifdef USE_IRIDESCENCEMAP
		material.iridescence *= texture2D( iridescenceMap, vIridescenceMapUv ).r;
	#endif
	#ifdef USE_IRIDESCENCE_THICKNESSMAP
		material.iridescenceThickness = (iridescenceThicknessMaximum - iridescenceThicknessMinimum) * texture2D( iridescenceThicknessMap, vIridescenceThicknessMapUv ).g + iridescenceThicknessMinimum;
	#else
		material.iridescenceThickness = iridescenceThicknessMaximum;
	#endif
#endif
#ifdef USE_SHEEN
	material.sheenColor = sheenColor;
	#ifdef USE_SHEEN_COLORMAP
		material.sheenColor *= texture2D( sheenColorMap, vSheenColorMapUv ).rgb;
	#endif
	material.sheenRoughness = clamp( sheenRoughness, 0.0001, 1.0 );
	#ifdef USE_SHEEN_ROUGHNESSMAP
		material.sheenRoughness *= texture2D( sheenRoughnessMap, vSheenRoughnessMapUv ).a;
	#endif
#endif
#ifdef USE_ANISOTROPY
	#ifdef USE_ANISOTROPYMAP
		mat2 anisotropyMat = mat2( anisotropyVector.x, anisotropyVector.y, - anisotropyVector.y, anisotropyVector.x );
		vec3 anisotropyPolar = texture2D( anisotropyMap, vAnisotropyMapUv ).rgb;
		vec2 anisotropyV = anisotropyMat * normalize( 2.0 * anisotropyPolar.rg - vec2( 1.0 ) ) * anisotropyPolar.b;
	#else
		vec2 anisotropyV = anisotropyVector;
	#endif
	material.anisotropy = length( anisotropyV );
	if( material.anisotropy == 0.0 ) {
		anisotropyV = vec2( 1.0, 0.0 );
	} else {
		anisotropyV /= material.anisotropy;
		material.anisotropy = saturate( material.anisotropy );
	}
	material.alphaT = mix( pow2( material.roughness ), 1.0, pow2( material.anisotropy ) );
	material.anisotropyT = tbn[ 0 ] * anisotropyV.x + tbn[ 1 ] * anisotropyV.y;
	material.anisotropyB = tbn[ 1 ] * anisotropyV.x - tbn[ 0 ] * anisotropyV.y;
#endif`,jg=`uniform sampler2D dfgLUT;
struct PhysicalMaterial {
	vec3 diffuseColor;
	vec3 diffuseContribution;
	vec3 specularColor;
	vec3 specularColorBlended;
	float roughness;
	float metalness;
	float specularF90;
	float dispersion;
	#ifdef USE_CLEARCOAT
		float clearcoat;
		float clearcoatRoughness;
		vec3 clearcoatF0;
		float clearcoatF90;
	#endif
	#ifdef USE_IRIDESCENCE
		float iridescence;
		float iridescenceIOR;
		float iridescenceThickness;
		vec3 iridescenceFresnel;
		vec3 iridescenceF0;
		vec3 iridescenceFresnelDielectric;
		vec3 iridescenceFresnelMetallic;
	#endif
	#ifdef USE_SHEEN
		vec3 sheenColor;
		float sheenRoughness;
	#endif
	#ifdef IOR
		float ior;
	#endif
	#ifdef USE_TRANSMISSION
		float transmission;
		float transmissionAlpha;
		float thickness;
		float attenuationDistance;
		vec3 attenuationColor;
	#endif
	#ifdef USE_ANISOTROPY
		float anisotropy;
		float alphaT;
		vec3 anisotropyT;
		vec3 anisotropyB;
	#endif
};
vec3 clearcoatSpecularDirect = vec3( 0.0 );
vec3 clearcoatSpecularIndirect = vec3( 0.0 );
vec3 sheenSpecularDirect = vec3( 0.0 );
vec3 sheenSpecularIndirect = vec3(0.0 );
vec3 Schlick_to_F0( const in vec3 f, const in float f90, const in float dotVH ) {
    float x = clamp( 1.0 - dotVH, 0.0, 1.0 );
    float x2 = x * x;
    float x5 = clamp( x * x2 * x2, 0.0, 0.9999 );
    return ( f - vec3( f90 ) * x5 ) / ( 1.0 - x5 );
}
float V_GGX_SmithCorrelated( const in float alpha, const in float dotNL, const in float dotNV ) {
	float a2 = pow2( alpha );
	float gv = dotNL * sqrt( a2 + ( 1.0 - a2 ) * pow2( dotNV ) );
	float gl = dotNV * sqrt( a2 + ( 1.0 - a2 ) * pow2( dotNL ) );
	return 0.5 / max( gv + gl, EPSILON );
}
float D_GGX( const in float alpha, const in float dotNH ) {
	float a2 = pow2( alpha );
	float denom = pow2( dotNH ) * ( a2 - 1.0 ) + 1.0;
	return RECIPROCAL_PI * a2 / pow2( denom );
}
#ifdef USE_ANISOTROPY
	float V_GGX_SmithCorrelated_Anisotropic( const in float alphaT, const in float alphaB, const in float dotTV, const in float dotBV, const in float dotTL, const in float dotBL, const in float dotNV, const in float dotNL ) {
		float gv = dotNL * length( vec3( alphaT * dotTV, alphaB * dotBV, dotNV ) );
		float gl = dotNV * length( vec3( alphaT * dotTL, alphaB * dotBL, dotNL ) );
		return 0.5 / max( gv + gl, EPSILON );
	}
	float D_GGX_Anisotropic( const in float alphaT, const in float alphaB, const in float dotNH, const in float dotTH, const in float dotBH ) {
		float a2 = alphaT * alphaB;
		highp vec3 v = vec3( alphaB * dotTH, alphaT * dotBH, a2 * dotNH );
		highp float v2 = dot( v, v );
		float w2 = a2 / v2;
		return RECIPROCAL_PI * a2 * pow2 ( w2 );
	}
#endif
#ifdef USE_CLEARCOAT
	vec3 BRDF_GGX_Clearcoat( const in vec3 lightDir, const in vec3 viewDir, const in vec3 normal, const in PhysicalMaterial material) {
		vec3 f0 = material.clearcoatF0;
		float f90 = material.clearcoatF90;
		float roughness = material.clearcoatRoughness;
		float alpha = pow2( roughness );
		vec3 halfDir = normalize( lightDir + viewDir );
		float dotNL = saturate( dot( normal, lightDir ) );
		float dotNV = saturate( dot( normal, viewDir ) );
		float dotNH = saturate( dot( normal, halfDir ) );
		float dotVH = saturate( dot( viewDir, halfDir ) );
		vec3 F = F_Schlick( f0, f90, dotVH );
		float V = V_GGX_SmithCorrelated( alpha, dotNL, dotNV );
		float D = D_GGX( alpha, dotNH );
		return F * ( V * D );
	}
#endif
vec3 BRDF_GGX( const in vec3 lightDir, const in vec3 viewDir, const in vec3 normal, const in PhysicalMaterial material ) {
	vec3 f0 = material.specularColorBlended;
	float f90 = material.specularF90;
	float roughness = material.roughness;
	float alpha = pow2( roughness );
	vec3 halfDir = normalize( lightDir + viewDir );
	float dotNL = saturate( dot( normal, lightDir ) );
	float dotNV = saturate( dot( normal, viewDir ) );
	float dotNH = saturate( dot( normal, halfDir ) );
	float dotVH = saturate( dot( viewDir, halfDir ) );
	vec3 F = F_Schlick( f0, f90, dotVH );
	#ifdef USE_IRIDESCENCE
		F = mix( F, material.iridescenceFresnel, material.iridescence );
	#endif
	#ifdef USE_ANISOTROPY
		float dotTL = dot( material.anisotropyT, lightDir );
		float dotTV = dot( material.anisotropyT, viewDir );
		float dotTH = dot( material.anisotropyT, halfDir );
		float dotBL = dot( material.anisotropyB, lightDir );
		float dotBV = dot( material.anisotropyB, viewDir );
		float dotBH = dot( material.anisotropyB, halfDir );
		float V = V_GGX_SmithCorrelated_Anisotropic( material.alphaT, alpha, dotTV, dotBV, dotTL, dotBL, dotNV, dotNL );
		float D = D_GGX_Anisotropic( material.alphaT, alpha, dotNH, dotTH, dotBH );
	#else
		float V = V_GGX_SmithCorrelated( alpha, dotNL, dotNV );
		float D = D_GGX( alpha, dotNH );
	#endif
	return F * ( V * D );
}
vec2 LTC_Uv( const in vec3 N, const in vec3 V, const in float roughness ) {
	const float LUT_SIZE = 64.0;
	const float LUT_SCALE = ( LUT_SIZE - 1.0 ) / LUT_SIZE;
	const float LUT_BIAS = 0.5 / LUT_SIZE;
	float dotNV = saturate( dot( N, V ) );
	vec2 uv = vec2( roughness, sqrt( 1.0 - dotNV ) );
	uv = uv * LUT_SCALE + LUT_BIAS;
	return uv;
}
float LTC_ClippedSphereFormFactor( const in vec3 f ) {
	float l = length( f );
	return max( ( l * l + f.z ) / ( l + 1.0 ), 0.0 );
}
vec3 LTC_EdgeVectorFormFactor( const in vec3 v1, const in vec3 v2 ) {
	float x = dot( v1, v2 );
	float y = abs( x );
	float a = 0.8543985 + ( 0.4965155 + 0.0145206 * y ) * y;
	float b = 3.4175940 + ( 4.1616724 + y ) * y;
	float v = a / b;
	float theta_sintheta = ( x > 0.0 ) ? v : 0.5 * inversesqrt( max( 1.0 - x * x, 1e-7 ) ) - v;
	return cross( v1, v2 ) * theta_sintheta;
}
vec3 LTC_Evaluate( const in vec3 N, const in vec3 V, const in vec3 P, const in mat3 mInv, const in vec3 rectCoords[ 4 ] ) {
	vec3 v1 = rectCoords[ 1 ] - rectCoords[ 0 ];
	vec3 v2 = rectCoords[ 3 ] - rectCoords[ 0 ];
	vec3 lightNormal = cross( v1, v2 );
	if( dot( lightNormal, P - rectCoords[ 0 ] ) < 0.0 ) return vec3( 0.0 );
	vec3 T1, T2;
	T1 = normalize( V - N * dot( V, N ) );
	T2 = - cross( N, T1 );
	mat3 mat = mInv * transpose( mat3( T1, T2, N ) );
	vec3 coords[ 4 ];
	coords[ 0 ] = mat * ( rectCoords[ 0 ] - P );
	coords[ 1 ] = mat * ( rectCoords[ 1 ] - P );
	coords[ 2 ] = mat * ( rectCoords[ 2 ] - P );
	coords[ 3 ] = mat * ( rectCoords[ 3 ] - P );
	coords[ 0 ] = normalize( coords[ 0 ] );
	coords[ 1 ] = normalize( coords[ 1 ] );
	coords[ 2 ] = normalize( coords[ 2 ] );
	coords[ 3 ] = normalize( coords[ 3 ] );
	vec3 vectorFormFactor = vec3( 0.0 );
	vectorFormFactor += LTC_EdgeVectorFormFactor( coords[ 0 ], coords[ 1 ] );
	vectorFormFactor += LTC_EdgeVectorFormFactor( coords[ 1 ], coords[ 2 ] );
	vectorFormFactor += LTC_EdgeVectorFormFactor( coords[ 2 ], coords[ 3 ] );
	vectorFormFactor += LTC_EdgeVectorFormFactor( coords[ 3 ], coords[ 0 ] );
	float result = LTC_ClippedSphereFormFactor( vectorFormFactor );
	return vec3( result );
}
#if defined( USE_SHEEN )
float D_Charlie( float roughness, float dotNH ) {
	float alpha = pow2( roughness );
	float invAlpha = 1.0 / alpha;
	float cos2h = dotNH * dotNH;
	float sin2h = max( 1.0 - cos2h, 0.0078125 );
	return ( 2.0 + invAlpha ) * pow( sin2h, invAlpha * 0.5 ) / ( 2.0 * PI );
}
float V_Neubelt( float dotNV, float dotNL ) {
	return saturate( 1.0 / ( 4.0 * ( dotNL + dotNV - dotNL * dotNV ) ) );
}
vec3 BRDF_Sheen( const in vec3 lightDir, const in vec3 viewDir, const in vec3 normal, vec3 sheenColor, const in float sheenRoughness ) {
	vec3 halfDir = normalize( lightDir + viewDir );
	float dotNL = saturate( dot( normal, lightDir ) );
	float dotNV = saturate( dot( normal, viewDir ) );
	float dotNH = saturate( dot( normal, halfDir ) );
	float D = D_Charlie( sheenRoughness, dotNH );
	float V = V_Neubelt( dotNV, dotNL );
	return sheenColor * ( D * V );
}
#endif
float IBLSheenBRDF( const in vec3 normal, const in vec3 viewDir, const in float roughness ) {
	float dotNV = saturate( dot( normal, viewDir ) );
	float r2 = roughness * roughness;
	float rInv = 1.0 / ( roughness + 0.1 );
	float a = -1.9362 + 1.0678 * roughness + 0.4573 * r2 - 0.8469 * rInv;
	float b = -0.6014 + 0.5538 * roughness - 0.4670 * r2 - 0.1255 * rInv;
	float DG = exp( a * dotNV + b );
	return saturate( DG );
}
vec3 EnvironmentBRDF( const in vec3 normal, const in vec3 viewDir, const in vec3 specularColor, const in float specularF90, const in float roughness ) {
	float dotNV = saturate( dot( normal, viewDir ) );
	vec2 fab = texture2D( dfgLUT, vec2( roughness, dotNV ) ).rg;
	return specularColor * fab.x + specularF90 * fab.y;
}
#ifdef USE_IRIDESCENCE
void computeMultiscatteringIridescence( const in vec3 normal, const in vec3 viewDir, const in vec3 specularColor, const in float specularF90, const in float iridescence, const in vec3 iridescenceF0, const in float roughness, inout vec3 singleScatter, inout vec3 multiScatter ) {
#else
void computeMultiscattering( const in vec3 normal, const in vec3 viewDir, const in vec3 specularColor, const in float specularF90, const in float roughness, inout vec3 singleScatter, inout vec3 multiScatter ) {
#endif
	float dotNV = saturate( dot( normal, viewDir ) );
	vec2 fab = texture2D( dfgLUT, vec2( roughness, dotNV ) ).rg;
	#ifdef USE_IRIDESCENCE
		vec3 Fr = mix( specularColor, iridescenceF0, iridescence );
	#else
		vec3 Fr = specularColor;
	#endif
	vec3 FssEss = Fr * fab.x + specularF90 * fab.y;
	float Ess = fab.x + fab.y;
	float Ems = 1.0 - Ess;
	vec3 Favg = Fr + ( 1.0 - Fr ) * 0.047619;	vec3 Fms = FssEss * Favg / ( 1.0 - Ems * Favg );
	singleScatter += FssEss;
	multiScatter += Fms * Ems;
}
vec3 BRDF_GGX_Multiscatter( const in vec3 lightDir, const in vec3 viewDir, const in vec3 normal, const in PhysicalMaterial material ) {
	vec3 singleScatter = BRDF_GGX( lightDir, viewDir, normal, material );
	float dotNL = saturate( dot( normal, lightDir ) );
	float dotNV = saturate( dot( normal, viewDir ) );
	vec2 dfgV = texture2D( dfgLUT, vec2( material.roughness, dotNV ) ).rg;
	vec2 dfgL = texture2D( dfgLUT, vec2( material.roughness, dotNL ) ).rg;
	vec3 FssEss_V = material.specularColorBlended * dfgV.x + material.specularF90 * dfgV.y;
	vec3 FssEss_L = material.specularColorBlended * dfgL.x + material.specularF90 * dfgL.y;
	float Ess_V = dfgV.x + dfgV.y;
	float Ess_L = dfgL.x + dfgL.y;
	float Ems_V = 1.0 - Ess_V;
	float Ems_L = 1.0 - Ess_L;
	vec3 Favg = material.specularColorBlended + ( 1.0 - material.specularColorBlended ) * 0.047619;
	vec3 Fms = FssEss_V * FssEss_L * Favg / ( 1.0 - Ems_V * Ems_L * Favg + EPSILON );
	float compensationFactor = Ems_V * Ems_L;
	vec3 multiScatter = Fms * compensationFactor;
	return singleScatter + multiScatter;
}
#if NUM_RECT_AREA_LIGHTS > 0
	void RE_Direct_RectArea_Physical( const in RectAreaLight rectAreaLight, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in PhysicalMaterial material, inout ReflectedLight reflectedLight ) {
		vec3 normal = geometryNormal;
		vec3 viewDir = geometryViewDir;
		vec3 position = geometryPosition;
		vec3 lightPos = rectAreaLight.position;
		vec3 halfWidth = rectAreaLight.halfWidth;
		vec3 halfHeight = rectAreaLight.halfHeight;
		vec3 lightColor = rectAreaLight.color;
		float roughness = material.roughness;
		vec3 rectCoords[ 4 ];
		rectCoords[ 0 ] = lightPos + halfWidth - halfHeight;		rectCoords[ 1 ] = lightPos - halfWidth - halfHeight;
		rectCoords[ 2 ] = lightPos - halfWidth + halfHeight;
		rectCoords[ 3 ] = lightPos + halfWidth + halfHeight;
		vec2 uv = LTC_Uv( normal, viewDir, roughness );
		vec4 t1 = texture2D( ltc_1, uv );
		vec4 t2 = texture2D( ltc_2, uv );
		mat3 mInv = mat3(
			vec3( t1.x, 0, t1.y ),
			vec3(    0, 1,    0 ),
			vec3( t1.z, 0, t1.w )
		);
		vec3 fresnel = ( material.specularColorBlended * t2.x + ( material.specularF90 - material.specularColorBlended ) * t2.y );
		reflectedLight.directSpecular += lightColor * fresnel * LTC_Evaluate( normal, viewDir, position, mInv, rectCoords );
		reflectedLight.directDiffuse += lightColor * material.diffuseContribution * LTC_Evaluate( normal, viewDir, position, mat3( 1.0 ), rectCoords );
		#ifdef USE_CLEARCOAT
			vec3 Ncc = geometryClearcoatNormal;
			vec2 uvClearcoat = LTC_Uv( Ncc, viewDir, material.clearcoatRoughness );
			vec4 t1Clearcoat = texture2D( ltc_1, uvClearcoat );
			vec4 t2Clearcoat = texture2D( ltc_2, uvClearcoat );
			mat3 mInvClearcoat = mat3(
				vec3( t1Clearcoat.x, 0, t1Clearcoat.y ),
				vec3(             0, 1,             0 ),
				vec3( t1Clearcoat.z, 0, t1Clearcoat.w )
			);
			vec3 fresnelClearcoat = material.clearcoatF0 * t2Clearcoat.x + ( material.clearcoatF90 - material.clearcoatF0 ) * t2Clearcoat.y;
			clearcoatSpecularDirect += lightColor * fresnelClearcoat * LTC_Evaluate( Ncc, viewDir, position, mInvClearcoat, rectCoords );
		#endif
	}
#endif
void RE_Direct_Physical( const in IncidentLight directLight, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in PhysicalMaterial material, inout ReflectedLight reflectedLight ) {
	float dotNL = saturate( dot( geometryNormal, directLight.direction ) );
	vec3 irradiance = dotNL * directLight.color;
	#ifdef USE_CLEARCOAT
		float dotNLcc = saturate( dot( geometryClearcoatNormal, directLight.direction ) );
		vec3 ccIrradiance = dotNLcc * directLight.color;
		clearcoatSpecularDirect += ccIrradiance * BRDF_GGX_Clearcoat( directLight.direction, geometryViewDir, geometryClearcoatNormal, material );
	#endif
	#ifdef USE_SHEEN
 
 		sheenSpecularDirect += irradiance * BRDF_Sheen( directLight.direction, geometryViewDir, geometryNormal, material.sheenColor, material.sheenRoughness );
 
 		float sheenAlbedoV = IBLSheenBRDF( geometryNormal, geometryViewDir, material.sheenRoughness );
 		float sheenAlbedoL = IBLSheenBRDF( geometryNormal, directLight.direction, material.sheenRoughness );
 
 		float sheenEnergyComp = 1.0 - max3( material.sheenColor ) * max( sheenAlbedoV, sheenAlbedoL );
 
 		irradiance *= sheenEnergyComp;
 
 	#endif
	reflectedLight.directSpecular += irradiance * BRDF_GGX_Multiscatter( directLight.direction, geometryViewDir, geometryNormal, material );
	reflectedLight.directDiffuse += irradiance * BRDF_Lambert( material.diffuseContribution );
}
void RE_IndirectDiffuse_Physical( const in vec3 irradiance, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in PhysicalMaterial material, inout ReflectedLight reflectedLight ) {
	vec3 diffuse = irradiance * BRDF_Lambert( material.diffuseContribution );
	#ifdef USE_SHEEN
		float sheenAlbedo = IBLSheenBRDF( geometryNormal, geometryViewDir, material.sheenRoughness );
		float sheenEnergyComp = 1.0 - max3( material.sheenColor ) * sheenAlbedo;
		diffuse *= sheenEnergyComp;
	#endif
	reflectedLight.indirectDiffuse += diffuse;
}
void RE_IndirectSpecular_Physical( const in vec3 radiance, const in vec3 irradiance, const in vec3 clearcoatRadiance, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in PhysicalMaterial material, inout ReflectedLight reflectedLight) {
	#ifdef USE_CLEARCOAT
		clearcoatSpecularIndirect += clearcoatRadiance * EnvironmentBRDF( geometryClearcoatNormal, geometryViewDir, material.clearcoatF0, material.clearcoatF90, material.clearcoatRoughness );
	#endif
	#ifdef USE_SHEEN
		sheenSpecularIndirect += irradiance * material.sheenColor * IBLSheenBRDF( geometryNormal, geometryViewDir, material.sheenRoughness ) * RECIPROCAL_PI;
 	#endif
	vec3 singleScatteringDielectric = vec3( 0.0 );
	vec3 multiScatteringDielectric = vec3( 0.0 );
	vec3 singleScatteringMetallic = vec3( 0.0 );
	vec3 multiScatteringMetallic = vec3( 0.0 );
	#ifdef USE_IRIDESCENCE
		computeMultiscatteringIridescence( geometryNormal, geometryViewDir, material.specularColor, material.specularF90, material.iridescence, material.iridescenceFresnelDielectric, material.roughness, singleScatteringDielectric, multiScatteringDielectric );
		computeMultiscatteringIridescence( geometryNormal, geometryViewDir, material.diffuseColor, material.specularF90, material.iridescence, material.iridescenceFresnelMetallic, material.roughness, singleScatteringMetallic, multiScatteringMetallic );
	#else
		computeMultiscattering( geometryNormal, geometryViewDir, material.specularColor, material.specularF90, material.roughness, singleScatteringDielectric, multiScatteringDielectric );
		computeMultiscattering( geometryNormal, geometryViewDir, material.diffuseColor, material.specularF90, material.roughness, singleScatteringMetallic, multiScatteringMetallic );
	#endif
	vec3 singleScattering = mix( singleScatteringDielectric, singleScatteringMetallic, material.metalness );
	vec3 multiScattering = mix( multiScatteringDielectric, multiScatteringMetallic, material.metalness );
	vec3 totalScatteringDielectric = singleScatteringDielectric + multiScatteringDielectric;
	vec3 diffuse = material.diffuseContribution * ( 1.0 - totalScatteringDielectric );
	vec3 cosineWeightedIrradiance = irradiance * RECIPROCAL_PI;
	vec3 indirectSpecular = radiance * singleScattering;
	indirectSpecular += multiScattering * cosineWeightedIrradiance;
	vec3 indirectDiffuse = diffuse * cosineWeightedIrradiance;
	#ifdef USE_SHEEN
		float sheenAlbedo = IBLSheenBRDF( geometryNormal, geometryViewDir, material.sheenRoughness );
		float sheenEnergyComp = 1.0 - max3( material.sheenColor ) * sheenAlbedo;
		indirectSpecular *= sheenEnergyComp;
		indirectDiffuse *= sheenEnergyComp;
	#endif
	reflectedLight.indirectSpecular += indirectSpecular;
	reflectedLight.indirectDiffuse += indirectDiffuse;
}
#define RE_Direct				RE_Direct_Physical
#define RE_Direct_RectArea		RE_Direct_RectArea_Physical
#define RE_IndirectDiffuse		RE_IndirectDiffuse_Physical
#define RE_IndirectSpecular		RE_IndirectSpecular_Physical
float computeSpecularOcclusion( const in float dotNV, const in float ambientOcclusion, const in float roughness ) {
	return saturate( pow( dotNV + ambientOcclusion, exp2( - 16.0 * roughness - 1.0 ) ) - 1.0 + ambientOcclusion );
}`,e0=`
vec3 geometryPosition = - vViewPosition;
vec3 geometryNormal = normal;
vec3 geometryViewDir = ( isOrthographic ) ? vec3( 0, 0, 1 ) : normalize( vViewPosition );
vec3 geometryClearcoatNormal = vec3( 0.0 );
#ifdef USE_CLEARCOAT
	geometryClearcoatNormal = clearcoatNormal;
#endif
#ifdef USE_IRIDESCENCE
	float dotNVi = saturate( dot( normal, geometryViewDir ) );
	if ( material.iridescenceThickness == 0.0 ) {
		material.iridescence = 0.0;
	} else {
		material.iridescence = saturate( material.iridescence );
	}
	if ( material.iridescence > 0.0 ) {
		material.iridescenceFresnelDielectric = evalIridescence( 1.0, material.iridescenceIOR, dotNVi, material.iridescenceThickness, material.specularColor );
		material.iridescenceFresnelMetallic = evalIridescence( 1.0, material.iridescenceIOR, dotNVi, material.iridescenceThickness, material.diffuseColor );
		material.iridescenceFresnel = mix( material.iridescenceFresnelDielectric, material.iridescenceFresnelMetallic, material.metalness );
		material.iridescenceF0 = Schlick_to_F0( material.iridescenceFresnel, 1.0, dotNVi );
	}
#endif
IncidentLight directLight;
#if ( NUM_POINT_LIGHTS > 0 ) && defined( RE_Direct )
	PointLight pointLight;
	#if defined( USE_SHADOWMAP ) && NUM_POINT_LIGHT_SHADOWS > 0
	PointLightShadow pointLightShadow;
	#endif
	#pragma unroll_loop_start
	for ( int i = 0; i < NUM_POINT_LIGHTS; i ++ ) {
		pointLight = pointLights[ i ];
		getPointLightInfo( pointLight, geometryPosition, directLight );
		#if defined( USE_SHADOWMAP ) && ( UNROLLED_LOOP_INDEX < NUM_POINT_LIGHT_SHADOWS ) && ( defined( SHADOWMAP_TYPE_PCF ) || defined( SHADOWMAP_TYPE_BASIC ) )
		pointLightShadow = pointLightShadows[ i ];
		directLight.color *= ( directLight.visible && receiveShadow ) ? getPointShadow( pointShadowMap[ i ], pointLightShadow.shadowMapSize, pointLightShadow.shadowIntensity, pointLightShadow.shadowBias, pointLightShadow.shadowRadius, vPointShadowCoord[ i ], pointLightShadow.shadowCameraNear, pointLightShadow.shadowCameraFar ) : 1.0;
		#endif
		RE_Direct( directLight, geometryPosition, geometryNormal, geometryViewDir, geometryClearcoatNormal, material, reflectedLight );
	}
	#pragma unroll_loop_end
#endif
#if ( NUM_SPOT_LIGHTS > 0 ) && defined( RE_Direct )
	SpotLight spotLight;
	vec4 spotColor;
	vec3 spotLightCoord;
	bool inSpotLightMap;
	#if defined( USE_SHADOWMAP ) && NUM_SPOT_LIGHT_SHADOWS > 0
	SpotLightShadow spotLightShadow;
	#endif
	#pragma unroll_loop_start
	for ( int i = 0; i < NUM_SPOT_LIGHTS; i ++ ) {
		spotLight = spotLights[ i ];
		getSpotLightInfo( spotLight, geometryPosition, directLight );
		#if ( UNROLLED_LOOP_INDEX < NUM_SPOT_LIGHT_SHADOWS_WITH_MAPS )
		#define SPOT_LIGHT_MAP_INDEX UNROLLED_LOOP_INDEX
		#elif ( UNROLLED_LOOP_INDEX < NUM_SPOT_LIGHT_SHADOWS )
		#define SPOT_LIGHT_MAP_INDEX NUM_SPOT_LIGHT_MAPS
		#else
		#define SPOT_LIGHT_MAP_INDEX ( UNROLLED_LOOP_INDEX - NUM_SPOT_LIGHT_SHADOWS + NUM_SPOT_LIGHT_SHADOWS_WITH_MAPS )
		#endif
		#if ( SPOT_LIGHT_MAP_INDEX < NUM_SPOT_LIGHT_MAPS )
			spotLightCoord = vSpotLightCoord[ i ].xyz / vSpotLightCoord[ i ].w;
			inSpotLightMap = all( lessThan( abs( spotLightCoord * 2. - 1. ), vec3( 1.0 ) ) );
			spotColor = texture2D( spotLightMap[ SPOT_LIGHT_MAP_INDEX ], spotLightCoord.xy );
			directLight.color = inSpotLightMap ? directLight.color * spotColor.rgb : directLight.color;
		#endif
		#undef SPOT_LIGHT_MAP_INDEX
		#if defined( USE_SHADOWMAP ) && ( UNROLLED_LOOP_INDEX < NUM_SPOT_LIGHT_SHADOWS )
		spotLightShadow = spotLightShadows[ i ];
		directLight.color *= ( directLight.visible && receiveShadow ) ? getShadow( spotShadowMap[ i ], spotLightShadow.shadowMapSize, spotLightShadow.shadowIntensity, spotLightShadow.shadowBias, spotLightShadow.shadowRadius, vSpotLightCoord[ i ] ) : 1.0;
		#endif
		RE_Direct( directLight, geometryPosition, geometryNormal, geometryViewDir, geometryClearcoatNormal, material, reflectedLight );
	}
	#pragma unroll_loop_end
#endif
#if ( NUM_DIR_LIGHTS > 0 ) && defined( RE_Direct )
	DirectionalLight directionalLight;
	#if defined( USE_SHADOWMAP ) && NUM_DIR_LIGHT_SHADOWS > 0
	DirectionalLightShadow directionalLightShadow;
	#endif
	#pragma unroll_loop_start
	for ( int i = 0; i < NUM_DIR_LIGHTS; i ++ ) {
		directionalLight = directionalLights[ i ];
		getDirectionalLightInfo( directionalLight, directLight );
		#if defined( USE_SHADOWMAP ) && ( UNROLLED_LOOP_INDEX < NUM_DIR_LIGHT_SHADOWS )
		directionalLightShadow = directionalLightShadows[ i ];
		directLight.color *= ( directLight.visible && receiveShadow ) ? getShadow( directionalShadowMap[ i ], directionalLightShadow.shadowMapSize, directionalLightShadow.shadowIntensity, directionalLightShadow.shadowBias, directionalLightShadow.shadowRadius, vDirectionalShadowCoord[ i ] ) : 1.0;
		#endif
		RE_Direct( directLight, geometryPosition, geometryNormal, geometryViewDir, geometryClearcoatNormal, material, reflectedLight );
	}
	#pragma unroll_loop_end
#endif
#if ( NUM_RECT_AREA_LIGHTS > 0 ) && defined( RE_Direct_RectArea )
	RectAreaLight rectAreaLight;
	#pragma unroll_loop_start
	for ( int i = 0; i < NUM_RECT_AREA_LIGHTS; i ++ ) {
		rectAreaLight = rectAreaLights[ i ];
		RE_Direct_RectArea( rectAreaLight, geometryPosition, geometryNormal, geometryViewDir, geometryClearcoatNormal, material, reflectedLight );
	}
	#pragma unroll_loop_end
#endif
#if defined( RE_IndirectDiffuse )
	vec3 iblIrradiance = vec3( 0.0 );
	vec3 irradiance = getAmbientLightIrradiance( ambientLightColor );
	#if defined( USE_LIGHT_PROBES )
		irradiance += getLightProbeIrradiance( lightProbe, geometryNormal );
	#endif
	#if ( NUM_HEMI_LIGHTS > 0 )
		#pragma unroll_loop_start
		for ( int i = 0; i < NUM_HEMI_LIGHTS; i ++ ) {
			irradiance += getHemisphereLightIrradiance( hemisphereLights[ i ], geometryNormal );
		}
		#pragma unroll_loop_end
	#endif
	#ifdef USE_LIGHT_PROBES_GRID
		vec3 probeWorldPos = ( ( vec4( geometryPosition, 1.0 ) - viewMatrix[ 3 ] ) * viewMatrix ).xyz;
		vec3 probeWorldNormal = transformNormalByInverseViewMatrix( geometryNormal, viewMatrix );
		irradiance += getLightProbeGridIrradiance( probeWorldPos, probeWorldNormal );
	#endif
#endif
#if defined( RE_IndirectSpecular )
	vec3 radiance = vec3( 0.0 );
	vec3 clearcoatRadiance = vec3( 0.0 );
#endif`,t0=`#if defined( RE_IndirectDiffuse )
	#ifdef USE_LIGHTMAP
		vec4 lightMapTexel = texture2D( lightMap, vLightMapUv );
		vec3 lightMapIrradiance = lightMapTexel.rgb * lightMapIntensity;
		irradiance += lightMapIrradiance;
	#endif
	#if defined( USE_ENVMAP ) && defined( ENVMAP_TYPE_CUBE_UV )
		#if defined( STANDARD ) || defined( LAMBERT ) || defined( PHONG )
			iblIrradiance += getIBLIrradiance( geometryNormal );
		#endif
	#endif
#endif
#if defined( USE_ENVMAP ) && defined( RE_IndirectSpecular )
	#ifdef USE_ANISOTROPY
		radiance += getIBLAnisotropyRadiance( geometryViewDir, geometryNormal, material.roughness, material.anisotropyB, material.anisotropy );
	#else
		radiance += getIBLRadiance( geometryViewDir, geometryNormal, material.roughness );
	#endif
	#ifdef USE_CLEARCOAT
		clearcoatRadiance += getIBLRadiance( geometryViewDir, geometryClearcoatNormal, material.clearcoatRoughness );
	#endif
#endif`,n0=`#if defined( RE_IndirectDiffuse )
	#if defined( LAMBERT ) || defined( PHONG )
		irradiance += iblIrradiance;
	#endif
	RE_IndirectDiffuse( irradiance, geometryPosition, geometryNormal, geometryViewDir, geometryClearcoatNormal, material, reflectedLight );
#endif
#if defined( RE_IndirectSpecular )
	RE_IndirectSpecular( radiance, iblIrradiance, clearcoatRadiance, geometryPosition, geometryNormal, geometryViewDir, geometryClearcoatNormal, material, reflectedLight );
#endif`,i0=`#ifdef USE_LIGHT_PROBES_GRID
uniform highp sampler3D probesSH;
uniform vec3 probesMin;
uniform vec3 probesMax;
uniform vec3 probesResolution;
vec3 getLightProbeGridIrradiance( vec3 worldPos, vec3 worldNormal ) {
	vec3 res = probesResolution;
	vec3 gridRange = probesMax - probesMin;
	vec3 resMinusOne = res - 1.0;
	vec3 probeSpacing = gridRange / resMinusOne;
	vec3 samplePos = worldPos + worldNormal * probeSpacing * 0.5;
	vec3 uvw = clamp( ( samplePos - probesMin ) / gridRange, 0.0, 1.0 );
	uvw = uvw * resMinusOne / res + 0.5 / res;
	float nz          = res.z;
	float paddedSlices = nz + 2.0;
	float atlasDepth  = 7.0 * paddedSlices;
	float uvZBase     = uvw.z * nz + 1.0;
	vec4 s0 = texture( probesSH, vec3( uvw.xy, ( uvZBase                       ) / atlasDepth ) );
	vec4 s1 = texture( probesSH, vec3( uvw.xy, ( uvZBase +       paddedSlices   ) / atlasDepth ) );
	vec4 s2 = texture( probesSH, vec3( uvw.xy, ( uvZBase + 2.0 * paddedSlices   ) / atlasDepth ) );
	vec4 s3 = texture( probesSH, vec3( uvw.xy, ( uvZBase + 3.0 * paddedSlices   ) / atlasDepth ) );
	vec4 s4 = texture( probesSH, vec3( uvw.xy, ( uvZBase + 4.0 * paddedSlices   ) / atlasDepth ) );
	vec4 s5 = texture( probesSH, vec3( uvw.xy, ( uvZBase + 5.0 * paddedSlices   ) / atlasDepth ) );
	vec4 s6 = texture( probesSH, vec3( uvw.xy, ( uvZBase + 6.0 * paddedSlices   ) / atlasDepth ) );
	vec3 c0 = s0.xyz;
	vec3 c1 = vec3( s0.w, s1.xy );
	vec3 c2 = vec3( s1.zw, s2.x );
	vec3 c3 = s2.yzw;
	vec3 c4 = s3.xyz;
	vec3 c5 = vec3( s3.w, s4.xy );
	vec3 c6 = vec3( s4.zw, s5.x );
	vec3 c7 = s5.yzw;
	vec3 c8 = s6.xyz;
	float x = worldNormal.x, y = worldNormal.y, z = worldNormal.z;
	vec3 result = c0 * 0.886227;
	result += c1 * 2.0 * 0.511664 * y;
	result += c2 * 2.0 * 0.511664 * z;
	result += c3 * 2.0 * 0.511664 * x;
	result += c4 * 2.0 * 0.429043 * x * y;
	result += c5 * 2.0 * 0.429043 * y * z;
	result += c6 * ( 0.743125 * z * z - 0.247708 );
	result += c7 * 2.0 * 0.429043 * x * z;
	result += c8 * 0.429043 * ( x * x - y * y );
	return max( result, vec3( 0.0 ) );
}
#endif`,r0=`#if defined( USE_LOGARITHMIC_DEPTH_BUFFER )
	gl_FragDepth = vIsPerspective == 0.0 ? gl_FragCoord.z : log2( vFragDepth ) * logDepthBufFC * 0.5;
#endif`,s0=`#if defined( USE_LOGARITHMIC_DEPTH_BUFFER )
	uniform float logDepthBufFC;
	varying float vFragDepth;
	varying float vIsPerspective;
#endif`,a0=`#ifdef USE_LOGARITHMIC_DEPTH_BUFFER
	varying float vFragDepth;
	varying float vIsPerspective;
#endif`,o0=`#ifdef USE_LOGARITHMIC_DEPTH_BUFFER
	vFragDepth = 1.0 + gl_Position.w;
	vIsPerspective = float( isPerspectiveMatrix( projectionMatrix ) );
#endif`,l0=`#ifdef USE_MAP
	vec4 sampledDiffuseColor = texture2D( map, vMapUv );
	#ifdef DECODE_VIDEO_TEXTURE
		sampledDiffuseColor = sRGBTransferEOTF( sampledDiffuseColor );
	#endif
	diffuseColor *= sampledDiffuseColor;
#endif`,c0=`#ifdef USE_MAP
	uniform sampler2D map;
#endif`,u0=`#if defined( USE_MAP ) || defined( USE_ALPHAMAP )
	#if defined( USE_POINTS_UV )
		vec2 uv = vUv;
	#else
		vec2 uv = ( uvTransform * vec3( gl_PointCoord.x, 1.0 - gl_PointCoord.y, 1 ) ).xy;
	#endif
#endif
#ifdef USE_MAP
	diffuseColor *= texture2D( map, uv );
#endif
#ifdef USE_ALPHAMAP
	diffuseColor.a *= texture2D( alphaMap, uv ).g;
#endif`,f0=`#if defined( USE_POINTS_UV )
	varying vec2 vUv;
#else
	#if defined( USE_MAP ) || defined( USE_ALPHAMAP )
		uniform mat3 uvTransform;
	#endif
#endif
#ifdef USE_MAP
	uniform sampler2D map;
#endif
#ifdef USE_ALPHAMAP
	uniform sampler2D alphaMap;
#endif`,d0=`float metalnessFactor = metalness;
#ifdef USE_METALNESSMAP
	vec4 texelMetalness = texture2D( metalnessMap, vMetalnessMapUv );
	metalnessFactor *= texelMetalness.b;
#endif`,h0=`#ifdef USE_METALNESSMAP
	uniform sampler2D metalnessMap;
#endif`,p0=`#ifdef USE_INSTANCING_MORPH
	float morphTargetInfluences[ MORPHTARGETS_COUNT ];
	float morphTargetBaseInfluence = texelFetch( morphTexture, ivec2( 0, gl_InstanceID ), 0 ).r;
	for ( int i = 0; i < MORPHTARGETS_COUNT; i ++ ) {
		morphTargetInfluences[i] =  texelFetch( morphTexture, ivec2( i + 1, gl_InstanceID ), 0 ).r;
	}
#endif`,m0=`#if defined( USE_MORPHCOLORS )
	vColor *= morphTargetBaseInfluence;
	for ( int i = 0; i < MORPHTARGETS_COUNT; i ++ ) {
		#if defined( USE_COLOR_ALPHA )
			if ( morphTargetInfluences[ i ] != 0.0 ) vColor += getMorph( gl_VertexID, i, 2 ) * morphTargetInfluences[ i ];
		#elif defined( USE_COLOR )
			if ( morphTargetInfluences[ i ] != 0.0 ) vColor += getMorph( gl_VertexID, i, 2 ).rgb * morphTargetInfluences[ i ];
		#endif
	}
#endif`,_0=`#ifdef USE_MORPHNORMALS
	objectNormal *= morphTargetBaseInfluence;
	for ( int i = 0; i < MORPHTARGETS_COUNT; i ++ ) {
		if ( morphTargetInfluences[ i ] != 0.0 ) objectNormal += getMorph( gl_VertexID, i, 1 ).xyz * morphTargetInfluences[ i ];
	}
#endif`,g0=`#ifdef USE_MORPHTARGETS
	#ifndef USE_INSTANCING_MORPH
		uniform float morphTargetBaseInfluence;
		uniform float morphTargetInfluences[ MORPHTARGETS_COUNT ];
	#endif
	uniform sampler2DArray morphTargetsTexture;
	uniform ivec2 morphTargetsTextureSize;
	vec4 getMorph( const in int vertexIndex, const in int morphTargetIndex, const in int offset ) {
		int texelIndex = vertexIndex * MORPHTARGETS_TEXTURE_STRIDE + offset;
		int y = texelIndex / morphTargetsTextureSize.x;
		int x = texelIndex - y * morphTargetsTextureSize.x;
		ivec3 morphUV = ivec3( x, y, morphTargetIndex );
		return texelFetch( morphTargetsTexture, morphUV, 0 );
	}
#endif`,x0=`#ifdef USE_MORPHTARGETS
	transformed *= morphTargetBaseInfluence;
	for ( int i = 0; i < MORPHTARGETS_COUNT; i ++ ) {
		if ( morphTargetInfluences[ i ] != 0.0 ) transformed += getMorph( gl_VertexID, i, 0 ).xyz * morphTargetInfluences[ i ];
	}
#endif`,v0=`float faceDirection = gl_FrontFacing ? 1.0 : - 1.0;
#ifdef FLAT_SHADED
	vec3 fdx = dFdx( vViewPosition );
	vec3 fdy = dFdy( vViewPosition );
	vec3 normal = normalize( cross( fdx, fdy ) );
#else
	vec3 normal = normalize( vNormal );
	#ifdef DOUBLE_SIDED
		normal *= faceDirection;
	#endif
#endif
#if defined( USE_NORMALMAP_TANGENTSPACE ) || defined( USE_CLEARCOAT_NORMALMAP ) || defined( USE_ANISOTROPY )
	#ifdef USE_TANGENT
		mat3 tbn = mat3( normalize( vTangent ), normalize( vBitangent ), normal );
	#else
		mat3 tbn = getTangentFrame( - vViewPosition, normal,
		#if defined( USE_NORMALMAP )
			vNormalMapUv
		#elif defined( USE_CLEARCOAT_NORMALMAP )
			vClearcoatNormalMapUv
		#else
			vUv
		#endif
		);
	#endif
	#ifdef DOUBLE_SIDED
		tbn[0] *= faceDirection;
		tbn[1] *= faceDirection;
	#endif
#endif
#ifdef USE_CLEARCOAT_NORMALMAP
	#ifdef USE_TANGENT
		mat3 tbn2 = mat3( normalize( vTangent ), normalize( vBitangent ), normal );
	#else
		mat3 tbn2 = getTangentFrame( - vViewPosition, normal, vClearcoatNormalMapUv );
	#endif
	#ifdef DOUBLE_SIDED
		tbn2[0] *= faceDirection;
		tbn2[1] *= faceDirection;
	#endif
#endif
vec3 nonPerturbedNormal = normal;`,S0=`#ifdef USE_NORMALMAP_OBJECTSPACE
	normal = texture2D( normalMap, vNormalMapUv ).xyz * 2.0 - 1.0;
	#ifdef FLIP_SIDED
		normal = - normal;
	#endif
	#ifdef DOUBLE_SIDED
		normal = normal * faceDirection;
	#endif
	normal = normalize( normalMatrix * normal );
#elif defined( USE_NORMALMAP_TANGENTSPACE )
	vec3 mapN = texture2D( normalMap, vNormalMapUv ).xyz * 2.0 - 1.0;
	#if defined( USE_PACKED_NORMALMAP )
		mapN = vec3( mapN.xy, sqrt( saturate( 1.0 - dot( mapN.xy, mapN.xy ) ) ) );
	#endif
	mapN.xy *= normalScale;
	normal = normalize( tbn * mapN );
#elif defined( USE_BUMPMAP )
	normal = perturbNormalArb( - vViewPosition, normal, dHdxy_fwd(), faceDirection );
#endif`,M0=`#ifndef FLAT_SHADED
	varying vec3 vNormal;
	#ifdef USE_TANGENT
		varying vec3 vTangent;
		varying vec3 vBitangent;
	#endif
#endif`,E0=`#ifndef FLAT_SHADED
	varying vec3 vNormal;
	#ifdef USE_TANGENT
		varying vec3 vTangent;
		varying vec3 vBitangent;
	#endif
#endif`,y0=`#ifndef FLAT_SHADED
	vNormal = normalize( transformedNormal );
	#ifdef USE_TANGENT
		vTangent = normalize( transformedTangent );
		vBitangent = normalize( cross( vNormal, vTangent ) * tangent.w );
		#ifdef FLIP_SIDED
			vBitangent = - vBitangent;
		#endif
	#endif
#endif`,b0=`#ifdef USE_NORMALMAP
	uniform sampler2D normalMap;
	uniform vec2 normalScale;
#endif
#ifdef USE_NORMALMAP_OBJECTSPACE
	uniform mat3 normalMatrix;
#endif
#if ! defined ( USE_TANGENT ) && ( defined ( USE_NORMALMAP_TANGENTSPACE ) || defined ( USE_CLEARCOAT_NORMALMAP ) || defined( USE_ANISOTROPY ) )
	mat3 getTangentFrame( vec3 eye_pos, vec3 surf_norm, vec2 uv ) {
		vec3 q0 = dFdx( eye_pos.xyz );
		vec3 q1 = dFdy( eye_pos.xyz );
		vec2 st0 = dFdx( uv.st );
		vec2 st1 = dFdy( uv.st );
		vec3 N = surf_norm;
		vec3 q1perp = cross( q1, N );
		vec3 q0perp = cross( N, q0 );
		vec3 T = q1perp * st0.x + q0perp * st1.x;
		vec3 B = q1perp * st0.y + q0perp * st1.y;
		float det = max( dot( T, T ), dot( B, B ) );
		float scale = ( det == 0.0 ) ? 0.0 : inversesqrt( det );
		return mat3( T * scale, B * scale, N );
	}
#endif`,T0=`#ifdef USE_CLEARCOAT
	vec3 clearcoatNormal = nonPerturbedNormal;
#endif`,A0=`#ifdef USE_CLEARCOAT_NORMALMAP
	vec3 clearcoatMapN = texture2D( clearcoatNormalMap, vClearcoatNormalMapUv ).xyz * 2.0 - 1.0;
	clearcoatMapN.xy *= clearcoatNormalScale;
	clearcoatNormal = normalize( tbn2 * clearcoatMapN );
#endif`,w0=`#ifdef USE_CLEARCOATMAP
	uniform sampler2D clearcoatMap;
#endif
#ifdef USE_CLEARCOAT_NORMALMAP
	uniform sampler2D clearcoatNormalMap;
	uniform vec2 clearcoatNormalScale;
#endif
#ifdef USE_CLEARCOAT_ROUGHNESSMAP
	uniform sampler2D clearcoatRoughnessMap;
#endif`,R0=`#ifdef USE_IRIDESCENCEMAP
	uniform sampler2D iridescenceMap;
#endif
#ifdef USE_IRIDESCENCE_THICKNESSMAP
	uniform sampler2D iridescenceThicknessMap;
#endif`,C0=`#ifdef OPAQUE
diffuseColor.a = 1.0;
#endif
#ifdef USE_TRANSMISSION
diffuseColor.a *= material.transmissionAlpha;
#endif
gl_FragColor = vec4( outgoingLight, diffuseColor.a );`,P0=`vec3 packNormalToRGB( const in vec3 normal ) {
	return normalize( normal ) * 0.5 + 0.5;
}
vec3 unpackRGBToNormal( const in vec3 rgb ) {
	return 2.0 * rgb.xyz - 1.0;
}
const float PackUpscale = 256. / 255.;const float UnpackDownscale = 255. / 256.;const float ShiftRight8 = 1. / 256.;
const float Inv255 = 1. / 255.;
const vec4 PackFactors = vec4( 1.0, 256.0, 256.0 * 256.0, 256.0 * 256.0 * 256.0 );
const vec2 UnpackFactors2 = vec2( UnpackDownscale, 1.0 / PackFactors.g );
const vec3 UnpackFactors3 = vec3( UnpackDownscale / PackFactors.rg, 1.0 / PackFactors.b );
const vec4 UnpackFactors4 = vec4( UnpackDownscale / PackFactors.rgb, 1.0 / PackFactors.a );
vec4 packDepthToRGBA( const in float v ) {
	if( v <= 0.0 )
		return vec4( 0., 0., 0., 0. );
	if( v >= 1.0 )
		return vec4( 1., 1., 1., 1. );
	float vuf;
	float af = modf( v * PackFactors.a, vuf );
	float bf = modf( vuf * ShiftRight8, vuf );
	float gf = modf( vuf * ShiftRight8, vuf );
	return vec4( vuf * Inv255, gf * PackUpscale, bf * PackUpscale, af );
}
vec3 packDepthToRGB( const in float v ) {
	if( v <= 0.0 )
		return vec3( 0., 0., 0. );
	if( v >= 1.0 )
		return vec3( 1., 1., 1. );
	float vuf;
	float bf = modf( v * PackFactors.b, vuf );
	float gf = modf( vuf * ShiftRight8, vuf );
	return vec3( vuf * Inv255, gf * PackUpscale, bf );
}
vec2 packDepthToRG( const in float v ) {
	if( v <= 0.0 )
		return vec2( 0., 0. );
	if( v >= 1.0 )
		return vec2( 1., 1. );
	float vuf;
	float gf = modf( v * 256., vuf );
	return vec2( vuf * Inv255, gf );
}
float unpackRGBAToDepth( const in vec4 v ) {
	return dot( v, UnpackFactors4 );
}
float unpackRGBToDepth( const in vec3 v ) {
	return dot( v, UnpackFactors3 );
}
float unpackRGToDepth( const in vec2 v ) {
	return v.r * UnpackFactors2.r + v.g * UnpackFactors2.g;
}
vec4 pack2HalfToRGBA( const in vec2 v ) {
	vec4 r = vec4( v.x, fract( v.x * 255.0 ), v.y, fract( v.y * 255.0 ) );
	return vec4( r.x - r.y / 255.0, r.y, r.z - r.w / 255.0, r.w );
}
vec2 unpackRGBATo2Half( const in vec4 v ) {
	return vec2( v.x + ( v.y / 255.0 ), v.z + ( v.w / 255.0 ) );
}
float viewZToOrthographicDepth( const in float viewZ, const in float near, const in float far ) {
	return ( viewZ + near ) / ( near - far );
}
float orthographicDepthToViewZ( const in float depth, const in float near, const in float far ) {
	#ifdef USE_REVERSED_DEPTH_BUFFER
	
		return depth * ( far - near ) - far;
	#else
		return depth * ( near - far ) - near;
	#endif
}
float viewZToPerspectiveDepth( const in float viewZ, const in float near, const in float far ) {
	return ( ( near + viewZ ) * far ) / ( ( far - near ) * viewZ );
}
float perspectiveDepthToViewZ( const in float depth, const in float near, const in float far ) {
	
	#ifdef USE_REVERSED_DEPTH_BUFFER
		return ( near * far ) / ( ( near - far ) * depth - near );
	#else
		return ( near * far ) / ( ( far - near ) * depth - far );
	#endif
}`,D0=`#ifdef PREMULTIPLIED_ALPHA
	gl_FragColor.rgb *= gl_FragColor.a;
#endif`,L0=`vec4 mvPosition = vec4( transformed, 1.0 );
#ifdef USE_BATCHING
	mvPosition = batchingMatrix * mvPosition;
#endif
#ifdef USE_INSTANCING
	mvPosition = instanceMatrix * mvPosition;
#endif
mvPosition = modelViewMatrix * mvPosition;
gl_Position = projectionMatrix * mvPosition;`,I0=`#ifdef DITHERING
	gl_FragColor.rgb = dithering( gl_FragColor.rgb );
#endif`,U0=`#ifdef DITHERING
	vec3 dithering( vec3 color ) {
		float grid_position = rand( gl_FragCoord.xy );
		vec3 dither_shift_RGB = vec3( 0.25 / 255.0, -0.25 / 255.0, 0.25 / 255.0 );
		dither_shift_RGB = mix( 2.0 * dither_shift_RGB, -2.0 * dither_shift_RGB, grid_position );
		return color + dither_shift_RGB;
	}
#endif`,N0=`float roughnessFactor = roughness;
#ifdef USE_ROUGHNESSMAP
	vec4 texelRoughness = texture2D( roughnessMap, vRoughnessMapUv );
	roughnessFactor *= texelRoughness.g;
#endif`,O0=`#ifdef USE_ROUGHNESSMAP
	uniform sampler2D roughnessMap;
#endif`,F0=`#if NUM_SPOT_LIGHT_COORDS > 0
	varying vec4 vSpotLightCoord[ NUM_SPOT_LIGHT_COORDS ];
#endif
#if NUM_SPOT_LIGHT_MAPS > 0
	uniform sampler2D spotLightMap[ NUM_SPOT_LIGHT_MAPS ];
#endif
#ifdef USE_SHADOWMAP
	#if NUM_DIR_LIGHT_SHADOWS > 0
		#if defined( SHADOWMAP_TYPE_PCF )
			uniform sampler2DShadow directionalShadowMap[ NUM_DIR_LIGHT_SHADOWS ];
		#else
			uniform sampler2D directionalShadowMap[ NUM_DIR_LIGHT_SHADOWS ];
		#endif
		varying vec4 vDirectionalShadowCoord[ NUM_DIR_LIGHT_SHADOWS ];
		struct DirectionalLightShadow {
			float shadowIntensity;
			float shadowBias;
			float shadowNormalBias;
			float shadowRadius;
			vec2 shadowMapSize;
		};
		uniform DirectionalLightShadow directionalLightShadows[ NUM_DIR_LIGHT_SHADOWS ];
	#endif
	#if NUM_SPOT_LIGHT_SHADOWS > 0
		#if defined( SHADOWMAP_TYPE_PCF )
			uniform sampler2DShadow spotShadowMap[ NUM_SPOT_LIGHT_SHADOWS ];
		#else
			uniform sampler2D spotShadowMap[ NUM_SPOT_LIGHT_SHADOWS ];
		#endif
		struct SpotLightShadow {
			float shadowIntensity;
			float shadowBias;
			float shadowNormalBias;
			float shadowRadius;
			vec2 shadowMapSize;
		};
		uniform SpotLightShadow spotLightShadows[ NUM_SPOT_LIGHT_SHADOWS ];
	#endif
	#if NUM_POINT_LIGHT_SHADOWS > 0
		#if defined( SHADOWMAP_TYPE_PCF )
			uniform samplerCubeShadow pointShadowMap[ NUM_POINT_LIGHT_SHADOWS ];
		#elif defined( SHADOWMAP_TYPE_BASIC )
			uniform samplerCube pointShadowMap[ NUM_POINT_LIGHT_SHADOWS ];
		#endif
		varying vec4 vPointShadowCoord[ NUM_POINT_LIGHT_SHADOWS ];
		struct PointLightShadow {
			float shadowIntensity;
			float shadowBias;
			float shadowNormalBias;
			float shadowRadius;
			vec2 shadowMapSize;
			float shadowCameraNear;
			float shadowCameraFar;
		};
		uniform PointLightShadow pointLightShadows[ NUM_POINT_LIGHT_SHADOWS ];
	#endif
	#if defined( SHADOWMAP_TYPE_PCF )
		float interleavedGradientNoise( vec2 position ) {
			return fract( 52.9829189 * fract( dot( position, vec2( 0.06711056, 0.00583715 ) ) ) );
		}
		vec2 vogelDiskSample( int sampleIndex, int samplesCount, float phi ) {
			const float goldenAngle = 2.399963229728653;
			float r = sqrt( ( float( sampleIndex ) + 0.5 ) / float( samplesCount ) );
			float theta = float( sampleIndex ) * goldenAngle + phi;
			return vec2( cos( theta ), sin( theta ) ) * r;
		}
	#endif
	#if defined( SHADOWMAP_TYPE_PCF )
		float getShadow( sampler2DShadow shadowMap, vec2 shadowMapSize, float shadowIntensity, float shadowBias, float shadowRadius, vec4 shadowCoord ) {
			float shadow = 1.0;
			shadowCoord.xyz /= shadowCoord.w;
			shadowCoord.z += shadowBias;
			bool inFrustum = shadowCoord.x >= 0.0 && shadowCoord.x <= 1.0 && shadowCoord.y >= 0.0 && shadowCoord.y <= 1.0;
			bool frustumTest = inFrustum && shadowCoord.z <= 1.0;
			if ( frustumTest ) {
				vec2 texelSize = vec2( 1.0 ) / shadowMapSize;
				float radius = shadowRadius * texelSize.x;
				float phi = interleavedGradientNoise( gl_FragCoord.xy ) * PI2;
				shadow = (
					texture( shadowMap, vec3( shadowCoord.xy + vogelDiskSample( 0, 5, phi ) * radius, shadowCoord.z ) ) +
					texture( shadowMap, vec3( shadowCoord.xy + vogelDiskSample( 1, 5, phi ) * radius, shadowCoord.z ) ) +
					texture( shadowMap, vec3( shadowCoord.xy + vogelDiskSample( 2, 5, phi ) * radius, shadowCoord.z ) ) +
					texture( shadowMap, vec3( shadowCoord.xy + vogelDiskSample( 3, 5, phi ) * radius, shadowCoord.z ) ) +
					texture( shadowMap, vec3( shadowCoord.xy + vogelDiskSample( 4, 5, phi ) * radius, shadowCoord.z ) )
				) * 0.2;
			}
			return mix( 1.0, shadow, shadowIntensity );
		}
	#elif defined( SHADOWMAP_TYPE_VSM )
		float getShadow( sampler2D shadowMap, vec2 shadowMapSize, float shadowIntensity, float shadowBias, float shadowRadius, vec4 shadowCoord ) {
			float shadow = 1.0;
			shadowCoord.xyz /= shadowCoord.w;
			#ifdef USE_REVERSED_DEPTH_BUFFER
				shadowCoord.z -= shadowBias;
			#else
				shadowCoord.z += shadowBias;
			#endif
			bool inFrustum = shadowCoord.x >= 0.0 && shadowCoord.x <= 1.0 && shadowCoord.y >= 0.0 && shadowCoord.y <= 1.0;
			bool frustumTest = inFrustum && shadowCoord.z <= 1.0;
			if ( frustumTest ) {
				vec2 distribution = texture2D( shadowMap, shadowCoord.xy ).rg;
				float mean = distribution.x;
				float variance = distribution.y * distribution.y;
				#ifdef USE_REVERSED_DEPTH_BUFFER
					float hard_shadow = step( mean, shadowCoord.z );
				#else
					float hard_shadow = step( shadowCoord.z, mean );
				#endif
				
				if ( hard_shadow == 1.0 ) {
					shadow = 1.0;
				} else {
					variance = max( variance, 0.0000001 );
					float d = shadowCoord.z - mean;
					float p_max = variance / ( variance + d * d );
					p_max = clamp( ( p_max - 0.3 ) / 0.65, 0.0, 1.0 );
					shadow = max( hard_shadow, p_max );
				}
			}
			return mix( 1.0, shadow, shadowIntensity );
		}
	#else
		float getShadow( sampler2D shadowMap, vec2 shadowMapSize, float shadowIntensity, float shadowBias, float shadowRadius, vec4 shadowCoord ) {
			float shadow = 1.0;
			shadowCoord.xyz /= shadowCoord.w;
			#ifdef USE_REVERSED_DEPTH_BUFFER
				shadowCoord.z -= shadowBias;
			#else
				shadowCoord.z += shadowBias;
			#endif
			bool inFrustum = shadowCoord.x >= 0.0 && shadowCoord.x <= 1.0 && shadowCoord.y >= 0.0 && shadowCoord.y <= 1.0;
			bool frustumTest = inFrustum && shadowCoord.z <= 1.0;
			if ( frustumTest ) {
				float depth = texture2D( shadowMap, shadowCoord.xy ).r;
				#ifdef USE_REVERSED_DEPTH_BUFFER
					shadow = step( depth, shadowCoord.z );
				#else
					shadow = step( shadowCoord.z, depth );
				#endif
			}
			return mix( 1.0, shadow, shadowIntensity );
		}
	#endif
	#if NUM_POINT_LIGHT_SHADOWS > 0
	#if defined( SHADOWMAP_TYPE_PCF )
	float getPointShadow( samplerCubeShadow shadowMap, vec2 shadowMapSize, float shadowIntensity, float shadowBias, float shadowRadius, vec4 shadowCoord, float shadowCameraNear, float shadowCameraFar ) {
		float shadow = 1.0;
		vec3 lightToPosition = shadowCoord.xyz;
		vec3 bd3D = normalize( lightToPosition );
		vec3 absVec = abs( lightToPosition );
		float viewSpaceZ = max( max( absVec.x, absVec.y ), absVec.z );
		if ( viewSpaceZ - shadowCameraFar <= 0.0 && viewSpaceZ - shadowCameraNear >= 0.0 ) {
			#ifdef USE_REVERSED_DEPTH_BUFFER
				float dp = ( shadowCameraNear * ( shadowCameraFar - viewSpaceZ ) ) / ( viewSpaceZ * ( shadowCameraFar - shadowCameraNear ) );
				dp -= shadowBias;
			#else
				float dp = ( shadowCameraFar * ( viewSpaceZ - shadowCameraNear ) ) / ( viewSpaceZ * ( shadowCameraFar - shadowCameraNear ) );
				dp += shadowBias;
			#endif
			float texelSize = shadowRadius / shadowMapSize.x;
			vec3 absDir = abs( bd3D );
			vec3 tangent = absDir.x > absDir.z ? vec3( 0.0, 1.0, 0.0 ) : vec3( 1.0, 0.0, 0.0 );
			tangent = normalize( cross( bd3D, tangent ) );
			vec3 bitangent = cross( bd3D, tangent );
			float phi = interleavedGradientNoise( gl_FragCoord.xy ) * PI2;
			vec2 sample0 = vogelDiskSample( 0, 5, phi );
			vec2 sample1 = vogelDiskSample( 1, 5, phi );
			vec2 sample2 = vogelDiskSample( 2, 5, phi );
			vec2 sample3 = vogelDiskSample( 3, 5, phi );
			vec2 sample4 = vogelDiskSample( 4, 5, phi );
			shadow = (
				texture( shadowMap, vec4( bd3D + ( tangent * sample0.x + bitangent * sample0.y ) * texelSize, dp ) ) +
				texture( shadowMap, vec4( bd3D + ( tangent * sample1.x + bitangent * sample1.y ) * texelSize, dp ) ) +
				texture( shadowMap, vec4( bd3D + ( tangent * sample2.x + bitangent * sample2.y ) * texelSize, dp ) ) +
				texture( shadowMap, vec4( bd3D + ( tangent * sample3.x + bitangent * sample3.y ) * texelSize, dp ) ) +
				texture( shadowMap, vec4( bd3D + ( tangent * sample4.x + bitangent * sample4.y ) * texelSize, dp ) )
			) * 0.2;
		}
		return mix( 1.0, shadow, shadowIntensity );
	}
	#elif defined( SHADOWMAP_TYPE_BASIC )
	float getPointShadow( samplerCube shadowMap, vec2 shadowMapSize, float shadowIntensity, float shadowBias, float shadowRadius, vec4 shadowCoord, float shadowCameraNear, float shadowCameraFar ) {
		float shadow = 1.0;
		vec3 lightToPosition = shadowCoord.xyz;
		vec3 absVec = abs( lightToPosition );
		float viewSpaceZ = max( max( absVec.x, absVec.y ), absVec.z );
		if ( viewSpaceZ - shadowCameraFar <= 0.0 && viewSpaceZ - shadowCameraNear >= 0.0 ) {
			float dp = ( shadowCameraFar * ( viewSpaceZ - shadowCameraNear ) ) / ( viewSpaceZ * ( shadowCameraFar - shadowCameraNear ) );
			dp += shadowBias;
			vec3 bd3D = normalize( lightToPosition );
			float depth = textureCube( shadowMap, bd3D ).r;
			#ifdef USE_REVERSED_DEPTH_BUFFER
				depth = 1.0 - depth;
			#endif
			shadow = step( dp, depth );
		}
		return mix( 1.0, shadow, shadowIntensity );
	}
	#endif
	#endif
#endif`,B0=`#if NUM_SPOT_LIGHT_COORDS > 0
	uniform mat4 spotLightMatrix[ NUM_SPOT_LIGHT_COORDS ];
	varying vec4 vSpotLightCoord[ NUM_SPOT_LIGHT_COORDS ];
#endif
#ifdef USE_SHADOWMAP
	#if NUM_DIR_LIGHT_SHADOWS > 0
		uniform mat4 directionalShadowMatrix[ NUM_DIR_LIGHT_SHADOWS ];
		varying vec4 vDirectionalShadowCoord[ NUM_DIR_LIGHT_SHADOWS ];
		struct DirectionalLightShadow {
			float shadowIntensity;
			float shadowBias;
			float shadowNormalBias;
			float shadowRadius;
			vec2 shadowMapSize;
		};
		uniform DirectionalLightShadow directionalLightShadows[ NUM_DIR_LIGHT_SHADOWS ];
	#endif
	#if NUM_SPOT_LIGHT_SHADOWS > 0
		struct SpotLightShadow {
			float shadowIntensity;
			float shadowBias;
			float shadowNormalBias;
			float shadowRadius;
			vec2 shadowMapSize;
		};
		uniform SpotLightShadow spotLightShadows[ NUM_SPOT_LIGHT_SHADOWS ];
	#endif
	#if NUM_POINT_LIGHT_SHADOWS > 0
		uniform mat4 pointShadowMatrix[ NUM_POINT_LIGHT_SHADOWS ];
		varying vec4 vPointShadowCoord[ NUM_POINT_LIGHT_SHADOWS ];
		struct PointLightShadow {
			float shadowIntensity;
			float shadowBias;
			float shadowNormalBias;
			float shadowRadius;
			vec2 shadowMapSize;
			float shadowCameraNear;
			float shadowCameraFar;
		};
		uniform PointLightShadow pointLightShadows[ NUM_POINT_LIGHT_SHADOWS ];
	#endif
#endif`,z0=`#if ( defined( USE_SHADOWMAP ) && ( NUM_DIR_LIGHT_SHADOWS > 0 || NUM_POINT_LIGHT_SHADOWS > 0 ) ) || ( NUM_SPOT_LIGHT_COORDS > 0 )
	#ifdef HAS_NORMAL
		vec3 shadowWorldNormal = transformNormalByInverseViewMatrix( transformedNormal, viewMatrix );
	#else
		vec3 shadowWorldNormal = vec3( 0.0 );
	#endif
	vec4 shadowWorldPosition;
#endif
#if defined( USE_SHADOWMAP )
	#if NUM_DIR_LIGHT_SHADOWS > 0
		#pragma unroll_loop_start
		for ( int i = 0; i < NUM_DIR_LIGHT_SHADOWS; i ++ ) {
			shadowWorldPosition = worldPosition + vec4( shadowWorldNormal * directionalLightShadows[ i ].shadowNormalBias, 0 );
			vDirectionalShadowCoord[ i ] = directionalShadowMatrix[ i ] * shadowWorldPosition;
		}
		#pragma unroll_loop_end
	#endif
	#if NUM_POINT_LIGHT_SHADOWS > 0
		#pragma unroll_loop_start
		for ( int i = 0; i < NUM_POINT_LIGHT_SHADOWS; i ++ ) {
			shadowWorldPosition = worldPosition + vec4( shadowWorldNormal * pointLightShadows[ i ].shadowNormalBias, 0 );
			vPointShadowCoord[ i ] = pointShadowMatrix[ i ] * shadowWorldPosition;
		}
		#pragma unroll_loop_end
	#endif
#endif
#if NUM_SPOT_LIGHT_COORDS > 0
	#pragma unroll_loop_start
	for ( int i = 0; i < NUM_SPOT_LIGHT_COORDS; i ++ ) {
		shadowWorldPosition = worldPosition;
		#if ( defined( USE_SHADOWMAP ) && UNROLLED_LOOP_INDEX < NUM_SPOT_LIGHT_SHADOWS )
			shadowWorldPosition.xyz += shadowWorldNormal * spotLightShadows[ i ].shadowNormalBias;
		#endif
		vSpotLightCoord[ i ] = spotLightMatrix[ i ] * shadowWorldPosition;
	}
	#pragma unroll_loop_end
#endif`,H0=`float getShadowMask() {
	float shadow = 1.0;
	#ifdef USE_SHADOWMAP
	#if NUM_DIR_LIGHT_SHADOWS > 0
	DirectionalLightShadow directionalLight;
	#pragma unroll_loop_start
	for ( int i = 0; i < NUM_DIR_LIGHT_SHADOWS; i ++ ) {
		directionalLight = directionalLightShadows[ i ];
		shadow *= receiveShadow ? getShadow( directionalShadowMap[ i ], directionalLight.shadowMapSize, directionalLight.shadowIntensity, directionalLight.shadowBias, directionalLight.shadowRadius, vDirectionalShadowCoord[ i ] ) : 1.0;
	}
	#pragma unroll_loop_end
	#endif
	#if NUM_SPOT_LIGHT_SHADOWS > 0
	SpotLightShadow spotLight;
	#pragma unroll_loop_start
	for ( int i = 0; i < NUM_SPOT_LIGHT_SHADOWS; i ++ ) {
		spotLight = spotLightShadows[ i ];
		shadow *= receiveShadow ? getShadow( spotShadowMap[ i ], spotLight.shadowMapSize, spotLight.shadowIntensity, spotLight.shadowBias, spotLight.shadowRadius, vSpotLightCoord[ i ] ) : 1.0;
	}
	#pragma unroll_loop_end
	#endif
	#if NUM_POINT_LIGHT_SHADOWS > 0 && ( defined( SHADOWMAP_TYPE_PCF ) || defined( SHADOWMAP_TYPE_BASIC ) )
	PointLightShadow pointLight;
	#pragma unroll_loop_start
	for ( int i = 0; i < NUM_POINT_LIGHT_SHADOWS; i ++ ) {
		pointLight = pointLightShadows[ i ];
		shadow *= receiveShadow ? getPointShadow( pointShadowMap[ i ], pointLight.shadowMapSize, pointLight.shadowIntensity, pointLight.shadowBias, pointLight.shadowRadius, vPointShadowCoord[ i ], pointLight.shadowCameraNear, pointLight.shadowCameraFar ) : 1.0;
	}
	#pragma unroll_loop_end
	#endif
	#endif
	return shadow;
}`,V0=`#ifdef USE_SKINNING
	mat4 boneMatX = getBoneMatrix( skinIndex.x );
	mat4 boneMatY = getBoneMatrix( skinIndex.y );
	mat4 boneMatZ = getBoneMatrix( skinIndex.z );
	mat4 boneMatW = getBoneMatrix( skinIndex.w );
#endif`,G0=`#ifdef USE_SKINNING
	uniform mat4 bindMatrix;
	uniform mat4 bindMatrixInverse;
	uniform highp sampler2D boneTexture;
	mat4 getBoneMatrix( const in float i ) {
		int size = textureSize( boneTexture, 0 ).x;
		int j = int( i ) * 4;
		int x = j % size;
		int y = j / size;
		vec4 v1 = texelFetch( boneTexture, ivec2( x, y ), 0 );
		vec4 v2 = texelFetch( boneTexture, ivec2( x + 1, y ), 0 );
		vec4 v3 = texelFetch( boneTexture, ivec2( x + 2, y ), 0 );
		vec4 v4 = texelFetch( boneTexture, ivec2( x + 3, y ), 0 );
		return mat4( v1, v2, v3, v4 );
	}
#endif`,k0=`#ifdef USE_SKINNING
	vec4 skinVertex = bindMatrix * vec4( transformed, 1.0 );
	vec4 skinned = vec4( 0.0 );
	skinned += boneMatX * skinVertex * skinWeight.x;
	skinned += boneMatY * skinVertex * skinWeight.y;
	skinned += boneMatZ * skinVertex * skinWeight.z;
	skinned += boneMatW * skinVertex * skinWeight.w;
	transformed = ( bindMatrixInverse * skinned ).xyz;
#endif`,W0=`#ifdef USE_SKINNING
	mat4 skinMatrix = mat4( 0.0 );
	skinMatrix += skinWeight.x * boneMatX;
	skinMatrix += skinWeight.y * boneMatY;
	skinMatrix += skinWeight.z * boneMatZ;
	skinMatrix += skinWeight.w * boneMatW;
	skinMatrix = bindMatrixInverse * skinMatrix * bindMatrix;
	objectNormal = vec4( skinMatrix * vec4( objectNormal, 0.0 ) ).xyz;
	#ifdef USE_TANGENT
		objectTangent = vec4( skinMatrix * vec4( objectTangent, 0.0 ) ).xyz;
	#endif
#endif`,X0=`float specularStrength;
#ifdef USE_SPECULARMAP
	vec4 texelSpecular = texture2D( specularMap, vSpecularMapUv );
	specularStrength = texelSpecular.r;
#else
	specularStrength = 1.0;
#endif`,q0=`#ifdef USE_SPECULARMAP
	uniform sampler2D specularMap;
#endif`,Y0=`#if defined( TONE_MAPPING )
	gl_FragColor.rgb = toneMapping( gl_FragColor.rgb );
#endif`,$0=`#ifndef saturate
#define saturate( a ) clamp( a, 0.0, 1.0 )
#endif
uniform float toneMappingExposure;
vec3 LinearToneMapping( vec3 color ) {
	return saturate( toneMappingExposure * color );
}
vec3 ReinhardToneMapping( vec3 color ) {
	color *= toneMappingExposure;
	return saturate( color / ( vec3( 1.0 ) + color ) );
}
vec3 CineonToneMapping( vec3 color ) {
	color *= toneMappingExposure;
	color = max( vec3( 0.0 ), color - 0.004 );
	return pow( ( color * ( 6.2 * color + 0.5 ) ) / ( color * ( 6.2 * color + 1.7 ) + 0.06 ), vec3( 2.2 ) );
}
vec3 RRTAndODTFit( vec3 v ) {
	vec3 a = v * ( v + 0.0245786 ) - 0.000090537;
	vec3 b = v * ( 0.983729 * v + 0.4329510 ) + 0.238081;
	return a / b;
}
vec3 ACESFilmicToneMapping( vec3 color ) {
	const mat3 ACESInputMat = mat3(
		vec3( 0.59719, 0.07600, 0.02840 ),		vec3( 0.35458, 0.90834, 0.13383 ),
		vec3( 0.04823, 0.01566, 0.83777 )
	);
	const mat3 ACESOutputMat = mat3(
		vec3(  1.60475, -0.10208, -0.00327 ),		vec3( -0.53108,  1.10813, -0.07276 ),
		vec3( -0.07367, -0.00605,  1.07602 )
	);
	color *= toneMappingExposure / 0.6;
	color = ACESInputMat * color;
	color = RRTAndODTFit( color );
	color = ACESOutputMat * color;
	return saturate( color );
}
const mat3 LINEAR_REC2020_TO_LINEAR_SRGB = mat3(
	vec3( 1.6605, - 0.1246, - 0.0182 ),
	vec3( - 0.5876, 1.1329, - 0.1006 ),
	vec3( - 0.0728, - 0.0083, 1.1187 )
);
const mat3 LINEAR_SRGB_TO_LINEAR_REC2020 = mat3(
	vec3( 0.6274, 0.0691, 0.0164 ),
	vec3( 0.3293, 0.9195, 0.0880 ),
	vec3( 0.0433, 0.0113, 0.8956 )
);
vec3 agxDefaultContrastApprox( vec3 x ) {
	vec3 x2 = x * x;
	vec3 x4 = x2 * x2;
	return + 15.5 * x4 * x2
		- 40.14 * x4 * x
		+ 31.96 * x4
		- 6.868 * x2 * x
		+ 0.4298 * x2
		+ 0.1191 * x
		- 0.00232;
}
vec3 AgXToneMapping( vec3 color ) {
	const mat3 AgXInsetMatrix = mat3(
		vec3( 0.856627153315983, 0.137318972929847, 0.11189821299995 ),
		vec3( 0.0951212405381588, 0.761241990602591, 0.0767994186031903 ),
		vec3( 0.0482516061458583, 0.101439036467562, 0.811302368396859 )
	);
	const mat3 AgXOutsetMatrix = mat3(
		vec3( 1.1271005818144368, - 0.1413297634984383, - 0.14132976349843826 ),
		vec3( - 0.11060664309660323, 1.157823702216272, - 0.11060664309660294 ),
		vec3( - 0.016493938717834573, - 0.016493938717834257, 1.2519364065950405 )
	);
	const float AgxMinEv = - 12.47393;	const float AgxMaxEv = 4.026069;
	color *= toneMappingExposure;
	color = LINEAR_SRGB_TO_LINEAR_REC2020 * color;
	color = AgXInsetMatrix * color;
	color = max( color, 1e-10 );	color = log2( color );
	color = ( color - AgxMinEv ) / ( AgxMaxEv - AgxMinEv );
	color = clamp( color, 0.0, 1.0 );
	color = agxDefaultContrastApprox( color );
	color = AgXOutsetMatrix * color;
	color = pow( max( vec3( 0.0 ), color ), vec3( 2.2 ) );
	color = LINEAR_REC2020_TO_LINEAR_SRGB * color;
	color = clamp( color, 0.0, 1.0 );
	return color;
}
vec3 NeutralToneMapping( vec3 color ) {
	const float StartCompression = 0.8 - 0.04;
	const float Desaturation = 0.15;
	color *= toneMappingExposure;
	float x = min( color.r, min( color.g, color.b ) );
	float offset = x < 0.08 ? x - 6.25 * x * x : 0.04;
	color -= offset;
	float peak = max( color.r, max( color.g, color.b ) );
	if ( peak < StartCompression ) return color;
	float d = 1. - StartCompression;
	float newPeak = 1. - d * d / ( peak + d - StartCompression );
	color *= newPeak / peak;
	float g = 1. - 1. / ( Desaturation * ( peak - newPeak ) + 1. );
	return mix( color, vec3( newPeak ), g );
}
vec3 CustomToneMapping( vec3 color ) { return color; }`,K0=`#ifdef USE_TRANSMISSION
	material.transmission = transmission;
	material.transmissionAlpha = 1.0;
	material.thickness = thickness;
	material.attenuationDistance = attenuationDistance;
	material.attenuationColor = attenuationColor;
	#ifdef USE_TRANSMISSIONMAP
		material.transmission *= texture2D( transmissionMap, vTransmissionMapUv ).r;
	#endif
	#ifdef USE_THICKNESSMAP
		material.thickness *= texture2D( thicknessMap, vThicknessMapUv ).g;
	#endif
	vec3 pos = vWorldPosition;
	vec3 v = normalize( cameraPosition - pos );
	vec3 n = transformNormalByInverseViewMatrix( normal, viewMatrix );
	vec4 transmitted = getIBLVolumeRefraction(
		n, v, material.roughness, material.diffuseContribution, material.specularColorBlended, material.specularF90,
		pos, modelMatrix, viewMatrix, projectionMatrix, material.dispersion, material.ior, material.thickness,
		material.attenuationColor, material.attenuationDistance );
	material.transmissionAlpha = mix( material.transmissionAlpha, transmitted.a, material.transmission );
	totalDiffuse = mix( totalDiffuse, transmitted.rgb, material.transmission );
#endif`,Z0=`#ifdef USE_TRANSMISSION
	uniform float transmission;
	uniform float thickness;
	uniform float attenuationDistance;
	uniform vec3 attenuationColor;
	#ifdef USE_TRANSMISSIONMAP
		uniform sampler2D transmissionMap;
	#endif
	#ifdef USE_THICKNESSMAP
		uniform sampler2D thicknessMap;
	#endif
	uniform vec2 transmissionSamplerSize;
	uniform sampler2D transmissionSamplerMap;
	uniform mat4 modelMatrix;
	uniform mat4 projectionMatrix;
	varying vec3 vWorldPosition;
	float w0( float a ) {
		return ( 1.0 / 6.0 ) * ( a * ( a * ( - a + 3.0 ) - 3.0 ) + 1.0 );
	}
	float w1( float a ) {
		return ( 1.0 / 6.0 ) * ( a *  a * ( 3.0 * a - 6.0 ) + 4.0 );
	}
	float w2( float a ){
		return ( 1.0 / 6.0 ) * ( a * ( a * ( - 3.0 * a + 3.0 ) + 3.0 ) + 1.0 );
	}
	float w3( float a ) {
		return ( 1.0 / 6.0 ) * ( a * a * a );
	}
	float g0( float a ) {
		return w0( a ) + w1( a );
	}
	float g1( float a ) {
		return w2( a ) + w3( a );
	}
	float h0( float a ) {
		return - 1.0 + w1( a ) / ( w0( a ) + w1( a ) );
	}
	float h1( float a ) {
		return 1.0 + w3( a ) / ( w2( a ) + w3( a ) );
	}
	vec4 bicubic( sampler2D tex, vec2 uv, vec4 texelSize, float lod ) {
		uv = uv * texelSize.zw + 0.5;
		vec2 iuv = floor( uv );
		vec2 fuv = fract( uv );
		float g0x = g0( fuv.x );
		float g1x = g1( fuv.x );
		float h0x = h0( fuv.x );
		float h1x = h1( fuv.x );
		float h0y = h0( fuv.y );
		float h1y = h1( fuv.y );
		vec2 p0 = ( vec2( iuv.x + h0x, iuv.y + h0y ) - 0.5 ) * texelSize.xy;
		vec2 p1 = ( vec2( iuv.x + h1x, iuv.y + h0y ) - 0.5 ) * texelSize.xy;
		vec2 p2 = ( vec2( iuv.x + h0x, iuv.y + h1y ) - 0.5 ) * texelSize.xy;
		vec2 p3 = ( vec2( iuv.x + h1x, iuv.y + h1y ) - 0.5 ) * texelSize.xy;
		return g0( fuv.y ) * ( g0x * textureLod( tex, p0, lod ) + g1x * textureLod( tex, p1, lod ) ) +
			g1( fuv.y ) * ( g0x * textureLod( tex, p2, lod ) + g1x * textureLod( tex, p3, lod ) );
	}
	vec4 textureBicubic( sampler2D sampler, vec2 uv, float lod ) {
		vec2 fLodSize = vec2( textureSize( sampler, int( lod ) ) );
		vec2 cLodSize = vec2( textureSize( sampler, int( lod + 1.0 ) ) );
		vec2 fLodSizeInv = 1.0 / fLodSize;
		vec2 cLodSizeInv = 1.0 / cLodSize;
		vec4 fSample = bicubic( sampler, uv, vec4( fLodSizeInv, fLodSize ), floor( lod ) );
		vec4 cSample = bicubic( sampler, uv, vec4( cLodSizeInv, cLodSize ), ceil( lod ) );
		return mix( fSample, cSample, fract( lod ) );
	}
	vec3 getVolumeTransmissionRay( const in vec3 n, const in vec3 v, const in float thickness, const in float ior, const in mat4 modelMatrix ) {
		vec3 refractionVector = refract( - v, normalize( n ), 1.0 / ior );
		vec3 modelScale;
		modelScale.x = length( vec3( modelMatrix[ 0 ].xyz ) );
		modelScale.y = length( vec3( modelMatrix[ 1 ].xyz ) );
		modelScale.z = length( vec3( modelMatrix[ 2 ].xyz ) );
		return normalize( refractionVector ) * thickness * modelScale;
	}
	float applyIorToRoughness( const in float roughness, const in float ior ) {
		return roughness * clamp( ior * 2.0 - 2.0, 0.0, 1.0 );
	}
	vec4 getTransmissionSample( const in vec2 fragCoord, const in float roughness, const in float ior ) {
		float lod = log2( transmissionSamplerSize.x ) * applyIorToRoughness( roughness, ior );
		return textureBicubic( transmissionSamplerMap, fragCoord.xy, lod );
	}
	vec3 volumeAttenuation( const in float transmissionDistance, const in vec3 attenuationColor, const in float attenuationDistance ) {
		if ( isinf( attenuationDistance ) ) {
			return vec3( 1.0 );
		} else {
			vec3 attenuationCoefficient = -log( attenuationColor ) / attenuationDistance;
			vec3 transmittance = exp( - attenuationCoefficient * transmissionDistance );			return transmittance;
		}
	}
	vec4 getIBLVolumeRefraction( const in vec3 n, const in vec3 v, const in float roughness, const in vec3 diffuseColor,
		const in vec3 specularColor, const in float specularF90, const in vec3 position, const in mat4 modelMatrix,
		const in mat4 viewMatrix, const in mat4 projMatrix, const in float dispersion, const in float ior, const in float thickness,
		const in vec3 attenuationColor, const in float attenuationDistance ) {
		vec4 transmittedLight;
		vec3 transmittance;
		#ifdef USE_DISPERSION
			float halfSpread = ( ior - 1.0 ) * 0.025 * dispersion;
			vec3 iors = vec3( ior - halfSpread, ior, ior + halfSpread );
			for ( int i = 0; i < 3; i ++ ) {
				vec3 transmissionRay = getVolumeTransmissionRay( n, v, thickness, iors[ i ], modelMatrix );
				vec3 refractedRayExit = position + transmissionRay;
				vec4 ndcPos = projMatrix * viewMatrix * vec4( refractedRayExit, 1.0 );
				vec2 refractionCoords = ndcPos.xy / ndcPos.w;
				refractionCoords += 1.0;
				refractionCoords /= 2.0;
				vec4 transmissionSample = getTransmissionSample( refractionCoords, roughness, iors[ i ] );
				transmittedLight[ i ] = transmissionSample[ i ];
				transmittedLight.a += transmissionSample.a;
				transmittance[ i ] = diffuseColor[ i ] * volumeAttenuation( length( transmissionRay ), attenuationColor, attenuationDistance )[ i ];
			}
			transmittedLight.a /= 3.0;
		#else
			vec3 transmissionRay = getVolumeTransmissionRay( n, v, thickness, ior, modelMatrix );
			vec3 refractedRayExit = position + transmissionRay;
			vec4 ndcPos = projMatrix * viewMatrix * vec4( refractedRayExit, 1.0 );
			vec2 refractionCoords = ndcPos.xy / ndcPos.w;
			refractionCoords += 1.0;
			refractionCoords /= 2.0;
			transmittedLight = getTransmissionSample( refractionCoords, roughness, ior );
			transmittance = diffuseColor * volumeAttenuation( length( transmissionRay ), attenuationColor, attenuationDistance );
		#endif
		vec3 attenuatedColor = transmittance * transmittedLight.rgb;
		vec3 F = EnvironmentBRDF( n, v, specularColor, specularF90, roughness );
		float transmittanceFactor = ( transmittance.r + transmittance.g + transmittance.b ) / 3.0;
		return vec4( ( 1.0 - F ) * attenuatedColor, 1.0 - ( 1.0 - transmittedLight.a ) * transmittanceFactor );
	}
#endif`,J0=`#if defined( USE_UV ) || defined( USE_ANISOTROPY )
	varying vec2 vUv;
#endif
#ifdef USE_MAP
	varying vec2 vMapUv;
#endif
#ifdef USE_ALPHAMAP
	varying vec2 vAlphaMapUv;
#endif
#ifdef USE_LIGHTMAP
	varying vec2 vLightMapUv;
#endif
#ifdef USE_AOMAP
	varying vec2 vAoMapUv;
#endif
#ifdef USE_BUMPMAP
	varying vec2 vBumpMapUv;
#endif
#ifdef USE_NORMALMAP
	varying vec2 vNormalMapUv;
#endif
#ifdef USE_EMISSIVEMAP
	varying vec2 vEmissiveMapUv;
#endif
#ifdef USE_METALNESSMAP
	varying vec2 vMetalnessMapUv;
#endif
#ifdef USE_ROUGHNESSMAP
	varying vec2 vRoughnessMapUv;
#endif
#ifdef USE_ANISOTROPYMAP
	varying vec2 vAnisotropyMapUv;
#endif
#ifdef USE_CLEARCOATMAP
	varying vec2 vClearcoatMapUv;
#endif
#ifdef USE_CLEARCOAT_NORMALMAP
	varying vec2 vClearcoatNormalMapUv;
#endif
#ifdef USE_CLEARCOAT_ROUGHNESSMAP
	varying vec2 vClearcoatRoughnessMapUv;
#endif
#ifdef USE_IRIDESCENCEMAP
	varying vec2 vIridescenceMapUv;
#endif
#ifdef USE_IRIDESCENCE_THICKNESSMAP
	varying vec2 vIridescenceThicknessMapUv;
#endif
#ifdef USE_SHEEN_COLORMAP
	varying vec2 vSheenColorMapUv;
#endif
#ifdef USE_SHEEN_ROUGHNESSMAP
	varying vec2 vSheenRoughnessMapUv;
#endif
#ifdef USE_SPECULARMAP
	varying vec2 vSpecularMapUv;
#endif
#ifdef USE_SPECULAR_COLORMAP
	varying vec2 vSpecularColorMapUv;
#endif
#ifdef USE_SPECULAR_INTENSITYMAP
	varying vec2 vSpecularIntensityMapUv;
#endif
#ifdef USE_TRANSMISSIONMAP
	uniform mat3 transmissionMapTransform;
	varying vec2 vTransmissionMapUv;
#endif
#ifdef USE_THICKNESSMAP
	uniform mat3 thicknessMapTransform;
	varying vec2 vThicknessMapUv;
#endif`,Q0=`#if defined( USE_UV ) || defined( USE_ANISOTROPY )
	varying vec2 vUv;
#endif
#ifdef USE_MAP
	uniform mat3 mapTransform;
	varying vec2 vMapUv;
#endif
#ifdef USE_ALPHAMAP
	uniform mat3 alphaMapTransform;
	varying vec2 vAlphaMapUv;
#endif
#ifdef USE_LIGHTMAP
	uniform mat3 lightMapTransform;
	varying vec2 vLightMapUv;
#endif
#ifdef USE_AOMAP
	uniform mat3 aoMapTransform;
	varying vec2 vAoMapUv;
#endif
#ifdef USE_BUMPMAP
	uniform mat3 bumpMapTransform;
	varying vec2 vBumpMapUv;
#endif
#ifdef USE_NORMALMAP
	uniform mat3 normalMapTransform;
	varying vec2 vNormalMapUv;
#endif
#ifdef USE_DISPLACEMENTMAP
	uniform mat3 displacementMapTransform;
	varying vec2 vDisplacementMapUv;
#endif
#ifdef USE_EMISSIVEMAP
	uniform mat3 emissiveMapTransform;
	varying vec2 vEmissiveMapUv;
#endif
#ifdef USE_METALNESSMAP
	uniform mat3 metalnessMapTransform;
	varying vec2 vMetalnessMapUv;
#endif
#ifdef USE_ROUGHNESSMAP
	uniform mat3 roughnessMapTransform;
	varying vec2 vRoughnessMapUv;
#endif
#ifdef USE_ANISOTROPYMAP
	uniform mat3 anisotropyMapTransform;
	varying vec2 vAnisotropyMapUv;
#endif
#ifdef USE_CLEARCOATMAP
	uniform mat3 clearcoatMapTransform;
	varying vec2 vClearcoatMapUv;
#endif
#ifdef USE_CLEARCOAT_NORMALMAP
	uniform mat3 clearcoatNormalMapTransform;
	varying vec2 vClearcoatNormalMapUv;
#endif
#ifdef USE_CLEARCOAT_ROUGHNESSMAP
	uniform mat3 clearcoatRoughnessMapTransform;
	varying vec2 vClearcoatRoughnessMapUv;
#endif
#ifdef USE_SHEEN_COLORMAP
	uniform mat3 sheenColorMapTransform;
	varying vec2 vSheenColorMapUv;
#endif
#ifdef USE_SHEEN_ROUGHNESSMAP
	uniform mat3 sheenRoughnessMapTransform;
	varying vec2 vSheenRoughnessMapUv;
#endif
#ifdef USE_IRIDESCENCEMAP
	uniform mat3 iridescenceMapTransform;
	varying vec2 vIridescenceMapUv;
#endif
#ifdef USE_IRIDESCENCE_THICKNESSMAP
	uniform mat3 iridescenceThicknessMapTransform;
	varying vec2 vIridescenceThicknessMapUv;
#endif
#ifdef USE_SPECULARMAP
	uniform mat3 specularMapTransform;
	varying vec2 vSpecularMapUv;
#endif
#ifdef USE_SPECULAR_COLORMAP
	uniform mat3 specularColorMapTransform;
	varying vec2 vSpecularColorMapUv;
#endif
#ifdef USE_SPECULAR_INTENSITYMAP
	uniform mat3 specularIntensityMapTransform;
	varying vec2 vSpecularIntensityMapUv;
#endif
#ifdef USE_TRANSMISSIONMAP
	uniform mat3 transmissionMapTransform;
	varying vec2 vTransmissionMapUv;
#endif
#ifdef USE_THICKNESSMAP
	uniform mat3 thicknessMapTransform;
	varying vec2 vThicknessMapUv;
#endif`,j0=`#if defined( USE_UV ) || defined( USE_ANISOTROPY )
	vUv = vec3( uv, 1 ).xy;
#endif
#ifdef USE_MAP
	vMapUv = ( mapTransform * vec3( MAP_UV, 1 ) ).xy;
#endif
#ifdef USE_ALPHAMAP
	vAlphaMapUv = ( alphaMapTransform * vec3( ALPHAMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_LIGHTMAP
	vLightMapUv = ( lightMapTransform * vec3( LIGHTMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_AOMAP
	vAoMapUv = ( aoMapTransform * vec3( AOMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_BUMPMAP
	vBumpMapUv = ( bumpMapTransform * vec3( BUMPMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_NORMALMAP
	vNormalMapUv = ( normalMapTransform * vec3( NORMALMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_DISPLACEMENTMAP
	vDisplacementMapUv = ( displacementMapTransform * vec3( DISPLACEMENTMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_EMISSIVEMAP
	vEmissiveMapUv = ( emissiveMapTransform * vec3( EMISSIVEMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_METALNESSMAP
	vMetalnessMapUv = ( metalnessMapTransform * vec3( METALNESSMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_ROUGHNESSMAP
	vRoughnessMapUv = ( roughnessMapTransform * vec3( ROUGHNESSMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_ANISOTROPYMAP
	vAnisotropyMapUv = ( anisotropyMapTransform * vec3( ANISOTROPYMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_CLEARCOATMAP
	vClearcoatMapUv = ( clearcoatMapTransform * vec3( CLEARCOATMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_CLEARCOAT_NORMALMAP
	vClearcoatNormalMapUv = ( clearcoatNormalMapTransform * vec3( CLEARCOAT_NORMALMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_CLEARCOAT_ROUGHNESSMAP
	vClearcoatRoughnessMapUv = ( clearcoatRoughnessMapTransform * vec3( CLEARCOAT_ROUGHNESSMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_IRIDESCENCEMAP
	vIridescenceMapUv = ( iridescenceMapTransform * vec3( IRIDESCENCEMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_IRIDESCENCE_THICKNESSMAP
	vIridescenceThicknessMapUv = ( iridescenceThicknessMapTransform * vec3( IRIDESCENCE_THICKNESSMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_SHEEN_COLORMAP
	vSheenColorMapUv = ( sheenColorMapTransform * vec3( SHEEN_COLORMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_SHEEN_ROUGHNESSMAP
	vSheenRoughnessMapUv = ( sheenRoughnessMapTransform * vec3( SHEEN_ROUGHNESSMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_SPECULARMAP
	vSpecularMapUv = ( specularMapTransform * vec3( SPECULARMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_SPECULAR_COLORMAP
	vSpecularColorMapUv = ( specularColorMapTransform * vec3( SPECULAR_COLORMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_SPECULAR_INTENSITYMAP
	vSpecularIntensityMapUv = ( specularIntensityMapTransform * vec3( SPECULAR_INTENSITYMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_TRANSMISSIONMAP
	vTransmissionMapUv = ( transmissionMapTransform * vec3( TRANSMISSIONMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_THICKNESSMAP
	vThicknessMapUv = ( thicknessMapTransform * vec3( THICKNESSMAP_UV, 1 ) ).xy;
#endif`,ex=`#if defined( USE_ENVMAP ) || defined( DISTANCE ) || defined ( USE_SHADOWMAP ) || defined ( USE_TRANSMISSION ) || NUM_SPOT_LIGHT_COORDS > 0
	vec4 worldPosition = vec4( transformed, 1.0 );
	#ifdef USE_BATCHING
		worldPosition = batchingMatrix * worldPosition;
	#endif
	#ifdef USE_INSTANCING
		worldPosition = instanceMatrix * worldPosition;
	#endif
	worldPosition = modelMatrix * worldPosition;
#endif`;const tx=`varying vec2 vUv;
uniform mat3 uvTransform;
void main() {
	vUv = ( uvTransform * vec3( uv, 1 ) ).xy;
	gl_Position = vec4( position.xy, 1.0, 1.0 );
}`,nx=`uniform sampler2D t2D;
uniform float backgroundIntensity;
varying vec2 vUv;
void main() {
	vec4 texColor = texture2D( t2D, vUv );
	#ifdef DECODE_VIDEO_TEXTURE
		texColor = vec4( mix( pow( texColor.rgb * 0.9478672986 + vec3( 0.0521327014 ), vec3( 2.4 ) ), texColor.rgb * 0.0773993808, vec3( lessThanEqual( texColor.rgb, vec3( 0.04045 ) ) ) ), texColor.w );
	#endif
	texColor.rgb *= backgroundIntensity;
	gl_FragColor = texColor;
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
}`,ix=`varying vec3 vWorldDirection;
#include <common>
void main() {
	vWorldDirection = transformDirection( position, modelMatrix );
	#include <begin_vertex>
	#include <project_vertex>
	gl_Position.z = gl_Position.w;
}`,rx=`#ifdef ENVMAP_TYPE_CUBE
	uniform samplerCube envMap;
#elif defined( ENVMAP_TYPE_CUBE_UV )
	uniform sampler2D envMap;
#endif
uniform float backgroundBlurriness;
uniform float backgroundIntensity;
uniform mat3 backgroundRotation;
varying vec3 vWorldDirection;
#include <cube_uv_reflection_fragment>
void main() {
	#ifdef ENVMAP_TYPE_CUBE
		vec4 texColor = textureCube( envMap, backgroundRotation * vWorldDirection );
	#elif defined( ENVMAP_TYPE_CUBE_UV )
		vec4 texColor = textureCubeUV( envMap, backgroundRotation * vWorldDirection, backgroundBlurriness );
	#else
		vec4 texColor = vec4( 0.0, 0.0, 0.0, 1.0 );
	#endif
	texColor.rgb *= backgroundIntensity;
	gl_FragColor = texColor;
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
}`,sx=`varying vec3 vWorldDirection;
#include <common>
void main() {
	vWorldDirection = transformDirection( position, modelMatrix );
	#include <begin_vertex>
	#include <project_vertex>
	gl_Position.z = gl_Position.w;
}`,ax=`uniform samplerCube tCube;
uniform float tFlip;
uniform float opacity;
varying vec3 vWorldDirection;
void main() {
	vec4 texColor = textureCube( tCube, vec3( tFlip * vWorldDirection.x, vWorldDirection.yz ) );
	gl_FragColor = texColor;
	gl_FragColor.a *= opacity;
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
}`,ox=`#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <displacementmap_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
varying vec2 vHighPrecisionZW;
void main() {
	#include <uv_vertex>
	#include <batching_vertex>
	#include <skinbase_vertex>
	#include <morphinstance_vertex>
	#ifdef USE_DISPLACEMENTMAP
		#include <beginnormal_vertex>
		#include <morphnormal_vertex>
		#include <skinnormal_vertex>
	#endif
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <displacementmap_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	vHighPrecisionZW = gl_Position.zw;
}`,lx=`#if DEPTH_PACKING == 3200
	uniform float opacity;
#endif
#include <common>
#include <packing>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
varying vec2 vHighPrecisionZW;
void main() {
	vec4 diffuseColor = vec4( 1.0 );
	#include <clipping_planes_fragment>
	#if DEPTH_PACKING == 3200
		diffuseColor.a = opacity;
	#endif
	#include <map_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	#include <logdepthbuf_fragment>
	#ifdef USE_REVERSED_DEPTH_BUFFER
		float fragCoordZ = vHighPrecisionZW[ 0 ] / vHighPrecisionZW[ 1 ];
	#else
		float fragCoordZ = 0.5 * vHighPrecisionZW[ 0 ] / vHighPrecisionZW[ 1 ] + 0.5;
	#endif
	#if DEPTH_PACKING == 3200
		gl_FragColor = vec4( vec3( 1.0 - fragCoordZ ), opacity );
	#elif DEPTH_PACKING == 3201
		gl_FragColor = packDepthToRGBA( fragCoordZ );
	#elif DEPTH_PACKING == 3202
		gl_FragColor = vec4( packDepthToRGB( fragCoordZ ), 1.0 );
	#elif DEPTH_PACKING == 3203
		gl_FragColor = vec4( packDepthToRG( fragCoordZ ), 0.0, 1.0 );
	#endif
}`,cx=`#define DISTANCE
varying vec3 vWorldPosition;
#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <displacementmap_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	#include <batching_vertex>
	#include <skinbase_vertex>
	#include <morphinstance_vertex>
	#ifdef USE_DISPLACEMENTMAP
		#include <beginnormal_vertex>
		#include <morphnormal_vertex>
		#include <skinnormal_vertex>
	#endif
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <displacementmap_vertex>
	#include <project_vertex>
	#include <worldpos_vertex>
	#include <clipping_planes_vertex>
	vWorldPosition = worldPosition.xyz;
}`,ux=`#define DISTANCE
uniform vec3 referencePosition;
uniform float nearDistance;
uniform float farDistance;
varying vec3 vWorldPosition;
#include <common>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( 1.0 );
	#include <clipping_planes_fragment>
	#include <map_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	float dist = length( vWorldPosition - referencePosition );
	dist = ( dist - nearDistance ) / ( farDistance - nearDistance );
	dist = saturate( dist );
	gl_FragColor = vec4( dist, 0.0, 0.0, 1.0 );
}`,fx=`varying vec3 vWorldDirection;
#include <common>
void main() {
	vWorldDirection = transformDirection( position, modelMatrix );
	#include <begin_vertex>
	#include <project_vertex>
}`,dx=`uniform sampler2D tEquirect;
varying vec3 vWorldDirection;
#include <common>
void main() {
	vec3 direction = normalize( vWorldDirection );
	vec2 sampleUV = equirectUv( direction );
	gl_FragColor = texture2D( tEquirect, sampleUV );
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
}`,hx=`uniform float scale;
attribute float lineDistance;
varying float vLineDistance;
#include <common>
#include <uv_pars_vertex>
#include <color_pars_vertex>
#include <fog_pars_vertex>
#include <morphtarget_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	vLineDistance = scale * lineDistance;
	#include <uv_vertex>
	#include <color_vertex>
	#include <morphinstance_vertex>
	#include <morphcolor_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	#include <fog_vertex>
}`,px=`uniform vec3 diffuse;
uniform float opacity;
uniform float dashSize;
uniform float totalSize;
varying float vLineDistance;
#include <common>
#include <color_pars_fragment>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <fog_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	if ( mod( vLineDistance, totalSize ) > dashSize ) {
		discard;
	}
	vec3 outgoingLight = vec3( 0.0 );
	#include <logdepthbuf_fragment>
	#include <map_fragment>
	#include <color_fragment>
	outgoingLight = diffuseColor.rgb;
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
	#include <premultiplied_alpha_fragment>
}`,mx=`#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <envmap_pars_vertex>
#include <color_pars_vertex>
#include <fog_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	#include <color_vertex>
	#include <morphinstance_vertex>
	#include <morphcolor_vertex>
	#include <batching_vertex>
	#if defined ( USE_ENVMAP ) || defined ( USE_SKINNING )
		#include <beginnormal_vertex>
		#include <morphnormal_vertex>
		#include <skinbase_vertex>
		#include <skinnormal_vertex>
		#include <defaultnormal_vertex>
	#endif
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	#include <worldpos_vertex>
	#include <envmap_vertex>
	#include <fog_vertex>
}`,_x=`uniform vec3 diffuse;
uniform float opacity;
#ifndef FLAT_SHADED
	varying vec3 vNormal;
#endif
#include <common>
#include <dithering_pars_fragment>
#include <color_pars_fragment>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <aomap_pars_fragment>
#include <lightmap_pars_fragment>
#include <envmap_common_pars_fragment>
#include <envmap_pars_fragment>
#include <fog_pars_fragment>
#include <specularmap_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	#include <logdepthbuf_fragment>
	#include <map_fragment>
	#include <color_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	#include <specularmap_fragment>
	ReflectedLight reflectedLight = ReflectedLight( vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ) );
	#ifdef USE_LIGHTMAP
		vec4 lightMapTexel = texture2D( lightMap, vLightMapUv );
		reflectedLight.indirectDiffuse += lightMapTexel.rgb * lightMapIntensity * RECIPROCAL_PI;
	#else
		reflectedLight.indirectDiffuse += vec3( 1.0 );
	#endif
	#include <aomap_fragment>
	reflectedLight.indirectDiffuse *= diffuseColor.rgb;
	vec3 outgoingLight = reflectedLight.indirectDiffuse;
	#include <envmap_fragment>
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
	#include <premultiplied_alpha_fragment>
	#include <dithering_fragment>
}`,gx=`#define LAMBERT
varying vec3 vViewPosition;
#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <displacementmap_pars_vertex>
#include <envmap_pars_vertex>
#include <color_pars_vertex>
#include <fog_pars_vertex>
#include <normal_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <shadowmap_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	#include <color_vertex>
	#include <morphinstance_vertex>
	#include <morphcolor_vertex>
	#include <batching_vertex>
	#include <beginnormal_vertex>
	#include <morphnormal_vertex>
	#include <skinbase_vertex>
	#include <skinnormal_vertex>
	#include <defaultnormal_vertex>
	#include <normal_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <displacementmap_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	vViewPosition = - mvPosition.xyz;
	#include <worldpos_vertex>
	#include <envmap_vertex>
	#include <shadowmap_vertex>
	#include <fog_vertex>
}`,xx=`#define LAMBERT
uniform vec3 diffuse;
uniform vec3 emissive;
uniform float opacity;
#include <common>
#include <dithering_pars_fragment>
#include <color_pars_fragment>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <aomap_pars_fragment>
#include <lightmap_pars_fragment>
#include <emissivemap_pars_fragment>
#include <cube_uv_reflection_fragment>
#include <envmap_common_pars_fragment>
#include <envmap_pars_fragment>
#include <envmap_physical_pars_fragment>
#include <fog_pars_fragment>
#include <bsdfs>
#include <lights_pars_begin>
#include <normal_pars_fragment>
#include <lights_lambert_pars_fragment>
#include <shadowmap_pars_fragment>
#include <bumpmap_pars_fragment>
#include <normalmap_pars_fragment>
#include <specularmap_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	ReflectedLight reflectedLight = ReflectedLight( vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ) );
	vec3 totalEmissiveRadiance = emissive;
	#include <logdepthbuf_fragment>
	#include <map_fragment>
	#include <color_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	#include <specularmap_fragment>
	#include <normal_fragment_begin>
	#include <normal_fragment_maps>
	#include <emissivemap_fragment>
	#include <lights_lambert_fragment>
	#include <lights_fragment_begin>
	#include <lights_fragment_maps>
	#include <lights_fragment_end>
	#include <aomap_fragment>
	vec3 outgoingLight = reflectedLight.directDiffuse + reflectedLight.indirectDiffuse + totalEmissiveRadiance;
	#include <envmap_fragment>
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
	#include <premultiplied_alpha_fragment>
	#include <dithering_fragment>
}`,vx=`#define MATCAP
varying vec3 vViewPosition;
#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <color_pars_vertex>
#include <displacementmap_pars_vertex>
#include <fog_pars_vertex>
#include <normal_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	#include <color_vertex>
	#include <morphinstance_vertex>
	#include <morphcolor_vertex>
	#include <batching_vertex>
	#include <beginnormal_vertex>
	#include <morphnormal_vertex>
	#include <skinbase_vertex>
	#include <skinnormal_vertex>
	#include <defaultnormal_vertex>
	#include <normal_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <displacementmap_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	#include <fog_vertex>
	vViewPosition = - mvPosition.xyz;
}`,Sx=`#define MATCAP
uniform vec3 diffuse;
uniform float opacity;
uniform sampler2D matcap;
varying vec3 vViewPosition;
#include <common>
#include <dithering_pars_fragment>
#include <color_pars_fragment>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <fog_pars_fragment>
#include <normal_pars_fragment>
#include <bumpmap_pars_fragment>
#include <normalmap_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	#include <logdepthbuf_fragment>
	#include <map_fragment>
	#include <color_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	#include <normal_fragment_begin>
	#include <normal_fragment_maps>
	vec3 viewDir = normalize( vViewPosition );
	vec3 x = normalize( vec3( viewDir.z, 0.0, - viewDir.x ) );
	vec3 y = cross( viewDir, x );
	vec2 uv = vec2( dot( x, normal ), dot( y, normal ) ) * 0.495 + 0.5;
	#ifdef USE_MATCAP
		vec4 matcapColor = texture2D( matcap, uv );
	#else
		vec4 matcapColor = vec4( vec3( mix( 0.2, 0.8, uv.y ) ), 1.0 );
	#endif
	vec3 outgoingLight = diffuseColor.rgb * matcapColor.rgb;
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
	#include <premultiplied_alpha_fragment>
	#include <dithering_fragment>
}`,Mx=`#define NORMAL
#if defined( FLAT_SHADED ) || defined( USE_BUMPMAP ) || defined( USE_NORMALMAP_TANGENTSPACE )
	varying vec3 vViewPosition;
#endif
#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <displacementmap_pars_vertex>
#include <normal_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	#include <batching_vertex>
	#include <beginnormal_vertex>
	#include <morphinstance_vertex>
	#include <morphnormal_vertex>
	#include <skinbase_vertex>
	#include <skinnormal_vertex>
	#include <defaultnormal_vertex>
	#include <normal_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <displacementmap_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
#if defined( FLAT_SHADED ) || defined( USE_BUMPMAP ) || defined( USE_NORMALMAP_TANGENTSPACE )
	vViewPosition = - mvPosition.xyz;
#endif
}`,Ex=`#define NORMAL
uniform float opacity;
#if defined( FLAT_SHADED ) || defined( USE_BUMPMAP ) || defined( USE_NORMALMAP_TANGENTSPACE )
	varying vec3 vViewPosition;
#endif
#include <uv_pars_fragment>
#include <normal_pars_fragment>
#include <bumpmap_pars_fragment>
#include <normalmap_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( 0.0, 0.0, 0.0, opacity );
	#include <clipping_planes_fragment>
	#include <logdepthbuf_fragment>
	#include <normal_fragment_begin>
	#include <normal_fragment_maps>
	gl_FragColor = vec4( normalize( normal ) * 0.5 + 0.5, diffuseColor.a );
	#ifdef OPAQUE
		gl_FragColor.a = 1.0;
	#endif
}`,yx=`#define PHONG
varying vec3 vViewPosition;
#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <displacementmap_pars_vertex>
#include <envmap_pars_vertex>
#include <color_pars_vertex>
#include <fog_pars_vertex>
#include <normal_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <shadowmap_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	#include <color_vertex>
	#include <morphcolor_vertex>
	#include <batching_vertex>
	#include <beginnormal_vertex>
	#include <morphinstance_vertex>
	#include <morphnormal_vertex>
	#include <skinbase_vertex>
	#include <skinnormal_vertex>
	#include <defaultnormal_vertex>
	#include <normal_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <displacementmap_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	vViewPosition = - mvPosition.xyz;
	#include <worldpos_vertex>
	#include <envmap_vertex>
	#include <shadowmap_vertex>
	#include <fog_vertex>
}`,bx=`#define PHONG
uniform vec3 diffuse;
uniform vec3 emissive;
uniform vec3 specular;
uniform float shininess;
uniform float opacity;
#include <common>
#include <dithering_pars_fragment>
#include <color_pars_fragment>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <aomap_pars_fragment>
#include <lightmap_pars_fragment>
#include <emissivemap_pars_fragment>
#include <cube_uv_reflection_fragment>
#include <envmap_common_pars_fragment>
#include <envmap_pars_fragment>
#include <envmap_physical_pars_fragment>
#include <fog_pars_fragment>
#include <bsdfs>
#include <lights_pars_begin>
#include <normal_pars_fragment>
#include <lights_phong_pars_fragment>
#include <shadowmap_pars_fragment>
#include <bumpmap_pars_fragment>
#include <normalmap_pars_fragment>
#include <specularmap_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	ReflectedLight reflectedLight = ReflectedLight( vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ) );
	vec3 totalEmissiveRadiance = emissive;
	#include <logdepthbuf_fragment>
	#include <map_fragment>
	#include <color_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	#include <specularmap_fragment>
	#include <normal_fragment_begin>
	#include <normal_fragment_maps>
	#include <emissivemap_fragment>
	#include <lights_phong_fragment>
	#include <lights_fragment_begin>
	#include <lights_fragment_maps>
	#include <lights_fragment_end>
	#include <aomap_fragment>
	vec3 outgoingLight = reflectedLight.directDiffuse + reflectedLight.indirectDiffuse + reflectedLight.directSpecular + reflectedLight.indirectSpecular + totalEmissiveRadiance;
	#include <envmap_fragment>
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
	#include <premultiplied_alpha_fragment>
	#include <dithering_fragment>
}`,Tx=`#define STANDARD
varying vec3 vViewPosition;
#ifdef USE_TRANSMISSION
	varying vec3 vWorldPosition;
#endif
#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <displacementmap_pars_vertex>
#include <color_pars_vertex>
#include <fog_pars_vertex>
#include <normal_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <shadowmap_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	#include <color_vertex>
	#include <morphinstance_vertex>
	#include <morphcolor_vertex>
	#include <batching_vertex>
	#include <beginnormal_vertex>
	#include <morphnormal_vertex>
	#include <skinbase_vertex>
	#include <skinnormal_vertex>
	#include <defaultnormal_vertex>
	#include <normal_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <displacementmap_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	vViewPosition = - mvPosition.xyz;
	#include <worldpos_vertex>
	#include <shadowmap_vertex>
	#include <fog_vertex>
#ifdef USE_TRANSMISSION
	vWorldPosition = worldPosition.xyz;
#endif
}`,Ax=`#define STANDARD
#ifdef PHYSICAL
	#define IOR
	#define USE_SPECULAR
#endif
uniform vec3 diffuse;
uniform vec3 emissive;
uniform float roughness;
uniform float metalness;
uniform float opacity;
#ifdef IOR
	uniform float ior;
#endif
#ifdef USE_SPECULAR
	uniform float specularIntensity;
	uniform vec3 specularColor;
	#ifdef USE_SPECULAR_COLORMAP
		uniform sampler2D specularColorMap;
	#endif
	#ifdef USE_SPECULAR_INTENSITYMAP
		uniform sampler2D specularIntensityMap;
	#endif
#endif
#ifdef USE_CLEARCOAT
	uniform float clearcoat;
	uniform float clearcoatRoughness;
#endif
#ifdef USE_DISPERSION
	uniform float dispersion;
#endif
#ifdef USE_IRIDESCENCE
	uniform float iridescence;
	uniform float iridescenceIOR;
	uniform float iridescenceThicknessMinimum;
	uniform float iridescenceThicknessMaximum;
#endif
#ifdef USE_SHEEN
	uniform vec3 sheenColor;
	uniform float sheenRoughness;
	#ifdef USE_SHEEN_COLORMAP
		uniform sampler2D sheenColorMap;
	#endif
	#ifdef USE_SHEEN_ROUGHNESSMAP
		uniform sampler2D sheenRoughnessMap;
	#endif
#endif
#ifdef USE_ANISOTROPY
	uniform vec2 anisotropyVector;
	#ifdef USE_ANISOTROPYMAP
		uniform sampler2D anisotropyMap;
	#endif
#endif
varying vec3 vViewPosition;
#include <common>
#include <dithering_pars_fragment>
#include <color_pars_fragment>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <aomap_pars_fragment>
#include <lightmap_pars_fragment>
#include <emissivemap_pars_fragment>
#include <iridescence_fragment>
#include <cube_uv_reflection_fragment>
#include <envmap_common_pars_fragment>
#include <envmap_physical_pars_fragment>
#include <fog_pars_fragment>
#include <lights_pars_begin>
#include <normal_pars_fragment>
#include <lights_physical_pars_fragment>
#include <transmission_pars_fragment>
#include <shadowmap_pars_fragment>
#include <bumpmap_pars_fragment>
#include <normalmap_pars_fragment>
#include <clearcoat_pars_fragment>
#include <iridescence_pars_fragment>
#include <roughnessmap_pars_fragment>
#include <metalnessmap_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	ReflectedLight reflectedLight = ReflectedLight( vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ) );
	vec3 totalEmissiveRadiance = emissive;
	#include <logdepthbuf_fragment>
	#include <map_fragment>
	#include <color_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	#include <roughnessmap_fragment>
	#include <metalnessmap_fragment>
	#include <normal_fragment_begin>
	#include <normal_fragment_maps>
	#include <clearcoat_normal_fragment_begin>
	#include <clearcoat_normal_fragment_maps>
	#include <emissivemap_fragment>
	#include <lights_physical_fragment>
	#include <lights_fragment_begin>
	#include <lights_fragment_maps>
	#include <lights_fragment_end>
	#include <aomap_fragment>
	vec3 totalDiffuse = reflectedLight.directDiffuse + reflectedLight.indirectDiffuse;
	vec3 totalSpecular = reflectedLight.directSpecular + reflectedLight.indirectSpecular;
	#include <transmission_fragment>
	vec3 outgoingLight = totalDiffuse + totalSpecular + totalEmissiveRadiance;
	#ifdef USE_SHEEN
 
		outgoingLight = outgoingLight + sheenSpecularDirect + sheenSpecularIndirect;
 
 	#endif
	#ifdef USE_CLEARCOAT
		float dotNVcc = saturate( dot( geometryClearcoatNormal, geometryViewDir ) );
		vec3 Fcc = F_Schlick( material.clearcoatF0, material.clearcoatF90, dotNVcc );
		outgoingLight = outgoingLight * ( 1.0 - material.clearcoat * Fcc ) + ( clearcoatSpecularDirect + clearcoatSpecularIndirect ) * material.clearcoat;
	#endif
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
	#include <premultiplied_alpha_fragment>
	#include <dithering_fragment>
}`,wx=`#define TOON
varying vec3 vViewPosition;
#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <displacementmap_pars_vertex>
#include <color_pars_vertex>
#include <fog_pars_vertex>
#include <normal_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <shadowmap_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	#include <color_vertex>
	#include <morphinstance_vertex>
	#include <morphcolor_vertex>
	#include <batching_vertex>
	#include <beginnormal_vertex>
	#include <morphnormal_vertex>
	#include <skinbase_vertex>
	#include <skinnormal_vertex>
	#include <defaultnormal_vertex>
	#include <normal_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <displacementmap_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	vViewPosition = - mvPosition.xyz;
	#include <worldpos_vertex>
	#include <shadowmap_vertex>
	#include <fog_vertex>
}`,Rx=`#define TOON
uniform vec3 diffuse;
uniform vec3 emissive;
uniform float opacity;
#include <common>
#include <dithering_pars_fragment>
#include <color_pars_fragment>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <aomap_pars_fragment>
#include <lightmap_pars_fragment>
#include <emissivemap_pars_fragment>
#include <gradientmap_pars_fragment>
#include <fog_pars_fragment>
#include <bsdfs>
#include <lights_pars_begin>
#include <normal_pars_fragment>
#include <lights_toon_pars_fragment>
#include <shadowmap_pars_fragment>
#include <bumpmap_pars_fragment>
#include <normalmap_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	ReflectedLight reflectedLight = ReflectedLight( vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ) );
	vec3 totalEmissiveRadiance = emissive;
	#include <logdepthbuf_fragment>
	#include <map_fragment>
	#include <color_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	#include <normal_fragment_begin>
	#include <normal_fragment_maps>
	#include <emissivemap_fragment>
	#include <lights_toon_fragment>
	#include <lights_fragment_begin>
	#include <lights_fragment_maps>
	#include <lights_fragment_end>
	#include <aomap_fragment>
	vec3 outgoingLight = reflectedLight.directDiffuse + reflectedLight.indirectDiffuse + totalEmissiveRadiance;
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
	#include <premultiplied_alpha_fragment>
	#include <dithering_fragment>
}`,Cx=`uniform float size;
uniform float scale;
#include <common>
#include <color_pars_vertex>
#include <fog_pars_vertex>
#include <morphtarget_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
#ifdef USE_POINTS_UV
	varying vec2 vUv;
	uniform mat3 uvTransform;
#endif
void main() {
	#ifdef USE_POINTS_UV
		vUv = ( uvTransform * vec3( uv, 1 ) ).xy;
	#endif
	#include <color_vertex>
	#include <morphinstance_vertex>
	#include <morphcolor_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <project_vertex>
	gl_PointSize = size;
	#ifdef USE_SIZEATTENUATION
		bool isPerspective = isPerspectiveMatrix( projectionMatrix );
		if ( isPerspective ) gl_PointSize *= ( scale / - mvPosition.z );
	#endif
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	#include <worldpos_vertex>
	#include <fog_vertex>
}`,Px=`uniform vec3 diffuse;
uniform float opacity;
#include <common>
#include <color_pars_fragment>
#include <map_particle_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <fog_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	vec3 outgoingLight = vec3( 0.0 );
	#include <logdepthbuf_fragment>
	#include <map_particle_fragment>
	#include <color_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	outgoingLight = diffuseColor.rgb;
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
	#include <premultiplied_alpha_fragment>
}`,Dx=`#include <common>
#include <batching_pars_vertex>
#include <fog_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <shadowmap_pars_vertex>
void main() {
	#include <batching_vertex>
	#include <beginnormal_vertex>
	#include <morphinstance_vertex>
	#include <morphnormal_vertex>
	#include <skinbase_vertex>
	#include <skinnormal_vertex>
	#include <defaultnormal_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <worldpos_vertex>
	#include <shadowmap_vertex>
	#include <fog_vertex>
}`,Lx=`uniform vec3 color;
uniform float opacity;
#include <common>
#include <fog_pars_fragment>
#include <bsdfs>
#include <lights_pars_begin>
#include <logdepthbuf_pars_fragment>
#include <shadowmap_pars_fragment>
#include <shadowmask_pars_fragment>
void main() {
	#include <logdepthbuf_fragment>
	gl_FragColor = vec4( color, opacity * ( 1.0 - getShadowMask() ) );
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
	#include <premultiplied_alpha_fragment>
}`,Ix=`uniform float rotation;
uniform vec2 center;
#include <common>
#include <uv_pars_vertex>
#include <fog_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	vec4 mvPosition = modelViewMatrix[ 3 ];
	vec2 scale = vec2( length( modelMatrix[ 0 ].xyz ), length( modelMatrix[ 1 ].xyz ) );
	#ifndef USE_SIZEATTENUATION
		bool isPerspective = isPerspectiveMatrix( projectionMatrix );
		if ( isPerspective ) scale *= - mvPosition.z;
	#endif
	vec2 alignedPosition = ( position.xy - ( center - vec2( 0.5 ) ) ) * scale;
	vec2 rotatedPosition;
	rotatedPosition.x = cos( rotation ) * alignedPosition.x - sin( rotation ) * alignedPosition.y;
	rotatedPosition.y = sin( rotation ) * alignedPosition.x + cos( rotation ) * alignedPosition.y;
	mvPosition.xy += rotatedPosition;
	gl_Position = projectionMatrix * mvPosition;
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	#include <fog_vertex>
}`,Ux=`uniform vec3 diffuse;
uniform float opacity;
#include <common>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <fog_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	vec3 outgoingLight = vec3( 0.0 );
	#include <logdepthbuf_fragment>
	#include <map_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	outgoingLight = diffuseColor.rgb;
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
}`,Fe={alphahash_fragment:tg,alphahash_pars_fragment:ng,alphamap_fragment:ig,alphamap_pars_fragment:rg,alphatest_fragment:sg,alphatest_pars_fragment:ag,aomap_fragment:og,aomap_pars_fragment:lg,batching_pars_vertex:cg,batching_vertex:ug,begin_vertex:fg,beginnormal_vertex:dg,bsdfs:hg,iridescence_fragment:pg,bumpmap_pars_fragment:mg,clipping_planes_fragment:_g,clipping_planes_pars_fragment:gg,clipping_planes_pars_vertex:xg,clipping_planes_vertex:vg,color_fragment:Sg,color_pars_fragment:Mg,color_pars_vertex:Eg,color_vertex:yg,common:bg,cube_uv_reflection_fragment:Tg,defaultnormal_vertex:Ag,displacementmap_pars_vertex:wg,displacementmap_vertex:Rg,emissivemap_fragment:Cg,emissivemap_pars_fragment:Pg,colorspace_fragment:Dg,colorspace_pars_fragment:Lg,envmap_fragment:Ig,envmap_common_pars_fragment:Ug,envmap_pars_fragment:Ng,envmap_pars_vertex:Og,envmap_physical_pars_fragment:Yg,envmap_vertex:Fg,fog_vertex:Bg,fog_pars_vertex:zg,fog_fragment:Hg,fog_pars_fragment:Vg,gradientmap_pars_fragment:Gg,lightmap_pars_fragment:kg,lights_lambert_fragment:Wg,lights_lambert_pars_fragment:Xg,lights_pars_begin:qg,lights_toon_fragment:$g,lights_toon_pars_fragment:Kg,lights_phong_fragment:Zg,lights_phong_pars_fragment:Jg,lights_physical_fragment:Qg,lights_physical_pars_fragment:jg,lights_fragment_begin:e0,lights_fragment_maps:t0,lights_fragment_end:n0,lightprobes_pars_fragment:i0,logdepthbuf_fragment:r0,logdepthbuf_pars_fragment:s0,logdepthbuf_pars_vertex:a0,logdepthbuf_vertex:o0,map_fragment:l0,map_pars_fragment:c0,map_particle_fragment:u0,map_particle_pars_fragment:f0,metalnessmap_fragment:d0,metalnessmap_pars_fragment:h0,morphinstance_vertex:p0,morphcolor_vertex:m0,morphnormal_vertex:_0,morphtarget_pars_vertex:g0,morphtarget_vertex:x0,normal_fragment_begin:v0,normal_fragment_maps:S0,normal_pars_fragment:M0,normal_pars_vertex:E0,normal_vertex:y0,normalmap_pars_fragment:b0,clearcoat_normal_fragment_begin:T0,clearcoat_normal_fragment_maps:A0,clearcoat_pars_fragment:w0,iridescence_pars_fragment:R0,opaque_fragment:C0,packing:P0,premultiplied_alpha_fragment:D0,project_vertex:L0,dithering_fragment:I0,dithering_pars_fragment:U0,roughnessmap_fragment:N0,roughnessmap_pars_fragment:O0,shadowmap_pars_fragment:F0,shadowmap_pars_vertex:B0,shadowmap_vertex:z0,shadowmask_pars_fragment:H0,skinbase_vertex:V0,skinning_pars_vertex:G0,skinning_vertex:k0,skinnormal_vertex:W0,specularmap_fragment:X0,specularmap_pars_fragment:q0,tonemapping_fragment:Y0,tonemapping_pars_fragment:$0,transmission_fragment:K0,transmission_pars_fragment:Z0,uv_pars_fragment:J0,uv_pars_vertex:Q0,uv_vertex:j0,worldpos_vertex:ex,background_vert:tx,background_frag:nx,backgroundCube_vert:ix,backgroundCube_frag:rx,cube_vert:sx,cube_frag:ax,depth_vert:ox,depth_frag:lx,distance_vert:cx,distance_frag:ux,equirect_vert:fx,equirect_frag:dx,linedashed_vert:hx,linedashed_frag:px,meshbasic_vert:mx,meshbasic_frag:_x,meshlambert_vert:gx,meshlambert_frag:xx,meshmatcap_vert:vx,meshmatcap_frag:Sx,meshnormal_vert:Mx,meshnormal_frag:Ex,meshphong_vert:yx,meshphong_frag:bx,meshphysical_vert:Tx,meshphysical_frag:Ax,meshtoon_vert:wx,meshtoon_frag:Rx,points_vert:Cx,points_frag:Px,shadow_vert:Dx,shadow_frag:Lx,sprite_vert:Ix,sprite_frag:Ux},he={common:{diffuse:{value:new qe(16777215)},opacity:{value:1},map:{value:null},mapTransform:{value:new Ie},alphaMap:{value:null},alphaMapTransform:{value:new Ie},alphaTest:{value:0}},specularmap:{specularMap:{value:null},specularMapTransform:{value:new Ie}},envmap:{envMap:{value:null},envMapRotation:{value:new Ie},reflectivity:{value:1},ior:{value:1.5},refractionRatio:{value:.98},dfgLUT:{value:null}},aomap:{aoMap:{value:null},aoMapIntensity:{value:1},aoMapTransform:{value:new Ie}},lightmap:{lightMap:{value:null},lightMapIntensity:{value:1},lightMapTransform:{value:new Ie}},bumpmap:{bumpMap:{value:null},bumpMapTransform:{value:new Ie},bumpScale:{value:1}},normalmap:{normalMap:{value:null},normalMapTransform:{value:new Ie},normalScale:{value:new Ve(1,1)}},displacementmap:{displacementMap:{value:null},displacementMapTransform:{value:new Ie},displacementScale:{value:1},displacementBias:{value:0}},emissivemap:{emissiveMap:{value:null},emissiveMapTransform:{value:new Ie}},metalnessmap:{metalnessMap:{value:null},metalnessMapTransform:{value:new Ie}},roughnessmap:{roughnessMap:{value:null},roughnessMapTransform:{value:new Ie}},gradientmap:{gradientMap:{value:null}},fog:{fogDensity:{value:25e-5},fogNear:{value:1},fogFar:{value:2e3},fogColor:{value:new qe(16777215)}},lights:{ambientLightColor:{value:[]},lightProbe:{value:[]},directionalLights:{value:[],properties:{direction:{},color:{}}},directionalLightShadows:{value:[],properties:{shadowIntensity:1,shadowBias:{},shadowNormalBias:{},shadowRadius:{},shadowMapSize:{}}},directionalShadowMatrix:{value:[]},spotLights:{value:[],properties:{color:{},position:{},direction:{},distance:{},coneCos:{},penumbraCos:{},decay:{}}},spotLightShadows:{value:[],properties:{shadowIntensity:1,shadowBias:{},shadowNormalBias:{},shadowRadius:{},shadowMapSize:{}}},spotLightMap:{value:[]},spotLightMatrix:{value:[]},pointLights:{value:[],properties:{color:{},position:{},decay:{},distance:{}}},pointLightShadows:{value:[],properties:{shadowIntensity:1,shadowBias:{},shadowNormalBias:{},shadowRadius:{},shadowMapSize:{},shadowCameraNear:{},shadowCameraFar:{}}},pointShadowMatrix:{value:[]},hemisphereLights:{value:[],properties:{direction:{},skyColor:{},groundColor:{}}},rectAreaLights:{value:[],properties:{color:{},position:{},width:{},height:{}}},ltc_1:{value:null},ltc_2:{value:null},probesSH:{value:null},probesMin:{value:new B},probesMax:{value:new B},probesResolution:{value:new B}},points:{diffuse:{value:new qe(16777215)},opacity:{value:1},size:{value:1},scale:{value:1},map:{value:null},alphaMap:{value:null},alphaMapTransform:{value:new Ie},alphaTest:{value:0},uvTransform:{value:new Ie}},sprite:{diffuse:{value:new qe(16777215)},opacity:{value:1},center:{value:new Ve(.5,.5)},rotation:{value:0},map:{value:null},mapTransform:{value:new Ie},alphaMap:{value:null},alphaMapTransform:{value:new Ie},alphaTest:{value:0}}},hn={basic:{uniforms:Ut([he.common,he.specularmap,he.envmap,he.aomap,he.lightmap,he.fog]),vertexShader:Fe.meshbasic_vert,fragmentShader:Fe.meshbasic_frag},lambert:{uniforms:Ut([he.common,he.specularmap,he.envmap,he.aomap,he.lightmap,he.emissivemap,he.bumpmap,he.normalmap,he.displacementmap,he.fog,he.lights,{emissive:{value:new qe(0)},envMapIntensity:{value:1}}]),vertexShader:Fe.meshlambert_vert,fragmentShader:Fe.meshlambert_frag},phong:{uniforms:Ut([he.common,he.specularmap,he.envmap,he.aomap,he.lightmap,he.emissivemap,he.bumpmap,he.normalmap,he.displacementmap,he.fog,he.lights,{emissive:{value:new qe(0)},specular:{value:new qe(1118481)},shininess:{value:30},envMapIntensity:{value:1}}]),vertexShader:Fe.meshphong_vert,fragmentShader:Fe.meshphong_frag},standard:{uniforms:Ut([he.common,he.envmap,he.aomap,he.lightmap,he.emissivemap,he.bumpmap,he.normalmap,he.displacementmap,he.roughnessmap,he.metalnessmap,he.fog,he.lights,{emissive:{value:new qe(0)},roughness:{value:1},metalness:{value:0},envMapIntensity:{value:1}}]),vertexShader:Fe.meshphysical_vert,fragmentShader:Fe.meshphysical_frag},toon:{uniforms:Ut([he.common,he.aomap,he.lightmap,he.emissivemap,he.bumpmap,he.normalmap,he.displacementmap,he.gradientmap,he.fog,he.lights,{emissive:{value:new qe(0)}}]),vertexShader:Fe.meshtoon_vert,fragmentShader:Fe.meshtoon_frag},matcap:{uniforms:Ut([he.common,he.bumpmap,he.normalmap,he.displacementmap,he.fog,{matcap:{value:null}}]),vertexShader:Fe.meshmatcap_vert,fragmentShader:Fe.meshmatcap_frag},points:{uniforms:Ut([he.points,he.fog]),vertexShader:Fe.points_vert,fragmentShader:Fe.points_frag},dashed:{uniforms:Ut([he.common,he.fog,{scale:{value:1},dashSize:{value:1},totalSize:{value:2}}]),vertexShader:Fe.linedashed_vert,fragmentShader:Fe.linedashed_frag},depth:{uniforms:Ut([he.common,he.displacementmap]),vertexShader:Fe.depth_vert,fragmentShader:Fe.depth_frag},normal:{uniforms:Ut([he.common,he.bumpmap,he.normalmap,he.displacementmap,{opacity:{value:1}}]),vertexShader:Fe.meshnormal_vert,fragmentShader:Fe.meshnormal_frag},sprite:{uniforms:Ut([he.sprite,he.fog]),vertexShader:Fe.sprite_vert,fragmentShader:Fe.sprite_frag},background:{uniforms:{uvTransform:{value:new Ie},t2D:{value:null},backgroundIntensity:{value:1}},vertexShader:Fe.background_vert,fragmentShader:Fe.background_frag},backgroundCube:{uniforms:{envMap:{value:null},backgroundBlurriness:{value:0},backgroundIntensity:{value:1},backgroundRotation:{value:new Ie}},vertexShader:Fe.backgroundCube_vert,fragmentShader:Fe.backgroundCube_frag},cube:{uniforms:{tCube:{value:null},tFlip:{value:-1},opacity:{value:1}},vertexShader:Fe.cube_vert,fragmentShader:Fe.cube_frag},equirect:{uniforms:{tEquirect:{value:null}},vertexShader:Fe.equirect_vert,fragmentShader:Fe.equirect_frag},distance:{uniforms:Ut([he.common,he.displacementmap,{referencePosition:{value:new B},nearDistance:{value:1},farDistance:{value:1e3}}]),vertexShader:Fe.distance_vert,fragmentShader:Fe.distance_frag},shadow:{uniforms:Ut([he.lights,he.fog,{color:{value:new qe(0)},opacity:{value:1}}]),vertexShader:Fe.shadow_vert,fragmentShader:Fe.shadow_frag}};hn.physical={uniforms:Ut([hn.standard.uniforms,{clearcoat:{value:0},clearcoatMap:{value:null},clearcoatMapTransform:{value:new Ie},clearcoatNormalMap:{value:null},clearcoatNormalMapTransform:{value:new Ie},clearcoatNormalScale:{value:new Ve(1,1)},clearcoatRoughness:{value:0},clearcoatRoughnessMap:{value:null},clearcoatRoughnessMapTransform:{value:new Ie},dispersion:{value:0},iridescence:{value:0},iridescenceMap:{value:null},iridescenceMapTransform:{value:new Ie},iridescenceIOR:{value:1.3},iridescenceThicknessMinimum:{value:100},iridescenceThicknessMaximum:{value:400},iridescenceThicknessMap:{value:null},iridescenceThicknessMapTransform:{value:new Ie},sheen:{value:0},sheenColor:{value:new qe(0)},sheenColorMap:{value:null},sheenColorMapTransform:{value:new Ie},sheenRoughness:{value:1},sheenRoughnessMap:{value:null},sheenRoughnessMapTransform:{value:new Ie},transmission:{value:0},transmissionMap:{value:null},transmissionMapTransform:{value:new Ie},transmissionSamplerSize:{value:new Ve},transmissionSamplerMap:{value:null},thickness:{value:0},thicknessMap:{value:null},thicknessMapTransform:{value:new Ie},attenuationDistance:{value:0},attenuationColor:{value:new qe(0)},specularColor:{value:new qe(1,1,1)},specularColorMap:{value:null},specularColorMapTransform:{value:new Ie},specularIntensity:{value:1},specularIntensityMap:{value:null},specularIntensityMapTransform:{value:new Ie},anisotropyVector:{value:new Ve},anisotropyMap:{value:null},anisotropyMapTransform:{value:new Ie}}]),vertexShader:Fe.meshphysical_vert,fragmentShader:Fe.meshphysical_frag};const ds={r:0,b:0,g:0},Nx=new ht,Yf=new Ie;Yf.set(-1,0,0,0,1,0,0,0,1);function Ox(n,e,t,i,r,s){const a=new qe(0);let o=r===!0?0:1,l,c,u=null,h=0,d=null;function m(y){let w=y.isScene===!0?y.background:null;if(w&&w.isTexture){const M=y.backgroundBlurriness>0;w=e.get(w,M)}return w}function x(y){let w=!1;const M=m(y);M===null?p(a,o):M&&M.isColor&&(p(M,1),w=!0);const A=n.xr.getEnvironmentBlendMode();A==="additive"?t.buffers.color.setClear(0,0,0,1,s):A==="alpha-blend"&&t.buffers.color.setClear(0,0,0,0,s),(n.autoClear||w)&&(t.buffers.depth.setTest(!0),t.buffers.depth.setMask(!0),t.buffers.color.setMask(!0),n.clear(n.autoClearColor,n.autoClearDepth,n.autoClearStencil))}function S(y,w){const M=m(w);M&&(M.isCubeTexture||M.mapping===Ys)?(c===void 0&&(c=new bt(new en(1,1,1),new Sn({name:"BackgroundCubeMaterial",uniforms:ji(hn.backgroundCube.uniforms),vertexShader:hn.backgroundCube.vertexShader,fragmentShader:hn.backgroundCube.fragmentShader,side:Vt,depthTest:!1,depthWrite:!1,fog:!1,allowOverride:!1})),c.geometry.deleteAttribute("normal"),c.geometry.deleteAttribute("uv"),c.onBeforeRender=function(A,E,R){this.matrixWorld.copyPosition(R.matrixWorld)},Object.defineProperty(c.material,"envMap",{get:function(){return this.uniforms.envMap.value}}),i.update(c)),c.material.uniforms.envMap.value=M,c.material.uniforms.backgroundBlurriness.value=w.backgroundBlurriness,c.material.uniforms.backgroundIntensity.value=w.backgroundIntensity,c.material.uniforms.backgroundRotation.value.setFromMatrix4(Nx.makeRotationFromEuler(w.backgroundRotation)).transpose(),M.isCubeTexture&&M.isRenderTargetTexture===!1&&c.material.uniforms.backgroundRotation.value.premultiply(Yf),c.material.toneMapped=Ge.getTransfer(M.colorSpace)!==Qe,(u!==M||h!==M.version||d!==n.toneMapping)&&(c.material.needsUpdate=!0,u=M,h=M.version,d=n.toneMapping),c.layers.enableAll(),y.unshift(c,c.geometry,c.material,0,0,null)):M&&M.isTexture&&(l===void 0&&(l=new bt(new $s(2,2),new Sn({name:"BackgroundMaterial",uniforms:ji(hn.background.uniforms),vertexShader:hn.background.vertexShader,fragmentShader:hn.background.fragmentShader,side:$n,depthTest:!1,depthWrite:!1,fog:!1,allowOverride:!1})),l.geometry.deleteAttribute("normal"),Object.defineProperty(l.material,"map",{get:function(){return this.uniforms.t2D.value}}),i.update(l)),l.material.uniforms.t2D.value=M,l.material.uniforms.backgroundIntensity.value=w.backgroundIntensity,l.material.toneMapped=Ge.getTransfer(M.colorSpace)!==Qe,M.matrixAutoUpdate===!0&&M.updateMatrix(),l.material.uniforms.uvTransform.value.copy(M.matrix),(u!==M||h!==M.version||d!==n.toneMapping)&&(l.material.needsUpdate=!0,u=M,h=M.version,d=n.toneMapping),l.layers.enableAll(),y.unshift(l,l.geometry,l.material,0,0,null))}function p(y,w){y.getRGB(ds,kf(n)),t.buffers.color.setClear(ds.r,ds.g,ds.b,w,s)}function f(){c!==void 0&&(c.geometry.dispose(),c.material.dispose(),c=void 0),l!==void 0&&(l.geometry.dispose(),l.material.dispose(),l=void 0)}return{getClearColor:function(){return a},setClearColor:function(y,w=1){a.set(y),o=w,p(a,o)},getClearAlpha:function(){return o},setClearAlpha:function(y){o=y,p(a,o)},render:x,addToRenderList:S,dispose:f}}function Fx(n,e){const t=n.getParameter(n.MAX_VERTEX_ATTRIBS),i={},r=d(null);let s=r,a=!1;function o(C,N,X,q,F){let Y=!1;const H=h(C,q,X,N);s!==H&&(s=H,c(s.object)),Y=m(C,q,X,F),Y&&x(C,q,X,F),F!==null&&e.update(F,n.ELEMENT_ARRAY_BUFFER),(Y||a)&&(a=!1,M(C,N,X,q),F!==null&&n.bindBuffer(n.ELEMENT_ARRAY_BUFFER,e.get(F).buffer))}function l(){return n.createVertexArray()}function c(C){return n.bindVertexArray(C)}function u(C){return n.deleteVertexArray(C)}function h(C,N,X,q){const F=q.wireframe===!0;let Y=i[N.id];Y===void 0&&(Y={},i[N.id]=Y);const H=C.isInstancedMesh===!0?C.id:0;let Z=Y[H];Z===void 0&&(Z={},Y[H]=Z);let ee=Z[X.id];ee===void 0&&(ee={},Z[X.id]=ee);let se=ee[F];return se===void 0&&(se=d(l()),ee[F]=se),se}function d(C){const N=[],X=[],q=[];for(let F=0;F<t;F++)N[F]=0,X[F]=0,q[F]=0;return{geometry:null,program:null,wireframe:!1,newAttributes:N,enabledAttributes:X,attributeDivisors:q,object:C,attributes:{},index:null}}function m(C,N,X,q){const F=s.attributes,Y=N.attributes;let H=0;const Z=X.getAttributes();for(const ee in Z)if(Z[ee].location>=0){const ie=F[ee];let xe=Y[ee];if(xe===void 0&&(ee==="instanceMatrix"&&C.instanceMatrix&&(xe=C.instanceMatrix),ee==="instanceColor"&&C.instanceColor&&(xe=C.instanceColor)),ie===void 0||ie.attribute!==xe||xe&&ie.data!==xe.data)return!0;H++}return s.attributesNum!==H||s.index!==q}function x(C,N,X,q){const F={},Y=N.attributes;let H=0;const Z=X.getAttributes();for(const ee in Z)if(Z[ee].location>=0){let ie=Y[ee];ie===void 0&&(ee==="instanceMatrix"&&C.instanceMatrix&&(ie=C.instanceMatrix),ee==="instanceColor"&&C.instanceColor&&(ie=C.instanceColor));const xe={};xe.attribute=ie,ie&&ie.data&&(xe.data=ie.data),F[ee]=xe,H++}s.attributes=F,s.attributesNum=H,s.index=q}function S(){const C=s.newAttributes;for(let N=0,X=C.length;N<X;N++)C[N]=0}function p(C){f(C,0)}function f(C,N){const X=s.newAttributes,q=s.enabledAttributes,F=s.attributeDivisors;X[C]=1,q[C]===0&&(n.enableVertexAttribArray(C),q[C]=1),F[C]!==N&&(n.vertexAttribDivisor(C,N),F[C]=N)}function y(){const C=s.newAttributes,N=s.enabledAttributes;for(let X=0,q=N.length;X<q;X++)N[X]!==C[X]&&(n.disableVertexAttribArray(X),N[X]=0)}function w(C,N,X,q,F,Y,H){H===!0?n.vertexAttribIPointer(C,N,X,F,Y):n.vertexAttribPointer(C,N,X,q,F,Y)}function M(C,N,X,q){S();const F=q.attributes,Y=X.getAttributes(),H=N.defaultAttributeValues;for(const Z in Y){const ee=Y[Z];if(ee.location>=0){let se=F[Z];if(se===void 0&&(Z==="instanceMatrix"&&C.instanceMatrix&&(se=C.instanceMatrix),Z==="instanceColor"&&C.instanceColor&&(se=C.instanceColor)),se!==void 0){const ie=se.normalized,xe=se.itemSize,He=e.get(se);if(He===void 0)continue;const je=He.buffer,We=He.type,W=He.bytesPerElement,ne=We===n.INT||We===n.UNSIGNED_INT||se.gpuType===_l;if(se.isInterleavedBufferAttribute){const te=se.data,Pe=te.stride,Le=se.offset;if(te.isInstancedInterleavedBuffer){for(let Re=0;Re<ee.locationSize;Re++)f(ee.location+Re,te.meshPerAttribute);C.isInstancedMesh!==!0&&q._maxInstanceCount===void 0&&(q._maxInstanceCount=te.meshPerAttribute*te.count)}else for(let Re=0;Re<ee.locationSize;Re++)p(ee.location+Re);n.bindBuffer(n.ARRAY_BUFFER,je);for(let Re=0;Re<ee.locationSize;Re++)w(ee.location+Re,xe/ee.locationSize,We,ie,Pe*W,(Le+xe/ee.locationSize*Re)*W,ne)}else{if(se.isInstancedBufferAttribute){for(let te=0;te<ee.locationSize;te++)f(ee.location+te,se.meshPerAttribute);C.isInstancedMesh!==!0&&q._maxInstanceCount===void 0&&(q._maxInstanceCount=se.meshPerAttribute*se.count)}else for(let te=0;te<ee.locationSize;te++)p(ee.location+te);n.bindBuffer(n.ARRAY_BUFFER,je);for(let te=0;te<ee.locationSize;te++)w(ee.location+te,xe/ee.locationSize,We,ie,xe*W,xe/ee.locationSize*te*W,ne)}}else if(H!==void 0){const ie=H[Z];if(ie!==void 0)switch(ie.length){case 2:n.vertexAttrib2fv(ee.location,ie);break;case 3:n.vertexAttrib3fv(ee.location,ie);break;case 4:n.vertexAttrib4fv(ee.location,ie);break;default:n.vertexAttrib1fv(ee.location,ie)}}}}y()}function A(){T();for(const C in i){const N=i[C];for(const X in N){const q=N[X];for(const F in q){const Y=q[F];for(const H in Y)u(Y[H].object),delete Y[H];delete q[F]}}delete i[C]}}function E(C){if(i[C.id]===void 0)return;const N=i[C.id];for(const X in N){const q=N[X];for(const F in q){const Y=q[F];for(const H in Y)u(Y[H].object),delete Y[H];delete q[F]}}delete i[C.id]}function R(C){for(const N in i){const X=i[N];for(const q in X){const F=X[q];if(F[C.id]===void 0)continue;const Y=F[C.id];for(const H in Y)u(Y[H].object),delete Y[H];delete F[C.id]}}}function g(C){for(const N in i){const X=i[N],q=C.isInstancedMesh===!0?C.id:0,F=X[q];if(F!==void 0){for(const Y in F){const H=F[Y];for(const Z in H)u(H[Z].object),delete H[Z];delete F[Y]}delete X[q],Object.keys(X).length===0&&delete i[N]}}}function T(){D(),a=!0,s!==r&&(s=r,c(s.object))}function D(){r.geometry=null,r.program=null,r.wireframe=!1}return{setup:o,reset:T,resetDefaultState:D,dispose:A,releaseStatesOfGeometry:E,releaseStatesOfObject:g,releaseStatesOfProgram:R,initAttributes:S,enableAttribute:p,disableUnusedAttributes:y}}function Bx(n,e,t){let i;function r(l){i=l}function s(l,c){n.drawArrays(i,l,c),t.update(c,i,1)}function a(l,c,u){u!==0&&(n.drawArraysInstanced(i,l,c,u),t.update(c,i,u))}function o(l,c,u){if(u===0)return;e.get("WEBGL_multi_draw").multiDrawArraysWEBGL(i,l,0,c,0,u);let d=0;for(let m=0;m<u;m++)d+=c[m];t.update(d,i,1)}this.setMode=r,this.render=s,this.renderInstances=a,this.renderMultiDraw=o}function zx(n,e,t,i){let r;function s(){if(r!==void 0)return r;if(e.has("EXT_texture_filter_anisotropic")===!0){const R=e.get("EXT_texture_filter_anisotropic");r=n.getParameter(R.MAX_TEXTURE_MAX_ANISOTROPY_EXT)}else r=0;return r}function a(R){return!(R!==nn&&i.convert(R)!==n.getParameter(n.IMPLEMENTATION_COLOR_READ_FORMAT))}function o(R){const g=R===In&&(e.has("EXT_color_buffer_half_float")||e.has("EXT_color_buffer_float"));return!(R!==Yt&&i.convert(R)!==n.getParameter(n.IMPLEMENTATION_COLOR_READ_TYPE)&&R!==pn&&!g)}function l(R){if(R==="highp"){if(n.getShaderPrecisionFormat(n.VERTEX_SHADER,n.HIGH_FLOAT).precision>0&&n.getShaderPrecisionFormat(n.FRAGMENT_SHADER,n.HIGH_FLOAT).precision>0)return"highp";R="mediump"}return R==="mediump"&&n.getShaderPrecisionFormat(n.VERTEX_SHADER,n.MEDIUM_FLOAT).precision>0&&n.getShaderPrecisionFormat(n.FRAGMENT_SHADER,n.MEDIUM_FLOAT).precision>0?"mediump":"lowp"}let c=t.precision!==void 0?t.precision:"highp";const u=l(c);u!==c&&(De("WebGLRenderer:",c,"not supported, using",u,"instead."),c=u);const h=t.logarithmicDepthBuffer===!0,d=t.reversedDepthBuffer===!0&&e.has("EXT_clip_control");t.reversedDepthBuffer===!0&&d===!1&&De("WebGLRenderer: Unable to use reversed depth buffer due to missing EXT_clip_control extension. Fallback to default depth buffer.");const m=n.getParameter(n.MAX_TEXTURE_IMAGE_UNITS),x=n.getParameter(n.MAX_VERTEX_TEXTURE_IMAGE_UNITS),S=n.getParameter(n.MAX_TEXTURE_SIZE),p=n.getParameter(n.MAX_CUBE_MAP_TEXTURE_SIZE),f=n.getParameter(n.MAX_VERTEX_ATTRIBS),y=n.getParameter(n.MAX_VERTEX_UNIFORM_VECTORS),w=n.getParameter(n.MAX_VARYING_VECTORS),M=n.getParameter(n.MAX_FRAGMENT_UNIFORM_VECTORS),A=n.getParameter(n.MAX_SAMPLES),E=n.getParameter(n.SAMPLES);return{isWebGL2:!0,getMaxAnisotropy:s,getMaxPrecision:l,textureFormatReadable:a,textureTypeReadable:o,precision:c,logarithmicDepthBuffer:h,reversedDepthBuffer:d,maxTextures:m,maxVertexTextures:x,maxTextureSize:S,maxCubemapSize:p,maxAttributes:f,maxVertexUniforms:y,maxVaryings:w,maxFragmentUniforms:M,maxSamples:A,samples:E}}function Hx(n){const e=this;let t=null,i=0,r=!1,s=!1;const a=new si,o=new Ie,l={value:null,needsUpdate:!1};this.uniform=l,this.numPlanes=0,this.numIntersection=0,this.init=function(h,d){const m=h.length!==0||d||i!==0||r;return r=d,i=h.length,m},this.beginShadows=function(){s=!0,u(null)},this.endShadows=function(){s=!1},this.setGlobalState=function(h,d){t=u(h,d,0)},this.setState=function(h,d,m){const x=h.clippingPlanes,S=h.clipIntersection,p=h.clipShadows,f=n.get(h);if(!r||x===null||x.length===0||s&&!p)s?u(null):c();else{const y=s?0:i,w=y*4;let M=f.clippingState||null;l.value=M,M=u(x,d,w,m);for(let A=0;A!==w;++A)M[A]=t[A];f.clippingState=M,this.numIntersection=S?this.numPlanes:0,this.numPlanes+=y}};function c(){l.value!==t&&(l.value=t,l.needsUpdate=i>0),e.numPlanes=i,e.numIntersection=0}function u(h,d,m,x){const S=h!==null?h.length:0;let p=null;if(S!==0){if(p=l.value,x!==!0||p===null){const f=m+S*4,y=d.matrixWorldInverse;o.getNormalMatrix(y),(p===null||p.length<f)&&(p=new Float32Array(f));for(let w=0,M=m;w!==S;++w,M+=4)a.copy(h[w]).applyMatrix4(y,o),a.normal.toArray(p,M),p[M+3]=a.constant}l.value=p,l.needsUpdate=!0}return e.numPlanes=S,e.numIntersection=0,p}}const Yn=4,cu=[.125,.215,.35,.446,.526,.582],oi=20,Vx=256,gr=new Cl,uu=new qe;let Ha=null,Va=0,Ga=0,ka=!1;const Gx=new B;class fu{constructor(e){this._renderer=e,this._pingPongRenderTarget=null,this._lodMax=0,this._cubeSize=0,this._sizeLods=[],this._sigmas=[],this._lodMeshes=[],this._backgroundBox=null,this._cubemapMaterial=null,this._equirectMaterial=null,this._blurMaterial=null,this._ggxMaterial=null}fromScene(e,t=0,i=.1,r=100,s={}){const{size:a=256,position:o=Gx}=s;Ha=this._renderer.getRenderTarget(),Va=this._renderer.getActiveCubeFace(),Ga=this._renderer.getActiveMipmapLevel(),ka=this._renderer.xr.enabled,this._renderer.xr.enabled=!1,this._setSize(a);const l=this._allocateTargets();return l.depthBuffer=!0,this._sceneToCubeUV(e,i,r,l,o),t>0&&this._blur(l,0,0,t),this._applyPMREM(l),this._cleanup(l),l}fromEquirectangular(e,t=null){return this._fromTexture(e,t)}fromCubemap(e,t=null){return this._fromTexture(e,t)}compileCubemapShader(){this._cubemapMaterial===null&&(this._cubemapMaterial=pu(),this._compileMaterial(this._cubemapMaterial))}compileEquirectangularShader(){this._equirectMaterial===null&&(this._equirectMaterial=hu(),this._compileMaterial(this._equirectMaterial))}dispose(){this._dispose(),this._cubemapMaterial!==null&&this._cubemapMaterial.dispose(),this._equirectMaterial!==null&&this._equirectMaterial.dispose(),this._backgroundBox!==null&&(this._backgroundBox.geometry.dispose(),this._backgroundBox.material.dispose())}_setSize(e){this._lodMax=Math.floor(Math.log2(e)),this._cubeSize=Math.pow(2,this._lodMax)}_dispose(){this._blurMaterial!==null&&this._blurMaterial.dispose(),this._ggxMaterial!==null&&this._ggxMaterial.dispose(),this._pingPongRenderTarget!==null&&this._pingPongRenderTarget.dispose();for(let e=0;e<this._lodMeshes.length;e++)this._lodMeshes[e].geometry.dispose()}_cleanup(e){this._renderer.setRenderTarget(Ha,Va,Ga),this._renderer.xr.enabled=ka,e.scissorTest=!1,ki(e,0,0,e.width,e.height)}_fromTexture(e,t){e.mapping===Si||e.mapping===Ji?this._setSize(e.image.length===0?16:e.image[0].width||e.image[0].image.width):this._setSize(e.image.width/4),Ha=this._renderer.getRenderTarget(),Va=this._renderer.getActiveCubeFace(),Ga=this._renderer.getActiveMipmapLevel(),ka=this._renderer.xr.enabled,this._renderer.xr.enabled=!1;const i=t||this._allocateTargets();return this._textureToCubeUV(e,i),this._applyPMREM(i),this._cleanup(i),i}_allocateTargets(){const e=3*Math.max(this._cubeSize,112),t=4*this._cubeSize,i={magFilter:Dt,minFilter:Dt,generateMipmaps:!1,type:In,format:nn,colorSpace:Ns,depthBuffer:!1},r=du(e,t,i);if(this._pingPongRenderTarget===null||this._pingPongRenderTarget.width!==e||this._pingPongRenderTarget.height!==t){this._pingPongRenderTarget!==null&&this._dispose(),this._pingPongRenderTarget=du(e,t,i);const{_lodMax:s}=this;({lodMeshes:this._lodMeshes,sizeLods:this._sizeLods,sigmas:this._sigmas}=kx(s)),this._blurMaterial=Xx(s,e,t),this._ggxMaterial=Wx(s,e,t)}return r}_compileMaterial(e){const t=new bt(new sn,e);this._renderer.compile(t,gr)}_sceneToCubeUV(e,t,i,r,s){const l=new qt(90,1,t,i),c=[1,-1,1,1,1,1],u=[1,1,1,-1,-1,-1],h=this._renderer,d=h.autoClear,m=h.toneMapping;h.getClearColor(uu),h.toneMapping=_n,h.autoClear=!1,h.state.buffers.depth.getReversed()&&(h.setRenderTarget(r),h.clearDepth(),h.setRenderTarget(null)),this._backgroundBox===null&&(this._backgroundBox=new bt(new en,new Hf({name:"PMREM.Background",side:Vt,depthWrite:!1,depthTest:!1})));const S=this._backgroundBox,p=S.material;let f=!1;const y=e.background;y?y.isColor&&(p.color.copy(y),e.background=null,f=!0):(p.color.copy(uu),f=!0);for(let w=0;w<6;w++){const M=w%3;M===0?(l.up.set(0,c[w],0),l.position.set(s.x,s.y,s.z),l.lookAt(s.x+u[w],s.y,s.z)):M===1?(l.up.set(0,0,c[w]),l.position.set(s.x,s.y,s.z),l.lookAt(s.x,s.y+u[w],s.z)):(l.up.set(0,c[w],0),l.position.set(s.x,s.y,s.z),l.lookAt(s.x,s.y,s.z+u[w]));const A=this._cubeSize;ki(r,M*A,w>2?A:0,A,A),h.setRenderTarget(r),f&&h.render(S,l),h.render(e,l)}h.toneMapping=m,h.autoClear=d,e.background=y}_textureToCubeUV(e,t){const i=this._renderer,r=e.mapping===Si||e.mapping===Ji;r?(this._cubemapMaterial===null&&(this._cubemapMaterial=pu()),this._cubemapMaterial.uniforms.flipEnvMap.value=e.isRenderTargetTexture===!1?-1:1):this._equirectMaterial===null&&(this._equirectMaterial=hu());const s=r?this._cubemapMaterial:this._equirectMaterial,a=this._lodMeshes[0];a.material=s;const o=s.uniforms;o.envMap.value=e;const l=this._cubeSize;ki(t,0,0,3*l,2*l),i.setRenderTarget(t),i.render(a,gr)}_applyPMREM(e){const t=this._renderer,i=t.autoClear;t.autoClear=!1;const r=this._lodMeshes.length;for(let s=1;s<r;s++)this._applyGGXFilter(e,s-1,s);t.autoClear=i}_applyGGXFilter(e,t,i){const r=this._renderer,s=this._pingPongRenderTarget,a=this._ggxMaterial,o=this._lodMeshes[i];o.material=a;const l=a.uniforms,c=i/(this._lodMeshes.length-1),u=t/(this._lodMeshes.length-1),h=Math.sqrt(c*c-u*u),d=0+c*1.25,m=h*d,{_lodMax:x}=this,S=this._sizeLods[i],p=3*S*(i>x-Yn?i-x+Yn:0),f=4*(this._cubeSize-S);l.envMap.value=e.texture,l.roughness.value=m,l.mipInt.value=x-t,ki(s,p,f,3*S,2*S),r.setRenderTarget(s),r.render(o,gr),l.envMap.value=s.texture,l.roughness.value=0,l.mipInt.value=x-i,ki(e,p,f,3*S,2*S),r.setRenderTarget(e),r.render(o,gr)}_blur(e,t,i,r,s){const a=this._pingPongRenderTarget;this._halfBlur(e,a,t,i,r,"latitudinal",s),this._halfBlur(a,e,i,i,r,"longitudinal",s)}_halfBlur(e,t,i,r,s,a,o){const l=this._renderer,c=this._blurMaterial;a!=="latitudinal"&&a!=="longitudinal"&&$e("blur direction must be either latitudinal or longitudinal!");const u=3,h=this._lodMeshes[r];h.material=c;const d=c.uniforms,m=this._sizeLods[i]-1,x=isFinite(s)?Math.PI/(2*m):2*Math.PI/(2*oi-1),S=s/x,p=isFinite(s)?1+Math.floor(u*S):oi;p>oi&&De(`sigmaRadians, ${s}, is too large and will clip, as it requested ${p} samples when the maximum is set to ${oi}`);const f=[];let y=0;for(let R=0;R<oi;++R){const g=R/S,T=Math.exp(-g*g/2);f.push(T),R===0?y+=T:R<p&&(y+=2*T)}for(let R=0;R<f.length;R++)f[R]=f[R]/y;d.envMap.value=e.texture,d.samples.value=p,d.weights.value=f,d.latitudinal.value=a==="latitudinal",o&&(d.poleAxis.value=o);const{_lodMax:w}=this;d.dTheta.value=x,d.mipInt.value=w-i;const M=this._sizeLods[r],A=3*M*(r>w-Yn?r-w+Yn:0),E=4*(this._cubeSize-M);ki(t,A,E,3*M,2*M),l.setRenderTarget(t),l.render(h,gr)}}function kx(n){const e=[],t=[],i=[];let r=n;const s=n-Yn+1+cu.length;for(let a=0;a<s;a++){const o=Math.pow(2,r);e.push(o);let l=1/o;a>n-Yn?l=cu[a-n+Yn-1]:a===0&&(l=0),t.push(l);const c=1/(o-2),u=-c,h=1+c,d=[u,u,h,u,h,h,u,u,h,h,u,h],m=6,x=6,S=3,p=2,f=1,y=new Float32Array(S*x*m),w=new Float32Array(p*x*m),M=new Float32Array(f*x*m);for(let E=0;E<m;E++){const R=E%3*2/3-1,g=E>2?0:-1,T=[R,g,0,R+2/3,g,0,R+2/3,g+1,0,R,g,0,R+2/3,g+1,0,R,g+1,0];y.set(T,S*x*E),w.set(d,p*x*E);const D=[E,E,E,E,E,E];M.set(D,f*x*E)}const A=new sn;A.setAttribute("position",new xn(y,S)),A.setAttribute("uv",new xn(w,p)),A.setAttribute("faceIndex",new xn(M,f)),i.push(new bt(A,null)),r>Yn&&r--}return{lodMeshes:i,sizeLods:e,sigmas:t}}function du(n,e,t){const i=new gn(n,e,t);return i.texture.mapping=Ys,i.texture.name="PMREM.cubeUv",i.scissorTest=!0,i}function ki(n,e,t,i,r){n.viewport.set(e,t,i,r),n.scissor.set(e,t,i,r)}function Wx(n,e,t){return new Sn({name:"PMREMGGXConvolution",defines:{GGX_SAMPLES:Vx,CUBEUV_TEXEL_WIDTH:1/e,CUBEUV_TEXEL_HEIGHT:1/t,CUBEUV_MAX_MIP:`${n}.0`},uniforms:{envMap:{value:null},roughness:{value:0},mipInt:{value:0}},vertexShader:Ks(),fragmentShader:`

			precision highp float;
			precision highp int;

			varying vec3 vOutputDirection;

			uniform sampler2D envMap;
			uniform float roughness;
			uniform float mipInt;

			#define ENVMAP_TYPE_CUBE_UV
			#include <cube_uv_reflection_fragment>

			#define PI 3.14159265359

			// Van der Corput radical inverse
			float radicalInverse_VdC(uint bits) {
				bits = (bits << 16u) | (bits >> 16u);
				bits = ((bits & 0x55555555u) << 1u) | ((bits & 0xAAAAAAAAu) >> 1u);
				bits = ((bits & 0x33333333u) << 2u) | ((bits & 0xCCCCCCCCu) >> 2u);
				bits = ((bits & 0x0F0F0F0Fu) << 4u) | ((bits & 0xF0F0F0F0u) >> 4u);
				bits = ((bits & 0x00FF00FFu) << 8u) | ((bits & 0xFF00FF00u) >> 8u);
				return float(bits) * 2.3283064365386963e-10; // / 0x100000000
			}

			// Hammersley sequence
			vec2 hammersley(uint i, uint N) {
				return vec2(float(i) / float(N), radicalInverse_VdC(i));
			}

			// GGX VNDF importance sampling (Eric Heitz 2018)
			// "Sampling the GGX Distribution of Visible Normals"
			// https://jcgt.org/published/0007/04/01/
			vec3 importanceSampleGGX_VNDF(vec2 Xi, vec3 V, float roughness) {
				float alpha = roughness * roughness;

				// Section 4.1: Orthonormal basis
				vec3 T1 = vec3(1.0, 0.0, 0.0);
				vec3 T2 = cross(V, T1);

				// Section 4.2: Parameterization of projected area
				float r = sqrt(Xi.x);
				float phi = 2.0 * PI * Xi.y;
				float t1 = r * cos(phi);
				float t2 = r * sin(phi);
				float s = 0.5 * (1.0 + V.z);
				t2 = (1.0 - s) * sqrt(1.0 - t1 * t1) + s * t2;

				// Section 4.3: Reprojection onto hemisphere
				vec3 Nh = t1 * T1 + t2 * T2 + sqrt(max(0.0, 1.0 - t1 * t1 - t2 * t2)) * V;

				// Section 3.4: Transform back to ellipsoid configuration
				return normalize(vec3(alpha * Nh.x, alpha * Nh.y, max(0.0, Nh.z)));
			}

			void main() {
				vec3 N = normalize(vOutputDirection);
				vec3 V = N; // Assume view direction equals normal for pre-filtering

				vec3 prefilteredColor = vec3(0.0);
				float totalWeight = 0.0;

				// For very low roughness, just sample the environment directly
				if (roughness < 0.001) {
					gl_FragColor = vec4(bilinearCubeUV(envMap, N, mipInt), 1.0);
					return;
				}

				// Tangent space basis for VNDF sampling
				vec3 up = abs(N.z) < 0.999 ? vec3(0.0, 0.0, 1.0) : vec3(1.0, 0.0, 0.0);
				vec3 tangent = normalize(cross(up, N));
				vec3 bitangent = cross(N, tangent);

				for(uint i = 0u; i < uint(GGX_SAMPLES); i++) {
					vec2 Xi = hammersley(i, uint(GGX_SAMPLES));

					// For PMREM, V = N, so in tangent space V is always (0, 0, 1)
					vec3 H_tangent = importanceSampleGGX_VNDF(Xi, vec3(0.0, 0.0, 1.0), roughness);

					// Transform H back to world space
					vec3 H = normalize(tangent * H_tangent.x + bitangent * H_tangent.y + N * H_tangent.z);
					vec3 L = normalize(2.0 * dot(V, H) * H - V);

					float NdotL = max(dot(N, L), 0.0);

					if(NdotL > 0.0) {
						// Sample environment at fixed mip level
						// VNDF importance sampling handles the distribution filtering
						vec3 sampleColor = bilinearCubeUV(envMap, L, mipInt);

						// Weight by NdotL for the split-sum approximation
						// VNDF PDF naturally accounts for the visible microfacet distribution
						prefilteredColor += sampleColor * NdotL;
						totalWeight += NdotL;
					}
				}

				if (totalWeight > 0.0) {
					prefilteredColor = prefilteredColor / totalWeight;
				}

				gl_FragColor = vec4(prefilteredColor, 1.0);
			}
		`,blending:Pn,depthTest:!1,depthWrite:!1})}function Xx(n,e,t){const i=new Float32Array(oi),r=new B(0,1,0);return new Sn({name:"SphericalGaussianBlur",defines:{n:oi,CUBEUV_TEXEL_WIDTH:1/e,CUBEUV_TEXEL_HEIGHT:1/t,CUBEUV_MAX_MIP:`${n}.0`},uniforms:{envMap:{value:null},samples:{value:1},weights:{value:i},latitudinal:{value:!1},dTheta:{value:0},mipInt:{value:0},poleAxis:{value:r}},vertexShader:Ks(),fragmentShader:`

			precision mediump float;
			precision mediump int;

			varying vec3 vOutputDirection;

			uniform sampler2D envMap;
			uniform int samples;
			uniform float weights[ n ];
			uniform bool latitudinal;
			uniform float dTheta;
			uniform float mipInt;
			uniform vec3 poleAxis;

			#define ENVMAP_TYPE_CUBE_UV
			#include <cube_uv_reflection_fragment>

			vec3 getSample( float theta, vec3 axis ) {

				float cosTheta = cos( theta );
				// Rodrigues' axis-angle rotation
				vec3 sampleDirection = vOutputDirection * cosTheta
					+ cross( axis, vOutputDirection ) * sin( theta )
					+ axis * dot( axis, vOutputDirection ) * ( 1.0 - cosTheta );

				return bilinearCubeUV( envMap, sampleDirection, mipInt );

			}

			void main() {

				vec3 axis = latitudinal ? poleAxis : cross( poleAxis, vOutputDirection );

				if ( all( equal( axis, vec3( 0.0 ) ) ) ) {

					axis = vec3( vOutputDirection.z, 0.0, - vOutputDirection.x );

				}

				axis = normalize( axis );

				gl_FragColor = vec4( 0.0, 0.0, 0.0, 1.0 );
				gl_FragColor.rgb += weights[ 0 ] * getSample( 0.0, axis );

				for ( int i = 1; i < n; i++ ) {

					if ( i >= samples ) {

						break;

					}

					float theta = dTheta * float( i );
					gl_FragColor.rgb += weights[ i ] * getSample( -1.0 * theta, axis );
					gl_FragColor.rgb += weights[ i ] * getSample( theta, axis );

				}

			}
		`,blending:Pn,depthTest:!1,depthWrite:!1})}function hu(){return new Sn({name:"EquirectangularToCubeUV",uniforms:{envMap:{value:null}},vertexShader:Ks(),fragmentShader:`

			precision mediump float;
			precision mediump int;

			varying vec3 vOutputDirection;

			uniform sampler2D envMap;

			#include <common>

			void main() {

				vec3 outputDirection = normalize( vOutputDirection );
				vec2 uv = equirectUv( outputDirection );

				gl_FragColor = vec4( texture2D ( envMap, uv ).rgb, 1.0 );

			}
		`,blending:Pn,depthTest:!1,depthWrite:!1})}function pu(){return new Sn({name:"CubemapToCubeUV",uniforms:{envMap:{value:null},flipEnvMap:{value:-1}},vertexShader:Ks(),fragmentShader:`

			precision mediump float;
			precision mediump int;

			uniform float flipEnvMap;

			varying vec3 vOutputDirection;

			uniform samplerCube envMap;

			void main() {

				gl_FragColor = textureCube( envMap, vec3( flipEnvMap * vOutputDirection.x, vOutputDirection.yz ) );

			}
		`,blending:Pn,depthTest:!1,depthWrite:!1})}function Ks(){return`

		precision mediump float;
		precision mediump int;

		attribute float faceIndex;

		varying vec3 vOutputDirection;

		// RH coordinate system; PMREM face-indexing convention
		vec3 getDirection( vec2 uv, float face ) {

			uv = 2.0 * uv - 1.0;

			vec3 direction = vec3( uv, 1.0 );

			if ( face == 0.0 ) {

				direction = direction.zyx; // ( 1, v, u ) pos x

			} else if ( face == 1.0 ) {

				direction = direction.xzy;
				direction.xz *= -1.0; // ( -u, 1, -v ) pos y

			} else if ( face == 2.0 ) {

				direction.x *= -1.0; // ( -u, v, 1 ) pos z

			} else if ( face == 3.0 ) {

				direction = direction.zyx;
				direction.xz *= -1.0; // ( -1, v, -u ) neg x

			} else if ( face == 4.0 ) {

				direction = direction.xzy;
				direction.xy *= -1.0; // ( -u, -1, v ) neg y

			} else if ( face == 5.0 ) {

				direction.z *= -1.0; // ( u, v, -1 ) neg z

			}

			return direction;

		}

		void main() {

			vOutputDirection = getDirection( uv, faceIndex );
			gl_Position = vec4( position, 1.0 );

		}
	`}class $f extends gn{constructor(e=1,t={}){super(e,e,t),this.isWebGLCubeRenderTarget=!0;const i={width:e,height:e,depth:1},r=[i,i,i,i,i,i];this.texture=new Vf(r),this._setTextureOptions(t),this.texture.isRenderTargetTexture=!0}fromEquirectangularTexture(e,t){this.texture.type=t.type,this.texture.colorSpace=t.colorSpace,this.texture.generateMipmaps=t.generateMipmaps,this.texture.minFilter=t.minFilter,this.texture.magFilter=t.magFilter;const i={uniforms:{tEquirect:{value:null}},vertexShader:`

				varying vec3 vWorldDirection;

				vec3 transformDirection( in vec3 dir, in mat4 matrix ) {

					return normalize( ( matrix * vec4( dir, 0.0 ) ).xyz );

				}

				void main() {

					vWorldDirection = transformDirection( position, modelMatrix );

					#include <begin_vertex>
					#include <project_vertex>

				}
			`,fragmentShader:`

				uniform sampler2D tEquirect;

				varying vec3 vWorldDirection;

				#include <common>

				void main() {

					vec3 direction = normalize( vWorldDirection );

					vec2 sampleUV = equirectUv( direction );

					gl_FragColor = texture2D( tEquirect, sampleUV );

				}
			`},r=new en(5,5,5),s=new Sn({name:"CubemapFromEquirect",uniforms:ji(i.uniforms),vertexShader:i.vertexShader,fragmentShader:i.fragmentShader,side:Vt,blending:Pn});s.uniforms.tEquirect.value=t;const a=new bt(r,s),o=t.minFilter;return t.minFilter===ci&&(t.minFilter=Dt),new Z_(1,10,this).update(e,a),t.minFilter=o,a.geometry.dispose(),a.material.dispose(),this}clear(e,t=!0,i=!0,r=!0){const s=e.getRenderTarget();for(let a=0;a<6;a++)e.setRenderTarget(this,a),e.clear(t,i,r);e.setRenderTarget(s)}}function qx(n){let e=new WeakMap,t=new WeakMap,i=null;function r(d,m=!1){return d==null?null:m?a(d):s(d)}function s(d){if(d&&d.isTexture){const m=d.mapping;if(m===da||m===ha)if(e.has(d)){const x=e.get(d).texture;return o(x,d.mapping)}else{const x=d.image;if(x&&x.height>0){const S=new $f(x.height);return S.fromEquirectangularTexture(n,d),e.set(d,S),d.addEventListener("dispose",c),o(S.texture,d.mapping)}else return null}}return d}function a(d){if(d&&d.isTexture){const m=d.mapping,x=m===da||m===ha,S=m===Si||m===Ji;if(x||S){let p=t.get(d);const f=p!==void 0?p.texture.pmremVersion:0;if(d.isRenderTargetTexture&&d.pmremVersion!==f)return i===null&&(i=new fu(n)),p=x?i.fromEquirectangular(d,p):i.fromCubemap(d,p),p.texture.pmremVersion=d.pmremVersion,t.set(d,p),p.texture;if(p!==void 0)return p.texture;{const y=d.image;return x&&y&&y.height>0||S&&y&&l(y)?(i===null&&(i=new fu(n)),p=x?i.fromEquirectangular(d):i.fromCubemap(d),p.texture.pmremVersion=d.pmremVersion,t.set(d,p),d.addEventListener("dispose",u),p.texture):null}}}return d}function o(d,m){return m===da?d.mapping=Si:m===ha&&(d.mapping=Ji),d}function l(d){let m=0;const x=6;for(let S=0;S<x;S++)d[S]!==void 0&&m++;return m===x}function c(d){const m=d.target;m.removeEventListener("dispose",c);const x=e.get(m);x!==void 0&&(e.delete(m),x.dispose())}function u(d){const m=d.target;m.removeEventListener("dispose",u);const x=t.get(m);x!==void 0&&(t.delete(m),x.dispose())}function h(){e=new WeakMap,t=new WeakMap,i!==null&&(i.dispose(),i=null)}return{get:r,dispose:h}}function Yx(n){const e={};function t(i){if(e[i]!==void 0)return e[i];const r=n.getExtension(i);return e[i]=r,r}return{has:function(i){return t(i)!==null},init:function(){t("EXT_color_buffer_float"),t("WEBGL_clip_cull_distance"),t("OES_texture_float_linear"),t("EXT_color_buffer_half_float"),t("WEBGL_multisampled_render_to_texture"),t("WEBGL_render_shared_exponent")},get:function(i){const r=t(i);return r===null&&qi("WebGLRenderer: "+i+" extension not supported."),r}}}function $x(n,e,t,i){const r={},s=new WeakMap;function a(h){const d=h.target;d.index!==null&&e.remove(d.index);for(const x in d.attributes)e.remove(d.attributes[x]);d.removeEventListener("dispose",a),delete r[d.id];const m=s.get(d);m&&(e.remove(m),s.delete(d)),i.releaseStatesOfGeometry(d),d.isInstancedBufferGeometry===!0&&delete d._maxInstanceCount,t.memory.geometries--}function o(h,d){return r[d.id]===!0||(d.addEventListener("dispose",a),r[d.id]=!0,t.memory.geometries++),d}function l(h){const d=h.attributes;for(const m in d)e.update(d[m],n.ARRAY_BUFFER)}function c(h){const d=[],m=h.index,x=h.attributes.position;let S=0;if(x===void 0)return;if(m!==null){const y=m.array;S=m.version;for(let w=0,M=y.length;w<M;w+=3){const A=y[w+0],E=y[w+1],R=y[w+2];d.push(A,E,E,R,R,A)}}else{const y=x.array;S=x.version;for(let w=0,M=y.length/3-1;w<M;w+=3){const A=w+0,E=w+1,R=w+2;d.push(A,E,E,R,R,A)}}const p=new(x.count>=65535?zf:Bf)(d,1);p.version=S;const f=s.get(h);f&&e.remove(f),s.set(h,p)}function u(h){const d=s.get(h);if(d){const m=h.index;m!==null&&d.version<m.version&&c(h)}else c(h);return s.get(h)}return{get:o,update:l,getWireframeAttribute:u}}function Kx(n,e,t){let i;function r(h){i=h}let s,a;function o(h){s=h.type,a=h.bytesPerElement}function l(h,d){n.drawElements(i,d,s,h*a),t.update(d,i,1)}function c(h,d,m){m!==0&&(n.drawElementsInstanced(i,d,s,h*a,m),t.update(d,i,m))}function u(h,d,m){if(m===0)return;e.get("WEBGL_multi_draw").multiDrawElementsWEBGL(i,d,0,s,h,0,m);let S=0;for(let p=0;p<m;p++)S+=d[p];t.update(S,i,1)}this.setMode=r,this.setIndex=o,this.render=l,this.renderInstances=c,this.renderMultiDraw=u}function Zx(n){const e={geometries:0,textures:0},t={frame:0,calls:0,triangles:0,points:0,lines:0};function i(s,a,o){switch(t.calls++,a){case n.TRIANGLES:t.triangles+=o*(s/3);break;case n.LINES:t.lines+=o*(s/2);break;case n.LINE_STRIP:t.lines+=o*(s-1);break;case n.LINE_LOOP:t.lines+=o*s;break;case n.POINTS:t.points+=o*s;break;default:$e("WebGLInfo: Unknown draw mode:",a);break}}function r(){t.calls=0,t.triangles=0,t.points=0,t.lines=0}return{memory:e,render:t,programs:null,autoReset:!0,reset:r,update:i}}function Jx(n,e,t){const i=new WeakMap,r=new ut;function s(a,o,l){const c=a.morphTargetInfluences,u=o.morphAttributes.position||o.morphAttributes.normal||o.morphAttributes.color,h=u!==void 0?u.length:0;let d=i.get(o);if(d===void 0||d.count!==h){let D=function(){g.dispose(),i.delete(o),o.removeEventListener("dispose",D)};var m=D;d!==void 0&&d.texture.dispose();const x=o.morphAttributes.position!==void 0,S=o.morphAttributes.normal!==void 0,p=o.morphAttributes.color!==void 0,f=o.morphAttributes.position||[],y=o.morphAttributes.normal||[],w=o.morphAttributes.color||[];let M=0;x===!0&&(M=1),S===!0&&(M=2),p===!0&&(M=3);let A=o.attributes.position.count*M,E=1;A>e.maxTextureSize&&(E=Math.ceil(A/e.maxTextureSize),A=e.maxTextureSize);const R=new Float32Array(A*E*4*h),g=new Nf(R,A,E,h);g.type=pn,g.needsUpdate=!0;const T=M*4;for(let C=0;C<h;C++){const N=f[C],X=y[C],q=w[C],F=A*E*4*C;for(let Y=0;Y<N.count;Y++){const H=Y*T;x===!0&&(r.fromBufferAttribute(N,Y),R[F+H+0]=r.x,R[F+H+1]=r.y,R[F+H+2]=r.z,R[F+H+3]=0),S===!0&&(r.fromBufferAttribute(X,Y),R[F+H+4]=r.x,R[F+H+5]=r.y,R[F+H+6]=r.z,R[F+H+7]=0),p===!0&&(r.fromBufferAttribute(q,Y),R[F+H+8]=r.x,R[F+H+9]=r.y,R[F+H+10]=r.z,R[F+H+11]=q.itemSize===4?r.w:1)}}d={count:h,texture:g,size:new Ve(A,E)},i.set(o,d),o.addEventListener("dispose",D)}if(a.isInstancedMesh===!0&&a.morphTexture!==null)l.getUniforms().setValue(n,"morphTexture",a.morphTexture,t);else{let x=0;for(let p=0;p<c.length;p++)x+=c[p];const S=o.morphTargetsRelative?1:1-x;l.getUniforms().setValue(n,"morphTargetBaseInfluence",S),l.getUniforms().setValue(n,"morphTargetInfluences",c)}l.getUniforms().setValue(n,"morphTargetsTexture",d.texture,t),l.getUniforms().setValue(n,"morphTargetsTextureSize",d.size)}return{update:s}}function Qx(n,e,t,i,r){let s=new WeakMap;function a(c){const u=r.render.frame,h=c.geometry,d=e.get(c,h);if(s.get(d)!==u&&(e.update(d),s.set(d,u)),c.isInstancedMesh&&(c.hasEventListener("dispose",l)===!1&&c.addEventListener("dispose",l),s.get(c)!==u&&(t.update(c.instanceMatrix,n.ARRAY_BUFFER),c.instanceColor!==null&&t.update(c.instanceColor,n.ARRAY_BUFFER),s.set(c,u))),c.isSkinnedMesh){const m=c.skeleton;s.get(m)!==u&&(m.update(),s.set(m,u))}return d}function o(){s=new WeakMap}function l(c){const u=c.target;u.removeEventListener("dispose",l),i.releaseStatesOfObject(u),t.remove(u.instanceMatrix),u.instanceColor!==null&&t.remove(u.instanceColor)}return{update:a,dispose:o}}const jx={[vf]:"LINEAR_TONE_MAPPING",[Sf]:"REINHARD_TONE_MAPPING",[Mf]:"CINEON_TONE_MAPPING",[Ef]:"ACES_FILMIC_TONE_MAPPING",[bf]:"AGX_TONE_MAPPING",[Tf]:"NEUTRAL_TONE_MAPPING",[yf]:"CUSTOM_TONE_MAPPING"};function ev(n,e,t,i,r,s){const a=new gn(e,t,{type:n,depthBuffer:r,stencilBuffer:s,samples:i?4:0,depthTexture:r?new Qi(e,t):void 0}),o=new gn(e,t,{type:In,depthBuffer:!1,stencilBuffer:!1}),l=new sn;l.setAttribute("position",new Ot([-1,3,0,-1,-1,0,3,-1,0],3)),l.setAttribute("uv",new Ot([0,2,0,0,2,0],2));const c=new G_({uniforms:{tDiffuse:{value:null}},vertexShader:`
			precision highp float;

			uniform mat4 modelViewMatrix;
			uniform mat4 projectionMatrix;

			attribute vec3 position;
			attribute vec2 uv;

			varying vec2 vUv;

			void main() {
				vUv = uv;
				gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
			}`,fragmentShader:`
			precision highp float;

			uniform sampler2D tDiffuse;

			varying vec2 vUv;

			#include <tonemapping_pars_fragment>
			#include <colorspace_pars_fragment>

			void main() {
				gl_FragColor = texture2D( tDiffuse, vUv );

				#ifdef LINEAR_TONE_MAPPING
					gl_FragColor.rgb = LinearToneMapping( gl_FragColor.rgb );
				#elif defined( REINHARD_TONE_MAPPING )
					gl_FragColor.rgb = ReinhardToneMapping( gl_FragColor.rgb );
				#elif defined( CINEON_TONE_MAPPING )
					gl_FragColor.rgb = CineonToneMapping( gl_FragColor.rgb );
				#elif defined( ACES_FILMIC_TONE_MAPPING )
					gl_FragColor.rgb = ACESFilmicToneMapping( gl_FragColor.rgb );
				#elif defined( AGX_TONE_MAPPING )
					gl_FragColor.rgb = AgXToneMapping( gl_FragColor.rgb );
				#elif defined( NEUTRAL_TONE_MAPPING )
					gl_FragColor.rgb = NeutralToneMapping( gl_FragColor.rgb );
				#elif defined( CUSTOM_TONE_MAPPING )
					gl_FragColor.rgb = CustomToneMapping( gl_FragColor.rgb );
				#endif

				#ifdef SRGB_TRANSFER
					gl_FragColor = sRGBTransferOETF( gl_FragColor );
				#endif
			}`,depthTest:!1,depthWrite:!1}),u=new bt(l,c),h=new Cl(-1,1,1,-1,0,1);let d=null,m=null,x=!1,S,p=null,f=[],y=!1;this.setSize=function(w,M){a.setSize(w,M),o.setSize(w,M);for(let A=0;A<f.length;A++){const E=f[A];E.setSize&&E.setSize(w,M)}},this.setEffects=function(w){f=w,y=f.length>0&&f[0].isRenderPass===!0;const M=a.width,A=a.height;for(let E=0;E<f.length;E++){const R=f[E];R.setSize&&R.setSize(M,A)}},this.begin=function(w,M){if(x||w.toneMapping===_n&&f.length===0)return!1;if(p=M,M!==null){const A=M.width,E=M.height;(a.width!==A||a.height!==E)&&this.setSize(A,E)}return y===!1&&w.setRenderTarget(a),S=w.toneMapping,w.toneMapping=_n,!0},this.hasRenderPass=function(){return y},this.end=function(w,M){w.toneMapping=S,x=!0;let A=a,E=o;for(let R=0;R<f.length;R++){const g=f[R];if(g.enabled!==!1&&(g.render(w,E,A,M),g.needsSwap!==!1)){const T=A;A=E,E=T}}if(d!==w.outputColorSpace||m!==w.toneMapping){d=w.outputColorSpace,m=w.toneMapping,c.defines={},Ge.getTransfer(d)===Qe&&(c.defines.SRGB_TRANSFER="");const R=jx[m];R&&(c.defines[R]=""),c.needsUpdate=!0}c.uniforms.tDiffuse.value=A.texture,w.setRenderTarget(p),w.render(u,h),p=null,x=!1},this.isCompositing=function(){return x},this.dispose=function(){a.depthTexture&&a.depthTexture.dispose(),a.dispose(),o.dispose(),l.dispose(),c.dispose()}}const Kf=new Nt,Wo=new Qi(1,1),Zf=new Nf,Jf=new x_,Qf=new Vf,mu=[],_u=[],gu=new Float32Array(16),xu=new Float32Array(9),vu=new Float32Array(4);function rr(n,e,t){const i=n[0];if(i<=0||i>0)return n;const r=e*t;let s=mu[r];if(s===void 0&&(s=new Float32Array(r),mu[r]=s),e!==0){i.toArray(s,0);for(let a=1,o=0;a!==e;++a)o+=t,n[a].toArray(s,o)}return s}function Mt(n,e){if(n.length!==e.length)return!1;for(let t=0,i=n.length;t<i;t++)if(n[t]!==e[t])return!1;return!0}function Et(n,e){for(let t=0,i=e.length;t<i;t++)n[t]=e[t]}function Zs(n,e){let t=_u[e];t===void 0&&(t=new Int32Array(e),_u[e]=t);for(let i=0;i!==e;++i)t[i]=n.allocateTextureUnit();return t}function tv(n,e){const t=this.cache;t[0]!==e&&(n.uniform1f(this.addr,e),t[0]=e)}function nv(n,e){const t=this.cache;if(e.x!==void 0)(t[0]!==e.x||t[1]!==e.y)&&(n.uniform2f(this.addr,e.x,e.y),t[0]=e.x,t[1]=e.y);else{if(Mt(t,e))return;n.uniform2fv(this.addr,e),Et(t,e)}}function iv(n,e){const t=this.cache;if(e.x!==void 0)(t[0]!==e.x||t[1]!==e.y||t[2]!==e.z)&&(n.uniform3f(this.addr,e.x,e.y,e.z),t[0]=e.x,t[1]=e.y,t[2]=e.z);else if(e.r!==void 0)(t[0]!==e.r||t[1]!==e.g||t[2]!==e.b)&&(n.uniform3f(this.addr,e.r,e.g,e.b),t[0]=e.r,t[1]=e.g,t[2]=e.b);else{if(Mt(t,e))return;n.uniform3fv(this.addr,e),Et(t,e)}}function rv(n,e){const t=this.cache;if(e.x!==void 0)(t[0]!==e.x||t[1]!==e.y||t[2]!==e.z||t[3]!==e.w)&&(n.uniform4f(this.addr,e.x,e.y,e.z,e.w),t[0]=e.x,t[1]=e.y,t[2]=e.z,t[3]=e.w);else{if(Mt(t,e))return;n.uniform4fv(this.addr,e),Et(t,e)}}function sv(n,e){const t=this.cache,i=e.elements;if(i===void 0){if(Mt(t,e))return;n.uniformMatrix2fv(this.addr,!1,e),Et(t,e)}else{if(Mt(t,i))return;vu.set(i),n.uniformMatrix2fv(this.addr,!1,vu),Et(t,i)}}function av(n,e){const t=this.cache,i=e.elements;if(i===void 0){if(Mt(t,e))return;n.uniformMatrix3fv(this.addr,!1,e),Et(t,e)}else{if(Mt(t,i))return;xu.set(i),n.uniformMatrix3fv(this.addr,!1,xu),Et(t,i)}}function ov(n,e){const t=this.cache,i=e.elements;if(i===void 0){if(Mt(t,e))return;n.uniformMatrix4fv(this.addr,!1,e),Et(t,e)}else{if(Mt(t,i))return;gu.set(i),n.uniformMatrix4fv(this.addr,!1,gu),Et(t,i)}}function lv(n,e){const t=this.cache;t[0]!==e&&(n.uniform1i(this.addr,e),t[0]=e)}function cv(n,e){const t=this.cache;if(e.x!==void 0)(t[0]!==e.x||t[1]!==e.y)&&(n.uniform2i(this.addr,e.x,e.y),t[0]=e.x,t[1]=e.y);else{if(Mt(t,e))return;n.uniform2iv(this.addr,e),Et(t,e)}}function uv(n,e){const t=this.cache;if(e.x!==void 0)(t[0]!==e.x||t[1]!==e.y||t[2]!==e.z)&&(n.uniform3i(this.addr,e.x,e.y,e.z),t[0]=e.x,t[1]=e.y,t[2]=e.z);else{if(Mt(t,e))return;n.uniform3iv(this.addr,e),Et(t,e)}}function fv(n,e){const t=this.cache;if(e.x!==void 0)(t[0]!==e.x||t[1]!==e.y||t[2]!==e.z||t[3]!==e.w)&&(n.uniform4i(this.addr,e.x,e.y,e.z,e.w),t[0]=e.x,t[1]=e.y,t[2]=e.z,t[3]=e.w);else{if(Mt(t,e))return;n.uniform4iv(this.addr,e),Et(t,e)}}function dv(n,e){const t=this.cache;t[0]!==e&&(n.uniform1ui(this.addr,e),t[0]=e)}function hv(n,e){const t=this.cache;if(e.x!==void 0)(t[0]!==e.x||t[1]!==e.y)&&(n.uniform2ui(this.addr,e.x,e.y),t[0]=e.x,t[1]=e.y);else{if(Mt(t,e))return;n.uniform2uiv(this.addr,e),Et(t,e)}}function pv(n,e){const t=this.cache;if(e.x!==void 0)(t[0]!==e.x||t[1]!==e.y||t[2]!==e.z)&&(n.uniform3ui(this.addr,e.x,e.y,e.z),t[0]=e.x,t[1]=e.y,t[2]=e.z);else{if(Mt(t,e))return;n.uniform3uiv(this.addr,e),Et(t,e)}}function mv(n,e){const t=this.cache;if(e.x!==void 0)(t[0]!==e.x||t[1]!==e.y||t[2]!==e.z||t[3]!==e.w)&&(n.uniform4ui(this.addr,e.x,e.y,e.z,e.w),t[0]=e.x,t[1]=e.y,t[2]=e.z,t[3]=e.w);else{if(Mt(t,e))return;n.uniform4uiv(this.addr,e),Et(t,e)}}function _v(n,e,t){const i=this.cache,r=t.allocateTextureUnit();i[0]!==r&&(n.uniform1i(this.addr,r),i[0]=r);let s;this.type===n.SAMPLER_2D_SHADOW?(Wo.compareFunction=t.isReversedDepthBuffer()?yl:El,s=Wo):s=Kf,t.setTexture2D(e||s,r)}function gv(n,e,t){const i=this.cache,r=t.allocateTextureUnit();i[0]!==r&&(n.uniform1i(this.addr,r),i[0]=r),t.setTexture3D(e||Jf,r)}function xv(n,e,t){const i=this.cache,r=t.allocateTextureUnit();i[0]!==r&&(n.uniform1i(this.addr,r),i[0]=r),t.setTextureCube(e||Qf,r)}function vv(n,e,t){const i=this.cache,r=t.allocateTextureUnit();i[0]!==r&&(n.uniform1i(this.addr,r),i[0]=r),t.setTexture2DArray(e||Zf,r)}function Sv(n){switch(n){case 5126:return tv;case 35664:return nv;case 35665:return iv;case 35666:return rv;case 35674:return sv;case 35675:return av;case 35676:return ov;case 5124:case 35670:return lv;case 35667:case 35671:return cv;case 35668:case 35672:return uv;case 35669:case 35673:return fv;case 5125:return dv;case 36294:return hv;case 36295:return pv;case 36296:return mv;case 35678:case 36198:case 36298:case 36306:case 35682:return _v;case 35679:case 36299:case 36307:return gv;case 35680:case 36300:case 36308:case 36293:return xv;case 36289:case 36303:case 36311:case 36292:return vv}}function Mv(n,e){n.uniform1fv(this.addr,e)}function Ev(n,e){const t=rr(e,this.size,2);n.uniform2fv(this.addr,t)}function yv(n,e){const t=rr(e,this.size,3);n.uniform3fv(this.addr,t)}function bv(n,e){const t=rr(e,this.size,4);n.uniform4fv(this.addr,t)}function Tv(n,e){const t=rr(e,this.size,4);n.uniformMatrix2fv(this.addr,!1,t)}function Av(n,e){const t=rr(e,this.size,9);n.uniformMatrix3fv(this.addr,!1,t)}function wv(n,e){const t=rr(e,this.size,16);n.uniformMatrix4fv(this.addr,!1,t)}function Rv(n,e){n.uniform1iv(this.addr,e)}function Cv(n,e){n.uniform2iv(this.addr,e)}function Pv(n,e){n.uniform3iv(this.addr,e)}function Dv(n,e){n.uniform4iv(this.addr,e)}function Lv(n,e){n.uniform1uiv(this.addr,e)}function Iv(n,e){n.uniform2uiv(this.addr,e)}function Uv(n,e){n.uniform3uiv(this.addr,e)}function Nv(n,e){n.uniform4uiv(this.addr,e)}function Ov(n,e,t){const i=this.cache,r=e.length,s=Zs(t,r);Mt(i,s)||(n.uniform1iv(this.addr,s),Et(i,s));let a;this.type===n.SAMPLER_2D_SHADOW?a=Wo:a=Kf;for(let o=0;o!==r;++o)t.setTexture2D(e[o]||a,s[o])}function Fv(n,e,t){const i=this.cache,r=e.length,s=Zs(t,r);Mt(i,s)||(n.uniform1iv(this.addr,s),Et(i,s));for(let a=0;a!==r;++a)t.setTexture3D(e[a]||Jf,s[a])}function Bv(n,e,t){const i=this.cache,r=e.length,s=Zs(t,r);Mt(i,s)||(n.uniform1iv(this.addr,s),Et(i,s));for(let a=0;a!==r;++a)t.setTextureCube(e[a]||Qf,s[a])}function zv(n,e,t){const i=this.cache,r=e.length,s=Zs(t,r);Mt(i,s)||(n.uniform1iv(this.addr,s),Et(i,s));for(let a=0;a!==r;++a)t.setTexture2DArray(e[a]||Zf,s[a])}function Hv(n){switch(n){case 5126:return Mv;case 35664:return Ev;case 35665:return yv;case 35666:return bv;case 35674:return Tv;case 35675:return Av;case 35676:return wv;case 5124:case 35670:return Rv;case 35667:case 35671:return Cv;case 35668:case 35672:return Pv;case 35669:case 35673:return Dv;case 5125:return Lv;case 36294:return Iv;case 36295:return Uv;case 36296:return Nv;case 35678:case 36198:case 36298:case 36306:case 35682:return Ov;case 35679:case 36299:case 36307:return Fv;case 35680:case 36300:case 36308:case 36293:return Bv;case 36289:case 36303:case 36311:case 36292:return zv}}class Vv{constructor(e,t,i){this.id=e,this.addr=i,this.cache=[],this.type=t.type,this.setValue=Sv(t.type)}}class Gv{constructor(e,t,i){this.id=e,this.addr=i,this.cache=[],this.type=t.type,this.size=t.size,this.setValue=Hv(t.type)}}class kv{constructor(e){this.id=e,this.seq=[],this.map={}}setValue(e,t,i){const r=this.seq;for(let s=0,a=r.length;s!==a;++s){const o=r[s];o.setValue(e,t[o.id],i)}}}const Wa=/(\w+)(\])?(\[|\.)?/g;function Su(n,e){n.seq.push(e),n.map[e.id]=e}function Wv(n,e,t){const i=n.name,r=i.length;for(Wa.lastIndex=0;;){const s=Wa.exec(i),a=Wa.lastIndex;let o=s[1];const l=s[2]==="]",c=s[3];if(l&&(o=o|0),c===void 0||c==="["&&a+2===r){Su(t,c===void 0?new Vv(o,n,e):new Gv(o,n,e));break}else{let h=t.map[o];h===void 0&&(h=new kv(o),Su(t,h)),t=h}}}class Rs{constructor(e,t){this.seq=[],this.map={};const i=e.getProgramParameter(t,e.ACTIVE_UNIFORMS);for(let a=0;a<i;++a){const o=e.getActiveUniform(t,a),l=e.getUniformLocation(t,o.name);Wv(o,l,this)}const r=[],s=[];for(const a of this.seq)a.type===e.SAMPLER_2D_SHADOW||a.type===e.SAMPLER_CUBE_SHADOW||a.type===e.SAMPLER_2D_ARRAY_SHADOW?r.push(a):s.push(a);r.length>0&&(this.seq=r.concat(s))}setValue(e,t,i,r){const s=this.map[t];s!==void 0&&s.setValue(e,i,r)}setOptional(e,t,i){const r=t[i];r!==void 0&&this.setValue(e,i,r)}static upload(e,t,i,r){for(let s=0,a=t.length;s!==a;++s){const o=t[s],l=i[o.id];l.needsUpdate!==!1&&o.setValue(e,l.value,r)}}static seqWithValue(e,t){const i=[];for(let r=0,s=e.length;r!==s;++r){const a=e[r];a.id in t&&i.push(a)}return i}}function Mu(n,e,t){const i=n.createShader(e);return n.shaderSource(i,t),n.compileShader(i),i}const Xv=37297;let qv=0;function Yv(n,e){const t=n.split(`
`),i=[],r=Math.max(e-6,0),s=Math.min(e+6,t.length);for(let a=r;a<s;a++){const o=a+1;i.push(`${o===e?">":" "} ${o}: ${t[a]}`)}return i.join(`
`)}const Eu=new Ie;function $v(n){Ge._getMatrix(Eu,Ge.workingColorSpace,n);const e=`mat3( ${Eu.elements.map(t=>t.toFixed(4))} )`;switch(Ge.getTransfer(n)){case Os:return[e,"LinearTransferOETF"];case Qe:return[e,"sRGBTransferOETF"];default:return De("WebGLProgram: Unsupported color space: ",n),[e,"LinearTransferOETF"]}}function yu(n,e,t){const i=n.getShaderParameter(e,n.COMPILE_STATUS),s=(n.getShaderInfoLog(e)||"").trim();if(i&&s==="")return"";const a=/ERROR: 0:(\d+)/.exec(s);if(a){const o=parseInt(a[1]);return t.toUpperCase()+`

`+s+`

`+Yv(n.getShaderSource(e),o)}else return s}function Kv(n,e){const t=$v(e);return[`vec4 ${n}( vec4 value ) {`,`	return ${t[1]}( vec4( value.rgb * ${t[0]}, value.a ) );`,"}"].join(`
`)}const Zv={[vf]:"Linear",[Sf]:"Reinhard",[Mf]:"Cineon",[Ef]:"ACESFilmic",[bf]:"AgX",[Tf]:"Neutral",[yf]:"Custom"};function Jv(n,e){const t=Zv[e];return t===void 0?(De("WebGLProgram: Unsupported toneMapping:",e),"vec3 "+n+"( vec3 color ) { return LinearToneMapping( color ); }"):"vec3 "+n+"( vec3 color ) { return "+t+"ToneMapping( color ); }"}const hs=new B;function Qv(){Ge.getLuminanceCoefficients(hs);const n=hs.x.toFixed(4),e=hs.y.toFixed(4),t=hs.z.toFixed(4);return["float luminance( const in vec3 rgb ) {",`	const vec3 weights = vec3( ${n}, ${e}, ${t} );`,"	return dot( weights, rgb );","}"].join(`
`)}function jv(n){return[n.extensionClipCullDistance?"#extension GL_ANGLE_clip_cull_distance : require":"",n.extensionMultiDraw?"#extension GL_ANGLE_multi_draw : require":""].filter(br).join(`
`)}function eS(n){const e=[];for(const t in n){const i=n[t];i!==!1&&e.push("#define "+t+" "+i)}return e.join(`
`)}function tS(n,e){const t={},i=n.getProgramParameter(e,n.ACTIVE_ATTRIBUTES);for(let r=0;r<i;r++){const s=n.getActiveAttrib(e,r),a=s.name;let o=1;s.type===n.FLOAT_MAT2&&(o=2),s.type===n.FLOAT_MAT3&&(o=3),s.type===n.FLOAT_MAT4&&(o=4),t[a]={type:s.type,location:n.getAttribLocation(e,a),locationSize:o}}return t}function br(n){return n!==""}function bu(n,e){const t=e.numSpotLightShadows+e.numSpotLightMaps-e.numSpotLightShadowsWithMaps;return n.replace(/NUM_DIR_LIGHTS/g,e.numDirLights).replace(/NUM_SPOT_LIGHTS/g,e.numSpotLights).replace(/NUM_SPOT_LIGHT_MAPS/g,e.numSpotLightMaps).replace(/NUM_SPOT_LIGHT_COORDS/g,t).replace(/NUM_RECT_AREA_LIGHTS/g,e.numRectAreaLights).replace(/NUM_POINT_LIGHTS/g,e.numPointLights).replace(/NUM_HEMI_LIGHTS/g,e.numHemiLights).replace(/NUM_DIR_LIGHT_SHADOWS/g,e.numDirLightShadows).replace(/NUM_SPOT_LIGHT_SHADOWS_WITH_MAPS/g,e.numSpotLightShadowsWithMaps).replace(/NUM_SPOT_LIGHT_SHADOWS/g,e.numSpotLightShadows).replace(/NUM_POINT_LIGHT_SHADOWS/g,e.numPointLightShadows)}function Tu(n,e){return n.replace(/NUM_CLIPPING_PLANES/g,e.numClippingPlanes).replace(/UNION_CLIPPING_PLANES/g,e.numClippingPlanes-e.numClipIntersection)}const nS=/^[ \t]*#include +<([\w\d./]+)>/gm;function Xo(n){return n.replace(nS,rS)}const iS=new Map;function rS(n,e){let t=Fe[e];if(t===void 0){const i=iS.get(e);if(i!==void 0)t=Fe[i],De('WebGLRenderer: Shader chunk "%s" has been deprecated. Use "%s" instead.',e,i);else throw new Error("THREE.WebGLProgram: Can not resolve #include <"+e+">")}return Xo(t)}const sS=/#pragma unroll_loop_start\s+for\s*\(\s*int\s+i\s*=\s*(\d+)\s*;\s*i\s*<\s*(\d+)\s*;\s*i\s*\+\+\s*\)\s*{([\s\S]+?)}\s+#pragma unroll_loop_end/g;function Au(n){return n.replace(sS,aS)}function aS(n,e,t,i){let r="";for(let s=parseInt(e);s<parseInt(t);s++)r+=i.replace(/\[\s*i\s*\]/g,"[ "+s+" ]").replace(/UNROLLED_LOOP_INDEX/g,s);return r}function wu(n){let e=`precision ${n.precision} float;
	precision ${n.precision} int;
	precision ${n.precision} sampler2D;
	precision ${n.precision} samplerCube;
	precision ${n.precision} sampler3D;
	precision ${n.precision} sampler2DArray;
	precision ${n.precision} sampler2DShadow;
	precision ${n.precision} samplerCubeShadow;
	precision ${n.precision} sampler2DArrayShadow;
	precision ${n.precision} isampler2D;
	precision ${n.precision} isampler3D;
	precision ${n.precision} isamplerCube;
	precision ${n.precision} isampler2DArray;
	precision ${n.precision} usampler2D;
	precision ${n.precision} usampler3D;
	precision ${n.precision} usamplerCube;
	precision ${n.precision} usampler2DArray;
	`;return n.precision==="highp"?e+=`
#define HIGH_PRECISION`:n.precision==="mediump"?e+=`
#define MEDIUM_PRECISION`:n.precision==="lowp"&&(e+=`
#define LOW_PRECISION`),e}const oS={[ys]:"SHADOWMAP_TYPE_PCF",[Er]:"SHADOWMAP_TYPE_VSM"};function lS(n){return oS[n.shadowMapType]||"SHADOWMAP_TYPE_BASIC"}const cS={[Si]:"ENVMAP_TYPE_CUBE",[Ji]:"ENVMAP_TYPE_CUBE",[Ys]:"ENVMAP_TYPE_CUBE_UV"};function uS(n){return n.envMap===!1?"ENVMAP_TYPE_CUBE":cS[n.envMapMode]||"ENVMAP_TYPE_CUBE"}const fS={[Ji]:"ENVMAP_MODE_REFRACTION"};function dS(n){return n.envMap===!1?"ENVMAP_MODE_REFLECTION":fS[n.envMapMode]||"ENVMAP_MODE_REFLECTION"}const hS={[xf]:"ENVMAP_BLENDING_MULTIPLY",[Jm]:"ENVMAP_BLENDING_MIX",[Qm]:"ENVMAP_BLENDING_ADD"};function pS(n){return n.envMap===!1?"ENVMAP_BLENDING_NONE":hS[n.combine]||"ENVMAP_BLENDING_NONE"}function mS(n){const e=n.envMapCubeUVHeight;if(e===null)return null;const t=Math.log2(e)-2,i=1/e;return{texelWidth:1/(3*Math.max(Math.pow(2,t),112)),texelHeight:i,maxMip:t}}function _S(n,e,t,i){const r=n.getContext(),s=t.defines;let a=t.vertexShader,o=t.fragmentShader;const l=lS(t),c=uS(t),u=dS(t),h=pS(t),d=mS(t),m=jv(t),x=eS(s),S=r.createProgram();let p,f,y=t.glslVersion?"#version "+t.glslVersion+`
`:"";t.isRawShaderMaterial?(p=["#define SHADER_TYPE "+t.shaderType,"#define SHADER_NAME "+t.shaderName,x].filter(br).join(`
`),p.length>0&&(p+=`
`),f=["#define SHADER_TYPE "+t.shaderType,"#define SHADER_NAME "+t.shaderName,x].filter(br).join(`
`),f.length>0&&(f+=`
`)):(p=[wu(t),"#define SHADER_TYPE "+t.shaderType,"#define SHADER_NAME "+t.shaderName,x,t.extensionClipCullDistance?"#define USE_CLIP_DISTANCE":"",t.batching?"#define USE_BATCHING":"",t.batchingColor?"#define USE_BATCHING_COLOR":"",t.instancing?"#define USE_INSTANCING":"",t.instancingColor?"#define USE_INSTANCING_COLOR":"",t.instancingMorph?"#define USE_INSTANCING_MORPH":"",t.useFog&&t.fog?"#define USE_FOG":"",t.useFog&&t.fogExp2?"#define FOG_EXP2":"",t.map?"#define USE_MAP":"",t.envMap?"#define USE_ENVMAP":"",t.envMap?"#define "+u:"",t.lightMap?"#define USE_LIGHTMAP":"",t.aoMap?"#define USE_AOMAP":"",t.bumpMap?"#define USE_BUMPMAP":"",t.normalMap?"#define USE_NORMALMAP":"",t.normalMapObjectSpace?"#define USE_NORMALMAP_OBJECTSPACE":"",t.normalMapTangentSpace?"#define USE_NORMALMAP_TANGENTSPACE":"",t.displacementMap?"#define USE_DISPLACEMENTMAP":"",t.emissiveMap?"#define USE_EMISSIVEMAP":"",t.anisotropy?"#define USE_ANISOTROPY":"",t.anisotropyMap?"#define USE_ANISOTROPYMAP":"",t.clearcoatMap?"#define USE_CLEARCOATMAP":"",t.clearcoatRoughnessMap?"#define USE_CLEARCOAT_ROUGHNESSMAP":"",t.clearcoatNormalMap?"#define USE_CLEARCOAT_NORMALMAP":"",t.iridescenceMap?"#define USE_IRIDESCENCEMAP":"",t.iridescenceThicknessMap?"#define USE_IRIDESCENCE_THICKNESSMAP":"",t.specularMap?"#define USE_SPECULARMAP":"",t.specularColorMap?"#define USE_SPECULAR_COLORMAP":"",t.specularIntensityMap?"#define USE_SPECULAR_INTENSITYMAP":"",t.roughnessMap?"#define USE_ROUGHNESSMAP":"",t.metalnessMap?"#define USE_METALNESSMAP":"",t.alphaMap?"#define USE_ALPHAMAP":"",t.alphaHash?"#define USE_ALPHAHASH":"",t.transmission?"#define USE_TRANSMISSION":"",t.transmissionMap?"#define USE_TRANSMISSIONMAP":"",t.thicknessMap?"#define USE_THICKNESSMAP":"",t.sheenColorMap?"#define USE_SHEEN_COLORMAP":"",t.sheenRoughnessMap?"#define USE_SHEEN_ROUGHNESSMAP":"",t.mapUv?"#define MAP_UV "+t.mapUv:"",t.alphaMapUv?"#define ALPHAMAP_UV "+t.alphaMapUv:"",t.lightMapUv?"#define LIGHTMAP_UV "+t.lightMapUv:"",t.aoMapUv?"#define AOMAP_UV "+t.aoMapUv:"",t.emissiveMapUv?"#define EMISSIVEMAP_UV "+t.emissiveMapUv:"",t.bumpMapUv?"#define BUMPMAP_UV "+t.bumpMapUv:"",t.normalMapUv?"#define NORMALMAP_UV "+t.normalMapUv:"",t.displacementMapUv?"#define DISPLACEMENTMAP_UV "+t.displacementMapUv:"",t.metalnessMapUv?"#define METALNESSMAP_UV "+t.metalnessMapUv:"",t.roughnessMapUv?"#define ROUGHNESSMAP_UV "+t.roughnessMapUv:"",t.anisotropyMapUv?"#define ANISOTROPYMAP_UV "+t.anisotropyMapUv:"",t.clearcoatMapUv?"#define CLEARCOATMAP_UV "+t.clearcoatMapUv:"",t.clearcoatNormalMapUv?"#define CLEARCOAT_NORMALMAP_UV "+t.clearcoatNormalMapUv:"",t.clearcoatRoughnessMapUv?"#define CLEARCOAT_ROUGHNESSMAP_UV "+t.clearcoatRoughnessMapUv:"",t.iridescenceMapUv?"#define IRIDESCENCEMAP_UV "+t.iridescenceMapUv:"",t.iridescenceThicknessMapUv?"#define IRIDESCENCE_THICKNESSMAP_UV "+t.iridescenceThicknessMapUv:"",t.sheenColorMapUv?"#define SHEEN_COLORMAP_UV "+t.sheenColorMapUv:"",t.sheenRoughnessMapUv?"#define SHEEN_ROUGHNESSMAP_UV "+t.sheenRoughnessMapUv:"",t.specularMapUv?"#define SPECULARMAP_UV "+t.specularMapUv:"",t.specularColorMapUv?"#define SPECULAR_COLORMAP_UV "+t.specularColorMapUv:"",t.specularIntensityMapUv?"#define SPECULAR_INTENSITYMAP_UV "+t.specularIntensityMapUv:"",t.transmissionMapUv?"#define TRANSMISSIONMAP_UV "+t.transmissionMapUv:"",t.thicknessMapUv?"#define THICKNESSMAP_UV "+t.thicknessMapUv:"",t.vertexTangents&&t.flatShading===!1?"#define USE_TANGENT":"",t.vertexNormals?"#define HAS_NORMAL":"",t.vertexColors?"#define USE_COLOR":"",t.vertexAlphas?"#define USE_COLOR_ALPHA":"",t.vertexUv1s?"#define USE_UV1":"",t.vertexUv2s?"#define USE_UV2":"",t.vertexUv3s?"#define USE_UV3":"",t.pointsUvs?"#define USE_POINTS_UV":"",t.flatShading?"#define FLAT_SHADED":"",t.skinning?"#define USE_SKINNING":"",t.morphTargets?"#define USE_MORPHTARGETS":"",t.morphNormals&&t.flatShading===!1?"#define USE_MORPHNORMALS":"",t.morphColors?"#define USE_MORPHCOLORS":"",t.morphTargetsCount>0?"#define MORPHTARGETS_TEXTURE_STRIDE "+t.morphTextureStride:"",t.morphTargetsCount>0?"#define MORPHTARGETS_COUNT "+t.morphTargetsCount:"",t.doubleSided?"#define DOUBLE_SIDED":"",t.flipSided?"#define FLIP_SIDED":"",t.shadowMapEnabled?"#define USE_SHADOWMAP":"",t.shadowMapEnabled?"#define "+l:"",t.sizeAttenuation?"#define USE_SIZEATTENUATION":"",t.numLightProbes>0?"#define USE_LIGHT_PROBES":"",t.logarithmicDepthBuffer?"#define USE_LOGARITHMIC_DEPTH_BUFFER":"",t.reversedDepthBuffer?"#define USE_REVERSED_DEPTH_BUFFER":"","uniform mat4 modelMatrix;","uniform mat4 modelViewMatrix;","uniform mat4 projectionMatrix;","uniform mat4 viewMatrix;","uniform mat3 normalMatrix;","uniform vec3 cameraPosition;","uniform bool isOrthographic;","#ifdef USE_INSTANCING","	attribute mat4 instanceMatrix;","#endif","#ifdef USE_INSTANCING_COLOR","	attribute vec3 instanceColor;","#endif","#ifdef USE_INSTANCING_MORPH","	uniform sampler2D morphTexture;","#endif","attribute vec3 position;","attribute vec3 normal;","attribute vec2 uv;","#ifdef USE_UV1","	attribute vec2 uv1;","#endif","#ifdef USE_UV2","	attribute vec2 uv2;","#endif","#ifdef USE_UV3","	attribute vec2 uv3;","#endif","#ifdef USE_TANGENT","	attribute vec4 tangent;","#endif","#if defined( USE_COLOR_ALPHA )","	attribute vec4 color;","#elif defined( USE_COLOR )","	attribute vec3 color;","#endif","#ifdef USE_SKINNING","	attribute vec4 skinIndex;","	attribute vec4 skinWeight;","#endif",`
`].filter(br).join(`
`),f=[wu(t),"#define SHADER_TYPE "+t.shaderType,"#define SHADER_NAME "+t.shaderName,x,t.useFog&&t.fog?"#define USE_FOG":"",t.useFog&&t.fogExp2?"#define FOG_EXP2":"",t.alphaToCoverage?"#define ALPHA_TO_COVERAGE":"",t.map?"#define USE_MAP":"",t.matcap?"#define USE_MATCAP":"",t.envMap?"#define USE_ENVMAP":"",t.envMap?"#define "+c:"",t.envMap?"#define "+u:"",t.envMap?"#define "+h:"",d?"#define CUBEUV_TEXEL_WIDTH "+d.texelWidth:"",d?"#define CUBEUV_TEXEL_HEIGHT "+d.texelHeight:"",d?"#define CUBEUV_MAX_MIP "+d.maxMip+".0":"",t.lightMap?"#define USE_LIGHTMAP":"",t.aoMap?"#define USE_AOMAP":"",t.bumpMap?"#define USE_BUMPMAP":"",t.normalMap?"#define USE_NORMALMAP":"",t.normalMapObjectSpace?"#define USE_NORMALMAP_OBJECTSPACE":"",t.normalMapTangentSpace?"#define USE_NORMALMAP_TANGENTSPACE":"",t.packedNormalMap?"#define USE_PACKED_NORMALMAP":"",t.emissiveMap?"#define USE_EMISSIVEMAP":"",t.anisotropy?"#define USE_ANISOTROPY":"",t.anisotropyMap?"#define USE_ANISOTROPYMAP":"",t.clearcoat?"#define USE_CLEARCOAT":"",t.clearcoatMap?"#define USE_CLEARCOATMAP":"",t.clearcoatRoughnessMap?"#define USE_CLEARCOAT_ROUGHNESSMAP":"",t.clearcoatNormalMap?"#define USE_CLEARCOAT_NORMALMAP":"",t.dispersion?"#define USE_DISPERSION":"",t.iridescence?"#define USE_IRIDESCENCE":"",t.iridescenceMap?"#define USE_IRIDESCENCEMAP":"",t.iridescenceThicknessMap?"#define USE_IRIDESCENCE_THICKNESSMAP":"",t.specularMap?"#define USE_SPECULARMAP":"",t.specularColorMap?"#define USE_SPECULAR_COLORMAP":"",t.specularIntensityMap?"#define USE_SPECULAR_INTENSITYMAP":"",t.roughnessMap?"#define USE_ROUGHNESSMAP":"",t.metalnessMap?"#define USE_METALNESSMAP":"",t.alphaMap?"#define USE_ALPHAMAP":"",t.alphaTest?"#define USE_ALPHATEST":"",t.alphaHash?"#define USE_ALPHAHASH":"",t.sheen?"#define USE_SHEEN":"",t.sheenColorMap?"#define USE_SHEEN_COLORMAP":"",t.sheenRoughnessMap?"#define USE_SHEEN_ROUGHNESSMAP":"",t.transmission?"#define USE_TRANSMISSION":"",t.transmissionMap?"#define USE_TRANSMISSIONMAP":"",t.thicknessMap?"#define USE_THICKNESSMAP":"",t.vertexTangents&&t.flatShading===!1?"#define USE_TANGENT":"",t.vertexColors||t.instancingColor?"#define USE_COLOR":"",t.vertexAlphas||t.batchingColor?"#define USE_COLOR_ALPHA":"",t.vertexUv1s?"#define USE_UV1":"",t.vertexUv2s?"#define USE_UV2":"",t.vertexUv3s?"#define USE_UV3":"",t.pointsUvs?"#define USE_POINTS_UV":"",t.gradientMap?"#define USE_GRADIENTMAP":"",t.flatShading?"#define FLAT_SHADED":"",t.doubleSided?"#define DOUBLE_SIDED":"",t.flipSided?"#define FLIP_SIDED":"",t.shadowMapEnabled?"#define USE_SHADOWMAP":"",t.shadowMapEnabled?"#define "+l:"",t.premultipliedAlpha?"#define PREMULTIPLIED_ALPHA":"",t.numLightProbes>0?"#define USE_LIGHT_PROBES":"",t.numLightProbeGrids>0?"#define USE_LIGHT_PROBES_GRID":"",t.decodeVideoTexture?"#define DECODE_VIDEO_TEXTURE":"",t.decodeVideoTextureEmissive?"#define DECODE_VIDEO_TEXTURE_EMISSIVE":"",t.logarithmicDepthBuffer?"#define USE_LOGARITHMIC_DEPTH_BUFFER":"",t.reversedDepthBuffer?"#define USE_REVERSED_DEPTH_BUFFER":"","uniform mat4 viewMatrix;","uniform vec3 cameraPosition;","uniform bool isOrthographic;",t.toneMapping!==_n?"#define TONE_MAPPING":"",t.toneMapping!==_n?Fe.tonemapping_pars_fragment:"",t.toneMapping!==_n?Jv("toneMapping",t.toneMapping):"",t.dithering?"#define DITHERING":"",t.opaque?"#define OPAQUE":"",Fe.colorspace_pars_fragment,Kv("linearToOutputTexel",t.outputColorSpace),Qv(),t.useDepthPacking?"#define DEPTH_PACKING "+t.depthPacking:"",`
`].filter(br).join(`
`)),a=Xo(a),a=bu(a,t),a=Tu(a,t),o=Xo(o),o=bu(o,t),o=Tu(o,t),a=Au(a),o=Au(o),t.isRawShaderMaterial!==!0&&(y=`#version 300 es
`,p=[m,"#define attribute in","#define varying out","#define texture2D texture"].join(`
`)+`
`+p,f=["#define varying in",t.glslVersion===zc?"":"layout(location = 0) out highp vec4 pc_fragColor;",t.glslVersion===zc?"":"#define gl_FragColor pc_fragColor","#define gl_FragDepthEXT gl_FragDepth","#define texture2D texture","#define textureCube texture","#define texture2DProj textureProj","#define texture2DLodEXT textureLod","#define texture2DProjLodEXT textureProjLod","#define textureCubeLodEXT textureLod","#define texture2DGradEXT textureGrad","#define texture2DProjGradEXT textureProjGrad","#define textureCubeGradEXT textureGrad"].join(`
`)+`
`+f);const w=y+p+a,M=y+f+o,A=Mu(r,r.VERTEX_SHADER,w),E=Mu(r,r.FRAGMENT_SHADER,M);r.attachShader(S,A),r.attachShader(S,E),t.index0AttributeName!==void 0?r.bindAttribLocation(S,0,t.index0AttributeName):t.hasPositionAttribute===!0&&r.bindAttribLocation(S,0,"position"),r.linkProgram(S);function R(C){if(n.debug.checkShaderErrors){const N=r.getProgramInfoLog(S)||"",X=r.getShaderInfoLog(A)||"",q=r.getShaderInfoLog(E)||"",F=N.trim(),Y=X.trim(),H=q.trim();let Z=!0,ee=!0;if(r.getProgramParameter(S,r.LINK_STATUS)===!1)if(Z=!1,typeof n.debug.onShaderError=="function")n.debug.onShaderError(r,S,A,E);else{const se=yu(r,A,"vertex"),ie=yu(r,E,"fragment");$e("WebGLProgram: Shader Error "+r.getError()+" - VALIDATE_STATUS "+r.getProgramParameter(S,r.VALIDATE_STATUS)+`

Material Name: `+C.name+`
Material Type: `+C.type+`

Program Info Log: `+F+`
`+se+`
`+ie)}else F!==""?De("WebGLProgram: Program Info Log:",F):(Y===""||H==="")&&(ee=!1);ee&&(C.diagnostics={runnable:Z,programLog:F,vertexShader:{log:Y,prefix:p},fragmentShader:{log:H,prefix:f}})}r.deleteShader(A),r.deleteShader(E),g=new Rs(r,S),T=tS(r,S)}let g;this.getUniforms=function(){return g===void 0&&R(this),g};let T;this.getAttributes=function(){return T===void 0&&R(this),T};let D=t.rendererExtensionParallelShaderCompile===!1;return this.isReady=function(){return D===!1&&(D=r.getProgramParameter(S,Xv)),D},this.destroy=function(){i.releaseStatesOfProgram(this),r.deleteProgram(S),this.program=void 0},this.type=t.shaderType,this.name=t.shaderName,this.id=qv++,this.cacheKey=e,this.usedTimes=1,this.program=S,this.vertexShader=A,this.fragmentShader=E,this}let gS=0;class xS{constructor(){this.shaderCache=new Map,this.materialCache=new Map}update(e,t,i){const r=this._getShaderCacheForMaterial(e);return r.has(t)===!1&&(r.add(t),t.usedTimes++),r.has(i)===!1&&(r.add(i),i.usedTimes++),this}remove(e){const t=this.materialCache.get(e);for(const i of t)i.usedTimes--,i.usedTimes===0&&this.shaderCache.delete(i.code);return this.materialCache.delete(e),this}getVertexShaderStage(e){return this._getShaderStage(e.vertexShader)}getFragmentShaderStage(e){return this._getShaderStage(e.fragmentShader)}dispose(){this.shaderCache.clear(),this.materialCache.clear()}_getShaderCacheForMaterial(e){const t=this.materialCache;let i=t.get(e);return i===void 0&&(i=new Set,t.set(e,i)),i}_getShaderStage(e){const t=this.shaderCache;let i=t.get(e);return i===void 0&&(i=new vS(e),t.set(e,i)),i}}class vS{constructor(e){this.id=gS++,this.code=e,this.usedTimes=0}}function SS(n){return n===Mi||n===Is||n===Us}function MS(n,e,t,i,r,s){const a=new Of,o=new xS,l=new Set,c=[],u=new Map,h=i.logarithmicDepthBuffer;let d=i.precision;const m={MeshDepthMaterial:"depth",MeshDistanceMaterial:"distance",MeshNormalMaterial:"normal",MeshBasicMaterial:"basic",MeshLambertMaterial:"lambert",MeshPhongMaterial:"phong",MeshToonMaterial:"toon",MeshStandardMaterial:"physical",MeshPhysicalMaterial:"physical",MeshMatcapMaterial:"matcap",LineBasicMaterial:"basic",LineDashedMaterial:"dashed",PointsMaterial:"points",ShadowMaterial:"shadow",SpriteMaterial:"sprite"};function x(g){return l.add(g),g===0?"uv":`uv${g}`}function S(g,T,D,C,N,X){const q=C.fog,F=N.geometry,Y=g.isMeshStandardMaterial||g.isMeshLambertMaterial||g.isMeshPhongMaterial?C.environment:null,H=g.isMeshStandardMaterial||g.isMeshLambertMaterial&&!g.envMap||g.isMeshPhongMaterial&&!g.envMap,Z=e.get(g.envMap||Y,H),ee=Z&&Z.mapping===Ys?Z.image.height:null,se=m[g.type];g.precision!==null&&(d=i.getMaxPrecision(g.precision),d!==g.precision&&De("WebGLProgram.getParameters:",g.precision,"not supported, using",d,"instead."));const ie=F.morphAttributes.position||F.morphAttributes.normal||F.morphAttributes.color,xe=ie!==void 0?ie.length:0;let He=0;F.morphAttributes.position!==void 0&&(He=1),F.morphAttributes.normal!==void 0&&(He=2),F.morphAttributes.color!==void 0&&(He=3);let je,We,W,ne;if(se){const Me=hn[se];je=Me.vertexShader,We=Me.fragmentShader}else{je=g.vertexShader,We=g.fragmentShader;const Me=o.getVertexShaderStage(g),ft=o.getFragmentShaderStage(g);o.update(g,Me,ft),W=Me.id,ne=ft.id}const te=n.getRenderTarget(),Pe=n.state.buffers.depth.getReversed(),Le=N.isInstancedMesh===!0,Re=N.isBatchedMesh===!0,Ke=!!g.map,Be=!!g.matcap,Ze=!!Z,Oe=!!g.aoMap,fe=!!g.lightMap,Xe=!!g.bumpMap&&g.wireframe===!1,et=!!g.normalMap,rt=!!g.displacementMap,xt=!!g.emissiveMap,ct=!!g.metalnessMap,st=!!g.roughnessMap,I=g.anisotropy>0,Bt=g.clearcoat>0,Je=g.dispersion>0,b=g.iridescence>0,_=g.sheen>0,O=g.transmission>0,G=I&&!!g.anisotropyMap,$=Bt&&!!g.clearcoatMap,re=Bt&&!!g.clearcoatNormalMap,oe=Bt&&!!g.clearcoatRoughnessMap,K=b&&!!g.iridescenceMap,Q=b&&!!g.iridescenceThicknessMap,le=_&&!!g.sheenColorMap,be=_&&!!g.sheenRoughnessMap,de=!!g.specularMap,ce=!!g.specularColorMap,we=!!g.specularIntensityMap,Ce=O&&!!g.transmissionMap,Ue=O&&!!g.thicknessMap,L=!!g.gradientMap,ae=!!g.alphaMap,J=g.alphaTest>0,ue=!!g.alphaHash,ge=!!g.extensions;let j=_n;g.toneMapped&&(te===null||te.isXRRenderTarget===!0)&&(j=n.toneMapping);const ye={shaderID:se,shaderType:g.type,shaderName:g.name,vertexShader:je,fragmentShader:We,defines:g.defines,customVertexShaderID:W,customFragmentShaderID:ne,isRawShaderMaterial:g.isRawShaderMaterial===!0,glslVersion:g.glslVersion,precision:d,batching:Re,batchingColor:Re&&N._colorsTexture!==null,instancing:Le,instancingColor:Le&&N.instanceColor!==null,instancingMorph:Le&&N.morphTexture!==null,outputColorSpace:te===null?n.outputColorSpace:te.isXRRenderTarget===!0?te.texture.colorSpace:Ge.workingColorSpace,alphaToCoverage:!!g.alphaToCoverage,map:Ke,matcap:Be,envMap:Ze,envMapMode:Ze&&Z.mapping,envMapCubeUVHeight:ee,aoMap:Oe,lightMap:fe,bumpMap:Xe,normalMap:et,displacementMap:rt,emissiveMap:xt,normalMapObjectSpace:et&&g.normalMapType===t_,normalMapTangentSpace:et&&g.normalMapType===Go,packedNormalMap:et&&g.normalMapType===Go&&SS(g.normalMap.format),metalnessMap:ct,roughnessMap:st,anisotropy:I,anisotropyMap:G,clearcoat:Bt,clearcoatMap:$,clearcoatNormalMap:re,clearcoatRoughnessMap:oe,dispersion:Je,iridescence:b,iridescenceMap:K,iridescenceThicknessMap:Q,sheen:_,sheenColorMap:le,sheenRoughnessMap:be,specularMap:de,specularColorMap:ce,specularIntensityMap:we,transmission:O,transmissionMap:Ce,thicknessMap:Ue,gradientMap:L,opaque:g.transparent===!1&&g.blending===Xi&&g.alphaToCoverage===!1,alphaMap:ae,alphaTest:J,alphaHash:ue,combine:g.combine,mapUv:Ke&&x(g.map.channel),aoMapUv:Oe&&x(g.aoMap.channel),lightMapUv:fe&&x(g.lightMap.channel),bumpMapUv:Xe&&x(g.bumpMap.channel),normalMapUv:et&&x(g.normalMap.channel),displacementMapUv:rt&&x(g.displacementMap.channel),emissiveMapUv:xt&&x(g.emissiveMap.channel),metalnessMapUv:ct&&x(g.metalnessMap.channel),roughnessMapUv:st&&x(g.roughnessMap.channel),anisotropyMapUv:G&&x(g.anisotropyMap.channel),clearcoatMapUv:$&&x(g.clearcoatMap.channel),clearcoatNormalMapUv:re&&x(g.clearcoatNormalMap.channel),clearcoatRoughnessMapUv:oe&&x(g.clearcoatRoughnessMap.channel),iridescenceMapUv:K&&x(g.iridescenceMap.channel),iridescenceThicknessMapUv:Q&&x(g.iridescenceThicknessMap.channel),sheenColorMapUv:le&&x(g.sheenColorMap.channel),sheenRoughnessMapUv:be&&x(g.sheenRoughnessMap.channel),specularMapUv:de&&x(g.specularMap.channel),specularColorMapUv:ce&&x(g.specularColorMap.channel),specularIntensityMapUv:we&&x(g.specularIntensityMap.channel),transmissionMapUv:Ce&&x(g.transmissionMap.channel),thicknessMapUv:Ue&&x(g.thicknessMap.channel),alphaMapUv:ae&&x(g.alphaMap.channel),vertexTangents:!!F.attributes.tangent&&(et||I),vertexNormals:!!F.attributes.normal,vertexColors:g.vertexColors,vertexAlphas:g.vertexColors===!0&&!!F.attributes.color&&F.attributes.color.itemSize===4,pointsUvs:N.isPoints===!0&&!!F.attributes.uv&&(Ke||ae),fog:!!q,useFog:g.fog===!0,fogExp2:!!q&&q.isFogExp2,flatShading:g.wireframe===!1&&(g.flatShading===!0||F.attributes.normal===void 0&&et===!1&&(g.isMeshLambertMaterial||g.isMeshPhongMaterial||g.isMeshStandardMaterial||g.isMeshPhysicalMaterial)),sizeAttenuation:g.sizeAttenuation===!0,logarithmicDepthBuffer:h,reversedDepthBuffer:Pe,skinning:N.isSkinnedMesh===!0,hasPositionAttribute:F.attributes.position!==void 0,morphTargets:F.morphAttributes.position!==void 0,morphNormals:F.morphAttributes.normal!==void 0,morphColors:F.morphAttributes.color!==void 0,morphTargetsCount:xe,morphTextureStride:He,numDirLights:T.directional.length,numPointLights:T.point.length,numSpotLights:T.spot.length,numSpotLightMaps:T.spotLightMap.length,numRectAreaLights:T.rectArea.length,numHemiLights:T.hemi.length,numDirLightShadows:T.directionalShadowMap.length,numPointLightShadows:T.pointShadowMap.length,numSpotLightShadows:T.spotShadowMap.length,numSpotLightShadowsWithMaps:T.numSpotLightShadowsWithMaps,numLightProbes:T.numLightProbes,numLightProbeGrids:X.length,numClippingPlanes:s.numPlanes,numClipIntersection:s.numIntersection,dithering:g.dithering,shadowMapEnabled:n.shadowMap.enabled&&D.length>0,shadowMapType:n.shadowMap.type,toneMapping:j,decodeVideoTexture:Ke&&g.map.isVideoTexture===!0&&Ge.getTransfer(g.map.colorSpace)===Qe,decodeVideoTextureEmissive:xt&&g.emissiveMap.isVideoTexture===!0&&Ge.getTransfer(g.emissiveMap.colorSpace)===Qe,premultipliedAlpha:g.premultipliedAlpha,doubleSided:g.side===Rn,flipSided:g.side===Vt,useDepthPacking:g.depthPacking>=0,depthPacking:g.depthPacking||0,index0AttributeName:g.index0AttributeName,extensionClipCullDistance:ge&&g.extensions.clipCullDistance===!0&&t.has("WEBGL_clip_cull_distance"),extensionMultiDraw:(ge&&g.extensions.multiDraw===!0||Re)&&t.has("WEBGL_multi_draw"),rendererExtensionParallelShaderCompile:t.has("KHR_parallel_shader_compile"),customProgramCacheKey:g.customProgramCacheKey()};return ye.vertexUv1s=l.has(1),ye.vertexUv2s=l.has(2),ye.vertexUv3s=l.has(3),l.clear(),ye}function p(g){const T=[];if(g.shaderID?T.push(g.shaderID):(T.push(g.customVertexShaderID),T.push(g.customFragmentShaderID)),g.defines!==void 0)for(const D in g.defines)T.push(D),T.push(g.defines[D]);return g.isRawShaderMaterial===!1&&(f(T,g),y(T,g),T.push(n.outputColorSpace)),T.push(g.customProgramCacheKey),T.join()}function f(g,T){g.push(T.precision),g.push(T.outputColorSpace),g.push(T.envMapMode),g.push(T.envMapCubeUVHeight),g.push(T.mapUv),g.push(T.alphaMapUv),g.push(T.lightMapUv),g.push(T.aoMapUv),g.push(T.bumpMapUv),g.push(T.normalMapUv),g.push(T.displacementMapUv),g.push(T.emissiveMapUv),g.push(T.metalnessMapUv),g.push(T.roughnessMapUv),g.push(T.anisotropyMapUv),g.push(T.clearcoatMapUv),g.push(T.clearcoatNormalMapUv),g.push(T.clearcoatRoughnessMapUv),g.push(T.iridescenceMapUv),g.push(T.iridescenceThicknessMapUv),g.push(T.sheenColorMapUv),g.push(T.sheenRoughnessMapUv),g.push(T.specularMapUv),g.push(T.specularColorMapUv),g.push(T.specularIntensityMapUv),g.push(T.transmissionMapUv),g.push(T.thicknessMapUv),g.push(T.combine),g.push(T.fogExp2),g.push(T.sizeAttenuation),g.push(T.morphTargetsCount),g.push(T.morphAttributeCount),g.push(T.numDirLights),g.push(T.numPointLights),g.push(T.numSpotLights),g.push(T.numSpotLightMaps),g.push(T.numHemiLights),g.push(T.numRectAreaLights),g.push(T.numDirLightShadows),g.push(T.numPointLightShadows),g.push(T.numSpotLightShadows),g.push(T.numSpotLightShadowsWithMaps),g.push(T.numLightProbes),g.push(T.shadowMapType),g.push(T.toneMapping),g.push(T.numClippingPlanes),g.push(T.numClipIntersection),g.push(T.depthPacking)}function y(g,T){a.disableAll(),T.instancing&&a.enable(0),T.instancingColor&&a.enable(1),T.instancingMorph&&a.enable(2),T.matcap&&a.enable(3),T.envMap&&a.enable(4),T.normalMapObjectSpace&&a.enable(5),T.normalMapTangentSpace&&a.enable(6),T.clearcoat&&a.enable(7),T.iridescence&&a.enable(8),T.alphaTest&&a.enable(9),T.vertexColors&&a.enable(10),T.vertexAlphas&&a.enable(11),T.vertexUv1s&&a.enable(12),T.vertexUv2s&&a.enable(13),T.vertexUv3s&&a.enable(14),T.vertexTangents&&a.enable(15),T.anisotropy&&a.enable(16),T.alphaHash&&a.enable(17),T.batching&&a.enable(18),T.dispersion&&a.enable(19),T.batchingColor&&a.enable(20),T.gradientMap&&a.enable(21),T.packedNormalMap&&a.enable(22),T.vertexNormals&&a.enable(23),g.push(a.mask),a.disableAll(),T.fog&&a.enable(0),T.useFog&&a.enable(1),T.flatShading&&a.enable(2),T.logarithmicDepthBuffer&&a.enable(3),T.reversedDepthBuffer&&a.enable(4),T.skinning&&a.enable(5),T.morphTargets&&a.enable(6),T.morphNormals&&a.enable(7),T.morphColors&&a.enable(8),T.premultipliedAlpha&&a.enable(9),T.shadowMapEnabled&&a.enable(10),T.doubleSided&&a.enable(11),T.flipSided&&a.enable(12),T.useDepthPacking&&a.enable(13),T.dithering&&a.enable(14),T.transmission&&a.enable(15),T.sheen&&a.enable(16),T.opaque&&a.enable(17),T.pointsUvs&&a.enable(18),T.decodeVideoTexture&&a.enable(19),T.decodeVideoTextureEmissive&&a.enable(20),T.alphaToCoverage&&a.enable(21),T.numLightProbeGrids>0&&a.enable(22),T.hasPositionAttribute&&a.enable(23),g.push(a.mask)}function w(g){const T=m[g.type];let D;if(T){const C=hn[T];D=z_.clone(C.uniforms)}else D=g.uniforms;return D}function M(g,T){let D=u.get(T);return D!==void 0?++D.usedTimes:(D=new _S(n,T,g,r),c.push(D),u.set(T,D)),D}function A(g){if(--g.usedTimes===0){const T=c.indexOf(g);c[T]=c[c.length-1],c.pop(),u.delete(g.cacheKey),g.destroy()}}function E(g){o.remove(g)}function R(){o.dispose()}return{getParameters:S,getProgramCacheKey:p,getUniforms:w,acquireProgram:M,releaseProgram:A,releaseShaderCache:E,programs:c,dispose:R}}function ES(){let n=new WeakMap;function e(a){return n.has(a)}function t(a){let o=n.get(a);return o===void 0&&(o={},n.set(a,o)),o}function i(a){n.delete(a)}function r(a,o,l){n.get(a)[o]=l}function s(){n=new WeakMap}return{has:e,get:t,remove:i,update:r,dispose:s}}function yS(n,e){return n.groupOrder!==e.groupOrder?n.groupOrder-e.groupOrder:n.renderOrder!==e.renderOrder?n.renderOrder-e.renderOrder:n.material.id!==e.material.id?n.material.id-e.material.id:n.materialVariant!==e.materialVariant?n.materialVariant-e.materialVariant:n.z!==e.z?n.z-e.z:n.id-e.id}function Ru(n,e){return n.groupOrder!==e.groupOrder?n.groupOrder-e.groupOrder:n.renderOrder!==e.renderOrder?n.renderOrder-e.renderOrder:n.z!==e.z?e.z-n.z:n.id-e.id}function Cu(){const n=[];let e=0;const t=[],i=[],r=[];function s(){e=0,t.length=0,i.length=0,r.length=0}function a(d){let m=0;return d.isInstancedMesh&&(m+=2),d.isSkinnedMesh&&(m+=1),m}function o(d,m,x,S,p,f){let y=n[e];return y===void 0?(y={id:d.id,object:d,geometry:m,material:x,materialVariant:a(d),groupOrder:S,renderOrder:d.renderOrder,z:p,group:f},n[e]=y):(y.id=d.id,y.object=d,y.geometry=m,y.material=x,y.materialVariant=a(d),y.groupOrder=S,y.renderOrder=d.renderOrder,y.z=p,y.group=f),e++,y}function l(d,m,x,S,p,f){const y=o(d,m,x,S,p,f);x.transmission>0?i.push(y):x.transparent===!0?r.push(y):t.push(y)}function c(d,m,x,S,p,f){const y=o(d,m,x,S,p,f);x.transmission>0?i.unshift(y):x.transparent===!0?r.unshift(y):t.unshift(y)}function u(d,m,x){t.length>1&&t.sort(d||yS),i.length>1&&i.sort(m||Ru),r.length>1&&r.sort(m||Ru),x&&(t.reverse(),i.reverse(),r.reverse())}function h(){for(let d=e,m=n.length;d<m;d++){const x=n[d];if(x.id===null)break;x.id=null,x.object=null,x.geometry=null,x.material=null,x.group=null}}return{opaque:t,transmissive:i,transparent:r,init:s,push:l,unshift:c,finish:h,sort:u}}function bS(){let n=new WeakMap;function e(i,r){const s=n.get(i);let a;return s===void 0?(a=new Cu,n.set(i,[a])):r>=s.length?(a=new Cu,s.push(a)):a=s[r],a}function t(){n=new WeakMap}return{get:e,dispose:t}}function TS(){const n={};return{get:function(e){if(n[e.id]!==void 0)return n[e.id];let t;switch(e.type){case"DirectionalLight":t={direction:new B,color:new qe};break;case"SpotLight":t={position:new B,direction:new B,color:new qe,distance:0,coneCos:0,penumbraCos:0,decay:0};break;case"PointLight":t={position:new B,color:new qe,distance:0,decay:0};break;case"HemisphereLight":t={direction:new B,skyColor:new qe,groundColor:new qe};break;case"RectAreaLight":t={color:new qe,position:new B,halfWidth:new B,halfHeight:new B};break}return n[e.id]=t,t}}}function AS(){const n={};return{get:function(e){if(n[e.id]!==void 0)return n[e.id];let t;switch(e.type){case"DirectionalLight":t={shadowIntensity:1,shadowBias:0,shadowNormalBias:0,shadowRadius:1,shadowMapSize:new Ve};break;case"SpotLight":t={shadowIntensity:1,shadowBias:0,shadowNormalBias:0,shadowRadius:1,shadowMapSize:new Ve};break;case"PointLight":t={shadowIntensity:1,shadowBias:0,shadowNormalBias:0,shadowRadius:1,shadowMapSize:new Ve,shadowCameraNear:1,shadowCameraFar:1e3};break}return n[e.id]=t,t}}}let wS=0;function RS(n,e){return(e.castShadow?2:0)-(n.castShadow?2:0)+(e.map?1:0)-(n.map?1:0)}function CS(n){const e=new TS,t=AS(),i={version:0,hash:{directionalLength:-1,pointLength:-1,spotLength:-1,rectAreaLength:-1,hemiLength:-1,numDirectionalShadows:-1,numPointShadows:-1,numSpotShadows:-1,numSpotMaps:-1,numLightProbes:-1},ambient:[0,0,0],probe:[],directional:[],directionalShadow:[],directionalShadowMap:[],directionalShadowMatrix:[],spot:[],spotLightMap:[],spotShadow:[],spotShadowMap:[],spotLightMatrix:[],rectArea:[],rectAreaLTC1:null,rectAreaLTC2:null,point:[],pointShadow:[],pointShadowMap:[],pointShadowMatrix:[],hemi:[],numSpotLightShadowsWithMaps:0,numLightProbes:0};for(let c=0;c<9;c++)i.probe.push(new B);const r=new B,s=new ht,a=new ht;function o(c){let u=0,h=0,d=0;for(let T=0;T<9;T++)i.probe[T].set(0,0,0);let m=0,x=0,S=0,p=0,f=0,y=0,w=0,M=0,A=0,E=0,R=0;c.sort(RS);for(let T=0,D=c.length;T<D;T++){const C=c[T],N=C.color,X=C.intensity,q=C.distance;let F=null;if(C.shadow&&C.shadow.map&&(C.shadow.map.texture.format===Mi?F=C.shadow.map.texture:F=C.shadow.map.depthTexture||C.shadow.map.texture),C.isAmbientLight)u+=N.r*X,h+=N.g*X,d+=N.b*X;else if(C.isLightProbe){for(let Y=0;Y<9;Y++)i.probe[Y].addScaledVector(C.sh.coefficients[Y],X);R++}else if(C.isDirectionalLight){const Y=e.get(C);if(Y.color.copy(C.color).multiplyScalar(C.intensity),C.castShadow){const H=C.shadow,Z=t.get(C);Z.shadowIntensity=H.intensity,Z.shadowBias=H.bias,Z.shadowNormalBias=H.normalBias,Z.shadowRadius=H.radius,Z.shadowMapSize=H.mapSize,i.directionalShadow[m]=Z,i.directionalShadowMap[m]=F,i.directionalShadowMatrix[m]=C.shadow.matrix,y++}i.directional[m]=Y,m++}else if(C.isSpotLight){const Y=e.get(C);Y.position.setFromMatrixPosition(C.matrixWorld),Y.color.copy(N).multiplyScalar(X),Y.distance=q,Y.coneCos=Math.cos(C.angle),Y.penumbraCos=Math.cos(C.angle*(1-C.penumbra)),Y.decay=C.decay,i.spot[S]=Y;const H=C.shadow;if(C.map&&(i.spotLightMap[A]=C.map,A++,H.updateMatrices(C),C.castShadow&&E++),i.spotLightMatrix[S]=H.matrix,C.castShadow){const Z=t.get(C);Z.shadowIntensity=H.intensity,Z.shadowBias=H.bias,Z.shadowNormalBias=H.normalBias,Z.shadowRadius=H.radius,Z.shadowMapSize=H.mapSize,i.spotShadow[S]=Z,i.spotShadowMap[S]=F,M++}S++}else if(C.isRectAreaLight){const Y=e.get(C);Y.color.copy(N).multiplyScalar(X),Y.halfWidth.set(C.width*.5,0,0),Y.halfHeight.set(0,C.height*.5,0),i.rectArea[p]=Y,p++}else if(C.isPointLight){const Y=e.get(C);if(Y.color.copy(C.color).multiplyScalar(C.intensity),Y.distance=C.distance,Y.decay=C.decay,C.castShadow){const H=C.shadow,Z=t.get(C);Z.shadowIntensity=H.intensity,Z.shadowBias=H.bias,Z.shadowNormalBias=H.normalBias,Z.shadowRadius=H.radius,Z.shadowMapSize=H.mapSize,Z.shadowCameraNear=H.camera.near,Z.shadowCameraFar=H.camera.far,i.pointShadow[x]=Z,i.pointShadowMap[x]=F,i.pointShadowMatrix[x]=C.shadow.matrix,w++}i.point[x]=Y,x++}else if(C.isHemisphereLight){const Y=e.get(C);Y.skyColor.copy(C.color).multiplyScalar(X),Y.groundColor.copy(C.groundColor).multiplyScalar(X),i.hemi[f]=Y,f++}}p>0&&(n.has("OES_texture_float_linear")===!0?(i.rectAreaLTC1=he.LTC_FLOAT_1,i.rectAreaLTC2=he.LTC_FLOAT_2):(i.rectAreaLTC1=he.LTC_HALF_1,i.rectAreaLTC2=he.LTC_HALF_2)),i.ambient[0]=u,i.ambient[1]=h,i.ambient[2]=d;const g=i.hash;(g.directionalLength!==m||g.pointLength!==x||g.spotLength!==S||g.rectAreaLength!==p||g.hemiLength!==f||g.numDirectionalShadows!==y||g.numPointShadows!==w||g.numSpotShadows!==M||g.numSpotMaps!==A||g.numLightProbes!==R)&&(i.directional.length=m,i.spot.length=S,i.rectArea.length=p,i.point.length=x,i.hemi.length=f,i.directionalShadow.length=y,i.directionalShadowMap.length=y,i.pointShadow.length=w,i.pointShadowMap.length=w,i.spotShadow.length=M,i.spotShadowMap.length=M,i.directionalShadowMatrix.length=y,i.pointShadowMatrix.length=w,i.spotLightMatrix.length=M+A-E,i.spotLightMap.length=A,i.numSpotLightShadowsWithMaps=E,i.numLightProbes=R,g.directionalLength=m,g.pointLength=x,g.spotLength=S,g.rectAreaLength=p,g.hemiLength=f,g.numDirectionalShadows=y,g.numPointShadows=w,g.numSpotShadows=M,g.numSpotMaps=A,g.numLightProbes=R,i.version=wS++)}function l(c,u){let h=0,d=0,m=0,x=0,S=0;const p=u.matrixWorldInverse;for(let f=0,y=c.length;f<y;f++){const w=c[f];if(w.isDirectionalLight){const M=i.directional[h];M.direction.setFromMatrixPosition(w.matrixWorld),r.setFromMatrixPosition(w.target.matrixWorld),M.direction.sub(r),M.direction.transformDirection(p),h++}else if(w.isSpotLight){const M=i.spot[m];M.position.setFromMatrixPosition(w.matrixWorld),M.position.applyMatrix4(p),M.direction.setFromMatrixPosition(w.matrixWorld),r.setFromMatrixPosition(w.target.matrixWorld),M.direction.sub(r),M.direction.transformDirection(p),m++}else if(w.isRectAreaLight){const M=i.rectArea[x];M.position.setFromMatrixPosition(w.matrixWorld),M.position.applyMatrix4(p),a.identity(),s.copy(w.matrixWorld),s.premultiply(p),a.extractRotation(s),M.halfWidth.set(w.width*.5,0,0),M.halfHeight.set(0,w.height*.5,0),M.halfWidth.applyMatrix4(a),M.halfHeight.applyMatrix4(a),x++}else if(w.isPointLight){const M=i.point[d];M.position.setFromMatrixPosition(w.matrixWorld),M.position.applyMatrix4(p),d++}else if(w.isHemisphereLight){const M=i.hemi[S];M.direction.setFromMatrixPosition(w.matrixWorld),M.direction.transformDirection(p),S++}}}return{setup:o,setupView:l,state:i}}function Pu(n){const e=new CS(n),t=[],i=[],r=[];function s(d){h.camera=d,t.length=0,i.length=0,r.length=0}function a(d){t.push(d)}function o(d){i.push(d)}function l(d){r.push(d)}function c(){e.setup(t)}function u(d){e.setupView(t,d)}const h={lightsArray:t,shadowsArray:i,lightProbeGridArray:r,camera:null,lights:e,transmissionRenderTarget:{},textureUnits:0};return{init:s,state:h,setupLights:c,setupLightsView:u,pushLight:a,pushShadow:o,pushLightProbeGrid:l}}function PS(n){let e=new WeakMap;function t(r,s=0){const a=e.get(r);let o;return a===void 0?(o=new Pu(n),e.set(r,[o])):s>=a.length?(o=new Pu(n),a.push(o)):o=a[s],o}function i(){e=new WeakMap}return{get:t,dispose:i}}const DS=`void main() {
	gl_Position = vec4( position, 1.0 );
}`,LS=`uniform sampler2D shadow_pass;
uniform vec2 resolution;
uniform float radius;
void main() {
	const float samples = float( VSM_SAMPLES );
	float mean = 0.0;
	float squared_mean = 0.0;
	float uvStride = samples <= 1.0 ? 0.0 : 2.0 / ( samples - 1.0 );
	float uvStart = samples <= 1.0 ? 0.0 : - 1.0;
	for ( float i = 0.0; i < samples; i ++ ) {
		float uvOffset = uvStart + i * uvStride;
		#ifdef HORIZONTAL_PASS
			vec2 distribution = texture2D( shadow_pass, ( gl_FragCoord.xy + vec2( uvOffset, 0.0 ) * radius ) / resolution ).rg;
			mean += distribution.x;
			squared_mean += distribution.y * distribution.y + distribution.x * distribution.x;
		#else
			float depth = texture2D( shadow_pass, ( gl_FragCoord.xy + vec2( 0.0, uvOffset ) * radius ) / resolution ).r;
			mean += depth;
			squared_mean += depth * depth;
		#endif
	}
	mean = mean / samples;
	squared_mean = squared_mean / samples;
	float std_dev = sqrt( max( 0.0, squared_mean - mean * mean ) );
	gl_FragColor = vec4( mean, std_dev, 0.0, 1.0 );
}`,IS=[new B(1,0,0),new B(-1,0,0),new B(0,1,0),new B(0,-1,0),new B(0,0,1),new B(0,0,-1)],US=[new B(0,-1,0),new B(0,-1,0),new B(0,0,1),new B(0,0,-1),new B(0,-1,0),new B(0,-1,0)],Du=new ht,xr=new B,Xa=new B;function NS(n,e,t){let i=new Al;const r=new Ve,s=new Ve,a=new ut,o=new k_,l=new W_,c={},u=t.maxTextureSize,h={[$n]:Vt,[Vt]:$n,[Rn]:Rn},d=new Sn({defines:{VSM_SAMPLES:8},uniforms:{shadow_pass:{value:null},resolution:{value:new Ve},radius:{value:4}},vertexShader:DS,fragmentShader:LS}),m=d.clone();m.defines.HORIZONTAL_PASS=1;const x=new sn;x.setAttribute("position",new xn(new Float32Array([-1,-1,.5,3,-1,.5,-1,3,.5]),3));const S=new bt(x,d),p=this;this.enabled=!1,this.autoUpdate=!0,this.needsUpdate=!1,this.type=ys;let f=this.type;this.render=function(E,R,g){if(p.enabled===!1||p.autoUpdate===!1&&p.needsUpdate===!1||E.length===0)return;this.type===Lm&&(De("WebGLShadowMap: PCFSoftShadowMap has been deprecated. Using PCFShadowMap instead."),this.type=ys);const T=n.getRenderTarget(),D=n.getActiveCubeFace(),C=n.getActiveMipmapLevel(),N=n.state;N.setBlending(Pn),N.buffers.depth.getReversed()===!0?N.buffers.color.setClear(0,0,0,0):N.buffers.color.setClear(1,1,1,1),N.buffers.depth.setTest(!0),N.setScissorTest(!1);const X=f!==this.type;X&&R.traverse(function(q){q.material&&(Array.isArray(q.material)?q.material.forEach(F=>F.needsUpdate=!0):q.material.needsUpdate=!0)});for(let q=0,F=E.length;q<F;q++){const Y=E[q],H=Y.shadow;if(H===void 0){De("WebGLShadowMap:",Y,"has no shadow.");continue}if(H.autoUpdate===!1&&H.needsUpdate===!1)continue;r.copy(H.mapSize);const Z=H.getFrameExtents();r.multiply(Z),s.copy(H.mapSize),(r.x>u||r.y>u)&&(r.x>u&&(s.x=Math.floor(u/Z.x),r.x=s.x*Z.x,H.mapSize.x=s.x),r.y>u&&(s.y=Math.floor(u/Z.y),r.y=s.y*Z.y,H.mapSize.y=s.y));const ee=n.state.buffers.depth.getReversed();if(H.camera._reversedDepth=ee,H.map===null||X===!0){if(H.map!==null&&(H.map.depthTexture!==null&&(H.map.depthTexture.dispose(),H.map.depthTexture=null),H.map.dispose()),this.type===Er){if(Y.isPointLight){De("WebGLShadowMap: VSM shadow maps are not supported for PointLights. Use PCF or BasicShadowMap instead.");continue}H.map=new gn(r.x,r.y,{format:Mi,type:In,minFilter:Dt,magFilter:Dt,generateMipmaps:!1}),H.map.texture.name=Y.name+".shadowMap",H.map.depthTexture=new Qi(r.x,r.y,pn),H.map.depthTexture.name=Y.name+".shadowMapDepth",H.map.depthTexture.format=Un,H.map.depthTexture.compareFunction=null,H.map.depthTexture.minFilter=At,H.map.depthTexture.magFilter=At}else Y.isPointLight?(H.map=new $f(r.x),H.map.depthTexture=new F_(r.x,vn)):(H.map=new gn(r.x,r.y),H.map.depthTexture=new Qi(r.x,r.y,vn)),H.map.depthTexture.name=Y.name+".shadowMap",H.map.depthTexture.format=Un,this.type===ys?(H.map.depthTexture.compareFunction=ee?yl:El,H.map.depthTexture.minFilter=Dt,H.map.depthTexture.magFilter=Dt):(H.map.depthTexture.compareFunction=null,H.map.depthTexture.minFilter=At,H.map.depthTexture.magFilter=At);H.camera.updateProjectionMatrix()}const se=H.map.isWebGLCubeRenderTarget?6:1;for(let ie=0;ie<se;ie++){if(H.map.isWebGLCubeRenderTarget)n.setRenderTarget(H.map,ie),n.clear();else{ie===0&&(n.setRenderTarget(H.map),n.clear());const xe=H.getViewport(ie);a.set(s.x*xe.x,s.y*xe.y,s.x*xe.z,s.y*xe.w),N.viewport(a)}if(Y.isPointLight){const xe=H.camera,He=H.matrix,je=Y.distance||xe.far;je!==xe.far&&(xe.far=je,xe.updateProjectionMatrix()),xr.setFromMatrixPosition(Y.matrixWorld),xe.position.copy(xr),Xa.copy(xe.position),Xa.add(IS[ie]),xe.up.copy(US[ie]),xe.lookAt(Xa),xe.updateMatrixWorld(),He.makeTranslation(-xr.x,-xr.y,-xr.z),Du.multiplyMatrices(xe.projectionMatrix,xe.matrixWorldInverse),H._frustum.setFromProjectionMatrix(Du,xe.coordinateSystem,xe.reversedDepth)}else H.updateMatrices(Y);i=H.getFrustum(),M(R,g,H.camera,Y,this.type)}H.isPointLightShadow!==!0&&this.type===Er&&y(H,g),H.needsUpdate=!1}f=this.type,p.needsUpdate=!1,n.setRenderTarget(T,D,C)};function y(E,R){const g=e.update(S);d.defines.VSM_SAMPLES!==E.blurSamples&&(d.defines.VSM_SAMPLES=E.blurSamples,m.defines.VSM_SAMPLES=E.blurSamples,d.needsUpdate=!0,m.needsUpdate=!0),E.mapPass===null&&(E.mapPass=new gn(r.x,r.y,{format:Mi,type:In})),d.uniforms.shadow_pass.value=E.map.depthTexture,d.uniforms.resolution.value=E.mapSize,d.uniforms.radius.value=E.radius,n.setRenderTarget(E.mapPass),n.clear(),n.renderBufferDirect(R,null,g,d,S,null),m.uniforms.shadow_pass.value=E.mapPass.texture,m.uniforms.resolution.value=E.mapSize,m.uniforms.radius.value=E.radius,n.setRenderTarget(E.map),n.clear(),n.renderBufferDirect(R,null,g,m,S,null)}function w(E,R,g,T){let D=null;const C=g.isPointLight===!0?E.customDistanceMaterial:E.customDepthMaterial;if(C!==void 0)D=C;else if(D=g.isPointLight===!0?l:o,n.localClippingEnabled&&R.clipShadows===!0&&Array.isArray(R.clippingPlanes)&&R.clippingPlanes.length!==0||R.displacementMap&&R.displacementScale!==0||R.alphaMap&&R.alphaTest>0||R.map&&R.alphaTest>0||R.alphaToCoverage===!0){const N=D.uuid,X=R.uuid;let q=c[N];q===void 0&&(q={},c[N]=q);let F=q[X];F===void 0&&(F=D.clone(),q[X]=F,R.addEventListener("dispose",A)),D=F}if(D.visible=R.visible,D.wireframe=R.wireframe,T===Er?D.side=R.shadowSide!==null?R.shadowSide:R.side:D.side=R.shadowSide!==null?R.shadowSide:h[R.side],D.alphaMap=R.alphaMap,D.alphaTest=R.alphaToCoverage===!0?.5:R.alphaTest,D.map=R.map,D.clipShadows=R.clipShadows,D.clippingPlanes=R.clippingPlanes,D.clipIntersection=R.clipIntersection,D.displacementMap=R.displacementMap,D.displacementScale=R.displacementScale,D.displacementBias=R.displacementBias,D.wireframeLinewidth=R.wireframeLinewidth,D.linewidth=R.linewidth,g.isPointLight===!0&&D.isMeshDistanceMaterial===!0){const N=n.properties.get(D);N.light=g}return D}function M(E,R,g,T,D){if(E.visible===!1)return;if(E.layers.test(R.layers)&&(E.isMesh||E.isLine||E.isPoints)&&(E.castShadow||E.receiveShadow&&D===Er)&&(!E.frustumCulled||i.intersectsObject(E))){E.modelViewMatrix.multiplyMatrices(g.matrixWorldInverse,E.matrixWorld);const X=e.update(E),q=E.material;if(Array.isArray(q)){const F=X.groups;for(let Y=0,H=F.length;Y<H;Y++){const Z=F[Y],ee=q[Z.materialIndex];if(ee&&ee.visible){const se=w(E,ee,T,D);E.onBeforeShadow(n,E,R,g,X,se,Z),n.renderBufferDirect(g,null,X,se,E,Z),E.onAfterShadow(n,E,R,g,X,se,Z)}}}else if(q.visible){const F=w(E,q,T,D);E.onBeforeShadow(n,E,R,g,X,F,null),n.renderBufferDirect(g,null,X,F,E,null),E.onAfterShadow(n,E,R,g,X,F,null)}}const N=E.children;for(let X=0,q=N.length;X<q;X++)M(N[X],R,g,T,D)}function A(E){E.target.removeEventListener("dispose",A);for(const g in c){const T=c[g],D=E.target.uuid;D in T&&(T[D].dispose(),delete T[D])}}}function OS(n,e){function t(){let L=!1;const ae=new ut;let J=null;const ue=new ut(0,0,0,0);return{setMask:function(ge){J!==ge&&!L&&(n.colorMask(ge,ge,ge,ge),J=ge)},setLocked:function(ge){L=ge},setClear:function(ge,j,ye,Me,ft){ft===!0&&(ge*=Me,j*=Me,ye*=Me),ae.set(ge,j,ye,Me),ue.equals(ae)===!1&&(n.clearColor(ge,j,ye,Me),ue.copy(ae))},reset:function(){L=!1,J=null,ue.set(-1,0,0,0)}}}function i(){let L=!1,ae=!1,J=null,ue=null,ge=null;return{setReversed:function(j){if(ae!==j){const ye=e.get("EXT_clip_control");j?ye.clipControlEXT(ye.LOWER_LEFT_EXT,ye.ZERO_TO_ONE_EXT):ye.clipControlEXT(ye.LOWER_LEFT_EXT,ye.NEGATIVE_ONE_TO_ONE_EXT),ae=j;const Me=ge;ge=null,this.setClear(Me)}},getReversed:function(){return ae},setTest:function(j){j?te(n.DEPTH_TEST):Pe(n.DEPTH_TEST)},setMask:function(j){J!==j&&!L&&(n.depthMask(j),J=j)},setFunc:function(j){if(ae&&(j=f_[j]),ue!==j){switch(j){case no:n.depthFunc(n.NEVER);break;case io:n.depthFunc(n.ALWAYS);break;case ro:n.depthFunc(n.LESS);break;case Zi:n.depthFunc(n.LEQUAL);break;case so:n.depthFunc(n.EQUAL);break;case ao:n.depthFunc(n.GEQUAL);break;case oo:n.depthFunc(n.GREATER);break;case lo:n.depthFunc(n.NOTEQUAL);break;default:n.depthFunc(n.LEQUAL)}ue=j}},setLocked:function(j){L=j},setClear:function(j){ge!==j&&(ge=j,ae&&(j=1-j),n.clearDepth(j))},reset:function(){L=!1,J=null,ue=null,ge=null,ae=!1}}}function r(){let L=!1,ae=null,J=null,ue=null,ge=null,j=null,ye=null,Me=null,ft=null;return{setTest:function(at){L||(at?te(n.STENCIL_TEST):Pe(n.STENCIL_TEST))},setMask:function(at){ae!==at&&!L&&(n.stencilMask(at),ae=at)},setFunc:function(at,on,ln){(J!==at||ue!==on||ge!==ln)&&(n.stencilFunc(at,on,ln),J=at,ue=on,ge=ln)},setOp:function(at,on,ln){(j!==at||ye!==on||Me!==ln)&&(n.stencilOp(at,on,ln),j=at,ye=on,Me=ln)},setLocked:function(at){L=at},setClear:function(at){ft!==at&&(n.clearStencil(at),ft=at)},reset:function(){L=!1,ae=null,J=null,ue=null,ge=null,j=null,ye=null,Me=null,ft=null}}}const s=new t,a=new i,o=new r,l=new WeakMap,c=new WeakMap;let u={},h={},d={},m=new WeakMap,x=[],S=null,p=!1,f=null,y=null,w=null,M=null,A=null,E=null,R=null,g=new qe(0,0,0),T=0,D=!1,C=null,N=null,X=null,q=null,F=null;const Y=n.getParameter(n.MAX_COMBINED_TEXTURE_IMAGE_UNITS);let H=!1,Z=0;const ee=n.getParameter(n.VERSION);ee.indexOf("WebGL")!==-1?(Z=parseFloat(/^WebGL (\d)/.exec(ee)[1]),H=Z>=1):ee.indexOf("OpenGL ES")!==-1&&(Z=parseFloat(/^OpenGL ES (\d)/.exec(ee)[1]),H=Z>=2);let se=null,ie={};const xe=n.getParameter(n.SCISSOR_BOX),He=n.getParameter(n.VIEWPORT),je=new ut().fromArray(xe),We=new ut().fromArray(He);function W(L,ae,J,ue){const ge=new Uint8Array(4),j=n.createTexture();n.bindTexture(L,j),n.texParameteri(L,n.TEXTURE_MIN_FILTER,n.NEAREST),n.texParameteri(L,n.TEXTURE_MAG_FILTER,n.NEAREST);for(let ye=0;ye<J;ye++)L===n.TEXTURE_3D||L===n.TEXTURE_2D_ARRAY?n.texImage3D(ae,0,n.RGBA,1,1,ue,0,n.RGBA,n.UNSIGNED_BYTE,ge):n.texImage2D(ae+ye,0,n.RGBA,1,1,0,n.RGBA,n.UNSIGNED_BYTE,ge);return j}const ne={};ne[n.TEXTURE_2D]=W(n.TEXTURE_2D,n.TEXTURE_2D,1),ne[n.TEXTURE_CUBE_MAP]=W(n.TEXTURE_CUBE_MAP,n.TEXTURE_CUBE_MAP_POSITIVE_X,6),ne[n.TEXTURE_2D_ARRAY]=W(n.TEXTURE_2D_ARRAY,n.TEXTURE_2D_ARRAY,1,1),ne[n.TEXTURE_3D]=W(n.TEXTURE_3D,n.TEXTURE_3D,1,1),s.setClear(0,0,0,1),a.setClear(1),o.setClear(0),te(n.DEPTH_TEST),a.setFunc(Zi),Xe(!1),et(Ic),te(n.CULL_FACE),Oe(Pn);function te(L){u[L]!==!0&&(n.enable(L),u[L]=!0)}function Pe(L){u[L]!==!1&&(n.disable(L),u[L]=!1)}function Le(L,ae){return d[L]!==ae?(n.bindFramebuffer(L,ae),d[L]=ae,L===n.DRAW_FRAMEBUFFER&&(d[n.FRAMEBUFFER]=ae),L===n.FRAMEBUFFER&&(d[n.DRAW_FRAMEBUFFER]=ae),!0):!1}function Re(L,ae){let J=x,ue=!1;if(L){J=m.get(ae),J===void 0&&(J=[],m.set(ae,J));const ge=L.textures;if(J.length!==ge.length||J[0]!==n.COLOR_ATTACHMENT0){for(let j=0,ye=ge.length;j<ye;j++)J[j]=n.COLOR_ATTACHMENT0+j;J.length=ge.length,ue=!0}}else J[0]!==n.BACK&&(J[0]=n.BACK,ue=!0);ue&&n.drawBuffers(J)}function Ke(L){return S!==L?(n.useProgram(L),S=L,!0):!1}const Be={[ai]:n.FUNC_ADD,[Um]:n.FUNC_SUBTRACT,[Nm]:n.FUNC_REVERSE_SUBTRACT};Be[Om]=n.MIN,Be[Fm]=n.MAX;const Ze={[Bm]:n.ZERO,[zm]:n.ONE,[Hm]:n.SRC_COLOR,[eo]:n.SRC_ALPHA,[qm]:n.SRC_ALPHA_SATURATE,[Wm]:n.DST_COLOR,[Gm]:n.DST_ALPHA,[Vm]:n.ONE_MINUS_SRC_COLOR,[to]:n.ONE_MINUS_SRC_ALPHA,[Xm]:n.ONE_MINUS_DST_COLOR,[km]:n.ONE_MINUS_DST_ALPHA,[Ym]:n.CONSTANT_COLOR,[$m]:n.ONE_MINUS_CONSTANT_COLOR,[Km]:n.CONSTANT_ALPHA,[Zm]:n.ONE_MINUS_CONSTANT_ALPHA};function Oe(L,ae,J,ue,ge,j,ye,Me,ft,at){if(L===Pn){p===!0&&(Pe(n.BLEND),p=!1);return}if(p===!1&&(te(n.BLEND),p=!0),L!==Im){if(L!==f||at!==D){if((y!==ai||A!==ai)&&(n.blendEquation(n.FUNC_ADD),y=ai,A=ai),at)switch(L){case Xi:n.blendFuncSeparate(n.ONE,n.ONE_MINUS_SRC_ALPHA,n.ONE,n.ONE_MINUS_SRC_ALPHA);break;case Uc:n.blendFunc(n.ONE,n.ONE);break;case Nc:n.blendFuncSeparate(n.ZERO,n.ONE_MINUS_SRC_COLOR,n.ZERO,n.ONE);break;case Oc:n.blendFuncSeparate(n.DST_COLOR,n.ONE_MINUS_SRC_ALPHA,n.ZERO,n.ONE);break;default:$e("WebGLState: Invalid blending: ",L);break}else switch(L){case Xi:n.blendFuncSeparate(n.SRC_ALPHA,n.ONE_MINUS_SRC_ALPHA,n.ONE,n.ONE_MINUS_SRC_ALPHA);break;case Uc:n.blendFuncSeparate(n.SRC_ALPHA,n.ONE,n.ONE,n.ONE);break;case Nc:$e("WebGLState: SubtractiveBlending requires material.premultipliedAlpha = true");break;case Oc:$e("WebGLState: MultiplyBlending requires material.premultipliedAlpha = true");break;default:$e("WebGLState: Invalid blending: ",L);break}w=null,M=null,E=null,R=null,g.set(0,0,0),T=0,f=L,D=at}return}ge=ge||ae,j=j||J,ye=ye||ue,(ae!==y||ge!==A)&&(n.blendEquationSeparate(Be[ae],Be[ge]),y=ae,A=ge),(J!==w||ue!==M||j!==E||ye!==R)&&(n.blendFuncSeparate(Ze[J],Ze[ue],Ze[j],Ze[ye]),w=J,M=ue,E=j,R=ye),(Me.equals(g)===!1||ft!==T)&&(n.blendColor(Me.r,Me.g,Me.b,ft),g.copy(Me),T=ft),f=L,D=!1}function fe(L,ae){L.side===Rn?Pe(n.CULL_FACE):te(n.CULL_FACE);let J=L.side===Vt;ae&&(J=!J),Xe(J),L.blending===Xi&&L.transparent===!1?Oe(Pn):Oe(L.blending,L.blendEquation,L.blendSrc,L.blendDst,L.blendEquationAlpha,L.blendSrcAlpha,L.blendDstAlpha,L.blendColor,L.blendAlpha,L.premultipliedAlpha),a.setFunc(L.depthFunc),a.setTest(L.depthTest),a.setMask(L.depthWrite),s.setMask(L.colorWrite);const ue=L.stencilWrite;o.setTest(ue),ue&&(o.setMask(L.stencilWriteMask),o.setFunc(L.stencilFunc,L.stencilRef,L.stencilFuncMask),o.setOp(L.stencilFail,L.stencilZFail,L.stencilZPass)),xt(L.polygonOffset,L.polygonOffsetFactor,L.polygonOffsetUnits),L.alphaToCoverage===!0?te(n.SAMPLE_ALPHA_TO_COVERAGE):Pe(n.SAMPLE_ALPHA_TO_COVERAGE)}function Xe(L){C!==L&&(L?n.frontFace(n.CW):n.frontFace(n.CCW),C=L)}function et(L){L!==Pm?(te(n.CULL_FACE),L!==N&&(L===Ic?n.cullFace(n.BACK):L===Dm?n.cullFace(n.FRONT):n.cullFace(n.FRONT_AND_BACK))):Pe(n.CULL_FACE),N=L}function rt(L){L!==X&&(H&&n.lineWidth(L),X=L)}function xt(L,ae,J){L?(te(n.POLYGON_OFFSET_FILL),(q!==ae||F!==J)&&(q=ae,F=J,a.getReversed()&&(ae=-ae),n.polygonOffset(ae,J))):Pe(n.POLYGON_OFFSET_FILL)}function ct(L){L?te(n.SCISSOR_TEST):Pe(n.SCISSOR_TEST)}function st(L){L===void 0&&(L=n.TEXTURE0+Y-1),se!==L&&(n.activeTexture(L),se=L)}function I(L,ae,J){J===void 0&&(se===null?J=n.TEXTURE0+Y-1:J=se);let ue=ie[J];ue===void 0&&(ue={type:void 0,texture:void 0},ie[J]=ue),(ue.type!==L||ue.texture!==ae)&&(se!==J&&(n.activeTexture(J),se=J),n.bindTexture(L,ae||ne[L]),ue.type=L,ue.texture=ae)}function Bt(){const L=ie[se];L!==void 0&&L.type!==void 0&&(n.bindTexture(L.type,null),L.type=void 0,L.texture=void 0)}function Je(){try{n.compressedTexImage2D(...arguments)}catch(L){$e("WebGLState:",L)}}function b(){try{n.compressedTexImage3D(...arguments)}catch(L){$e("WebGLState:",L)}}function _(){try{n.texSubImage2D(...arguments)}catch(L){$e("WebGLState:",L)}}function O(){try{n.texSubImage3D(...arguments)}catch(L){$e("WebGLState:",L)}}function G(){try{n.compressedTexSubImage2D(...arguments)}catch(L){$e("WebGLState:",L)}}function $(){try{n.compressedTexSubImage3D(...arguments)}catch(L){$e("WebGLState:",L)}}function re(){try{n.texStorage2D(...arguments)}catch(L){$e("WebGLState:",L)}}function oe(){try{n.texStorage3D(...arguments)}catch(L){$e("WebGLState:",L)}}function K(){try{n.texImage2D(...arguments)}catch(L){$e("WebGLState:",L)}}function Q(){try{n.texImage3D(...arguments)}catch(L){$e("WebGLState:",L)}}function le(L){return h[L]!==void 0?h[L]:n.getParameter(L)}function be(L,ae){h[L]!==ae&&(n.pixelStorei(L,ae),h[L]=ae)}function de(L){je.equals(L)===!1&&(n.scissor(L.x,L.y,L.z,L.w),je.copy(L))}function ce(L){We.equals(L)===!1&&(n.viewport(L.x,L.y,L.z,L.w),We.copy(L))}function we(L,ae){let J=c.get(ae);J===void 0&&(J=new WeakMap,c.set(ae,J));let ue=J.get(L);ue===void 0&&(ue=n.getUniformBlockIndex(ae,L.name),J.set(L,ue))}function Ce(L,ae){const ue=c.get(ae).get(L);l.get(ae)!==ue&&(n.uniformBlockBinding(ae,ue,L.__bindingPointIndex),l.set(ae,ue))}function Ue(){n.disable(n.BLEND),n.disable(n.CULL_FACE),n.disable(n.DEPTH_TEST),n.disable(n.POLYGON_OFFSET_FILL),n.disable(n.SCISSOR_TEST),n.disable(n.STENCIL_TEST),n.disable(n.SAMPLE_ALPHA_TO_COVERAGE),n.blendEquation(n.FUNC_ADD),n.blendFunc(n.ONE,n.ZERO),n.blendFuncSeparate(n.ONE,n.ZERO,n.ONE,n.ZERO),n.blendColor(0,0,0,0),n.colorMask(!0,!0,!0,!0),n.clearColor(0,0,0,0),n.depthMask(!0),n.depthFunc(n.LESS),a.setReversed(!1),n.clearDepth(1),n.stencilMask(4294967295),n.stencilFunc(n.ALWAYS,0,4294967295),n.stencilOp(n.KEEP,n.KEEP,n.KEEP),n.clearStencil(0),n.cullFace(n.BACK),n.frontFace(n.CCW),n.polygonOffset(0,0),n.activeTexture(n.TEXTURE0),n.bindFramebuffer(n.FRAMEBUFFER,null),n.bindFramebuffer(n.DRAW_FRAMEBUFFER,null),n.bindFramebuffer(n.READ_FRAMEBUFFER,null),n.useProgram(null),n.lineWidth(1),n.scissor(0,0,n.canvas.width,n.canvas.height),n.viewport(0,0,n.canvas.width,n.canvas.height),n.pixelStorei(n.PACK_ALIGNMENT,4),n.pixelStorei(n.UNPACK_ALIGNMENT,4),n.pixelStorei(n.UNPACK_FLIP_Y_WEBGL,!1),n.pixelStorei(n.UNPACK_PREMULTIPLY_ALPHA_WEBGL,!1),n.pixelStorei(n.UNPACK_COLORSPACE_CONVERSION_WEBGL,n.BROWSER_DEFAULT_WEBGL),n.pixelStorei(n.PACK_ROW_LENGTH,0),n.pixelStorei(n.PACK_SKIP_PIXELS,0),n.pixelStorei(n.PACK_SKIP_ROWS,0),n.pixelStorei(n.UNPACK_ROW_LENGTH,0),n.pixelStorei(n.UNPACK_IMAGE_HEIGHT,0),n.pixelStorei(n.UNPACK_SKIP_PIXELS,0),n.pixelStorei(n.UNPACK_SKIP_ROWS,0),n.pixelStorei(n.UNPACK_SKIP_IMAGES,0),u={},h={},se=null,ie={},d={},m=new WeakMap,x=[],S=null,p=!1,f=null,y=null,w=null,M=null,A=null,E=null,R=null,g=new qe(0,0,0),T=0,D=!1,C=null,N=null,X=null,q=null,F=null,je.set(0,0,n.canvas.width,n.canvas.height),We.set(0,0,n.canvas.width,n.canvas.height),s.reset(),a.reset(),o.reset()}return{buffers:{color:s,depth:a,stencil:o},enable:te,disable:Pe,bindFramebuffer:Le,drawBuffers:Re,useProgram:Ke,setBlending:Oe,setMaterial:fe,setFlipSided:Xe,setCullFace:et,setLineWidth:rt,setPolygonOffset:xt,setScissorTest:ct,activeTexture:st,bindTexture:I,unbindTexture:Bt,compressedTexImage2D:Je,compressedTexImage3D:b,texImage2D:K,texImage3D:Q,pixelStorei:be,getParameter:le,updateUBOMapping:we,uniformBlockBinding:Ce,texStorage2D:re,texStorage3D:oe,texSubImage2D:_,texSubImage3D:O,compressedTexSubImage2D:G,compressedTexSubImage3D:$,scissor:de,viewport:ce,reset:Ue}}function FS(n,e,t,i,r,s,a){const o=e.has("WEBGL_multisampled_render_to_texture")?e.get("WEBGL_multisampled_render_to_texture"):null,l=typeof navigator>"u"?!1:/OculusBrowser/g.test(navigator.userAgent),c=new Ve,u=new WeakMap,h=new Set;let d;const m=new WeakMap;let x=!1;try{x=typeof OffscreenCanvas<"u"&&new OffscreenCanvas(1,1).getContext("2d")!==null}catch{}function S(b,_){return x?new OffscreenCanvas(b,_):Fs("canvas")}function p(b,_,O){let G=1;const $=Je(b);if(($.width>O||$.height>O)&&(G=O/Math.max($.width,$.height)),G<1)if(typeof HTMLImageElement<"u"&&b instanceof HTMLImageElement||typeof HTMLCanvasElement<"u"&&b instanceof HTMLCanvasElement||typeof ImageBitmap<"u"&&b instanceof ImageBitmap||typeof VideoFrame<"u"&&b instanceof VideoFrame){const re=Math.floor(G*$.width),oe=Math.floor(G*$.height);d===void 0&&(d=S(re,oe));const K=_?S(re,oe):d;return K.width=re,K.height=oe,K.getContext("2d").drawImage(b,0,0,re,oe),De("WebGLRenderer: Texture has been resized from ("+$.width+"x"+$.height+") to ("+re+"x"+oe+")."),K}else return"data"in b&&De("WebGLRenderer: Image in DataTexture is too big ("+$.width+"x"+$.height+")."),b;return b}function f(b){return b.generateMipmaps}function y(b){n.generateMipmap(b)}function w(b){return b.isWebGLCubeRenderTarget?n.TEXTURE_CUBE_MAP:b.isWebGL3DRenderTarget?n.TEXTURE_3D:b.isWebGLArrayRenderTarget||b.isCompressedArrayTexture?n.TEXTURE_2D_ARRAY:n.TEXTURE_2D}function M(b,_,O,G,$,re=!1){if(b!==null){if(n[b]!==void 0)return n[b];De("WebGLRenderer: Attempt to use non-existing WebGL internal format '"+b+"'")}let oe;G&&(oe=e.get("EXT_texture_norm16"),oe||De("WebGLRenderer: Unable to use normalized textures without EXT_texture_norm16 extension"));let K=_;if(_===n.RED&&(O===n.FLOAT&&(K=n.R32F),O===n.HALF_FLOAT&&(K=n.R16F),O===n.UNSIGNED_BYTE&&(K=n.R8),O===n.UNSIGNED_SHORT&&oe&&(K=oe.R16_EXT),O===n.SHORT&&oe&&(K=oe.R16_SNORM_EXT)),_===n.RED_INTEGER&&(O===n.UNSIGNED_BYTE&&(K=n.R8UI),O===n.UNSIGNED_SHORT&&(K=n.R16UI),O===n.UNSIGNED_INT&&(K=n.R32UI),O===n.BYTE&&(K=n.R8I),O===n.SHORT&&(K=n.R16I),O===n.INT&&(K=n.R32I)),_===n.RG&&(O===n.FLOAT&&(K=n.RG32F),O===n.HALF_FLOAT&&(K=n.RG16F),O===n.UNSIGNED_BYTE&&(K=n.RG8),O===n.UNSIGNED_SHORT&&oe&&(K=oe.RG16_EXT),O===n.SHORT&&oe&&(K=oe.RG16_SNORM_EXT)),_===n.RG_INTEGER&&(O===n.UNSIGNED_BYTE&&(K=n.RG8UI),O===n.UNSIGNED_SHORT&&(K=n.RG16UI),O===n.UNSIGNED_INT&&(K=n.RG32UI),O===n.BYTE&&(K=n.RG8I),O===n.SHORT&&(K=n.RG16I),O===n.INT&&(K=n.RG32I)),_===n.RGB_INTEGER&&(O===n.UNSIGNED_BYTE&&(K=n.RGB8UI),O===n.UNSIGNED_SHORT&&(K=n.RGB16UI),O===n.UNSIGNED_INT&&(K=n.RGB32UI),O===n.BYTE&&(K=n.RGB8I),O===n.SHORT&&(K=n.RGB16I),O===n.INT&&(K=n.RGB32I)),_===n.RGBA_INTEGER&&(O===n.UNSIGNED_BYTE&&(K=n.RGBA8UI),O===n.UNSIGNED_SHORT&&(K=n.RGBA16UI),O===n.UNSIGNED_INT&&(K=n.RGBA32UI),O===n.BYTE&&(K=n.RGBA8I),O===n.SHORT&&(K=n.RGBA16I),O===n.INT&&(K=n.RGBA32I)),_===n.RGB&&(O===n.UNSIGNED_SHORT&&oe&&(K=oe.RGB16_EXT),O===n.SHORT&&oe&&(K=oe.RGB16_SNORM_EXT),O===n.UNSIGNED_INT_5_9_9_9_REV&&(K=n.RGB9_E5),O===n.UNSIGNED_INT_10F_11F_11F_REV&&(K=n.R11F_G11F_B10F)),_===n.RGBA){const Q=re?Os:Ge.getTransfer($);O===n.FLOAT&&(K=n.RGBA32F),O===n.HALF_FLOAT&&(K=n.RGBA16F),O===n.UNSIGNED_BYTE&&(K=Q===Qe?n.SRGB8_ALPHA8:n.RGBA8),O===n.UNSIGNED_SHORT&&oe&&(K=oe.RGBA16_EXT),O===n.SHORT&&oe&&(K=oe.RGBA16_SNORM_EXT),O===n.UNSIGNED_SHORT_4_4_4_4&&(K=n.RGBA4),O===n.UNSIGNED_SHORT_5_5_5_1&&(K=n.RGB5_A1)}return(K===n.R16F||K===n.R32F||K===n.RG16F||K===n.RG32F||K===n.RGBA16F||K===n.RGBA32F)&&e.get("EXT_color_buffer_float"),K}function A(b,_){let O;return b?_===null||_===vn||_===Pr?O=n.DEPTH24_STENCIL8:_===pn?O=n.DEPTH32F_STENCIL8:_===Cr&&(O=n.DEPTH24_STENCIL8,De("DepthTexture: 16 bit depth attachment is not supported with stencil. Using 24-bit attachment.")):_===null||_===vn||_===Pr?O=n.DEPTH_COMPONENT24:_===pn?O=n.DEPTH_COMPONENT32F:_===Cr&&(O=n.DEPTH_COMPONENT16),O}function E(b,_){return f(b)===!0||b.isFramebufferTexture&&b.minFilter!==At&&b.minFilter!==Dt?Math.log2(Math.max(_.width,_.height))+1:b.mipmaps!==void 0&&b.mipmaps.length>0?b.mipmaps.length:b.isCompressedTexture&&Array.isArray(b.image)?_.mipmaps.length:1}function R(b){const _=b.target;_.removeEventListener("dispose",R),T(_),_.isVideoTexture&&u.delete(_),_.isHTMLTexture&&h.delete(_)}function g(b){const _=b.target;_.removeEventListener("dispose",g),C(_)}function T(b){const _=i.get(b);if(_.__webglInit===void 0)return;const O=b.source,G=m.get(O);if(G){const $=G[_.__cacheKey];$.usedTimes--,$.usedTimes===0&&D(b),Object.keys(G).length===0&&m.delete(O)}i.remove(b)}function D(b){const _=i.get(b);n.deleteTexture(_.__webglTexture);const O=b.source,G=m.get(O);delete G[_.__cacheKey],a.memory.textures--}function C(b){const _=i.get(b);if(b.depthTexture&&(b.depthTexture.dispose(),i.remove(b.depthTexture)),b.isWebGLCubeRenderTarget)for(let G=0;G<6;G++){if(Array.isArray(_.__webglFramebuffer[G]))for(let $=0;$<_.__webglFramebuffer[G].length;$++)n.deleteFramebuffer(_.__webglFramebuffer[G][$]);else n.deleteFramebuffer(_.__webglFramebuffer[G]);_.__webglDepthbuffer&&n.deleteRenderbuffer(_.__webglDepthbuffer[G])}else{if(Array.isArray(_.__webglFramebuffer))for(let G=0;G<_.__webglFramebuffer.length;G++)n.deleteFramebuffer(_.__webglFramebuffer[G]);else n.deleteFramebuffer(_.__webglFramebuffer);if(_.__webglDepthbuffer&&n.deleteRenderbuffer(_.__webglDepthbuffer),_.__webglMultisampledFramebuffer&&n.deleteFramebuffer(_.__webglMultisampledFramebuffer),_.__webglColorRenderbuffer)for(let G=0;G<_.__webglColorRenderbuffer.length;G++)_.__webglColorRenderbuffer[G]&&n.deleteRenderbuffer(_.__webglColorRenderbuffer[G]);_.__webglDepthRenderbuffer&&n.deleteRenderbuffer(_.__webglDepthRenderbuffer)}const O=b.textures;for(let G=0,$=O.length;G<$;G++){const re=i.get(O[G]);re.__webglTexture&&(n.deleteTexture(re.__webglTexture),a.memory.textures--),i.remove(O[G])}i.remove(b)}let N=0;function X(){N=0}function q(){return N}function F(b){N=b}function Y(){const b=N;return b>=r.maxTextures&&De("WebGLTextures: Trying to use "+b+" texture units while this GPU supports only "+r.maxTextures),N+=1,b}function H(b){const _=[];return _.push(b.wrapS),_.push(b.wrapT),_.push(b.wrapR||0),_.push(b.magFilter),_.push(b.minFilter),_.push(b.anisotropy),_.push(b.internalFormat),_.push(b.format),_.push(b.type),_.push(b.generateMipmaps),_.push(b.premultiplyAlpha),_.push(b.flipY),_.push(b.unpackAlignment),_.push(b.colorSpace),_.join()}function Z(b,_){const O=i.get(b);if(b.isVideoTexture&&I(b),b.isRenderTargetTexture===!1&&b.isExternalTexture!==!0&&b.version>0&&O.__version!==b.version){const G=b.image;if(G===null)De("WebGLRenderer: Texture marked for update but no image data found.");else if(G.complete===!1)De("WebGLRenderer: Texture marked for update but image is incomplete");else{Pe(O,b,_);return}}else b.isExternalTexture&&(O.__webglTexture=b.sourceTexture?b.sourceTexture:null);t.bindTexture(n.TEXTURE_2D,O.__webglTexture,n.TEXTURE0+_)}function ee(b,_){const O=i.get(b);if(b.isRenderTargetTexture===!1&&b.version>0&&O.__version!==b.version){Pe(O,b,_);return}else b.isExternalTexture&&(O.__webglTexture=b.sourceTexture?b.sourceTexture:null);t.bindTexture(n.TEXTURE_2D_ARRAY,O.__webglTexture,n.TEXTURE0+_)}function se(b,_){const O=i.get(b);if(b.isRenderTargetTexture===!1&&b.version>0&&O.__version!==b.version){Pe(O,b,_);return}t.bindTexture(n.TEXTURE_3D,O.__webglTexture,n.TEXTURE0+_)}function ie(b,_){const O=i.get(b);if(b.isCubeDepthTexture!==!0&&b.version>0&&O.__version!==b.version){Le(O,b,_);return}t.bindTexture(n.TEXTURE_CUBE_MAP,O.__webglTexture,n.TEXTURE0+_)}const xe={[co]:n.REPEAT,[Cn]:n.CLAMP_TO_EDGE,[uo]:n.MIRRORED_REPEAT},He={[At]:n.NEAREST,[jm]:n.NEAREST_MIPMAP_NEAREST,[qr]:n.NEAREST_MIPMAP_LINEAR,[Dt]:n.LINEAR,[pa]:n.LINEAR_MIPMAP_NEAREST,[ci]:n.LINEAR_MIPMAP_LINEAR},je={[n_]:n.NEVER,[o_]:n.ALWAYS,[i_]:n.LESS,[El]:n.LEQUAL,[r_]:n.EQUAL,[yl]:n.GEQUAL,[s_]:n.GREATER,[a_]:n.NOTEQUAL};function We(b,_){if(_.type===pn&&e.has("OES_texture_float_linear")===!1&&(_.magFilter===Dt||_.magFilter===pa||_.magFilter===qr||_.magFilter===ci||_.minFilter===Dt||_.minFilter===pa||_.minFilter===qr||_.minFilter===ci)&&De("WebGLRenderer: Unable to use linear filtering with floating point textures. OES_texture_float_linear not supported on this device."),n.texParameteri(b,n.TEXTURE_WRAP_S,xe[_.wrapS]),n.texParameteri(b,n.TEXTURE_WRAP_T,xe[_.wrapT]),(b===n.TEXTURE_3D||b===n.TEXTURE_2D_ARRAY)&&n.texParameteri(b,n.TEXTURE_WRAP_R,xe[_.wrapR]),n.texParameteri(b,n.TEXTURE_MAG_FILTER,He[_.magFilter]),n.texParameteri(b,n.TEXTURE_MIN_FILTER,He[_.minFilter]),_.compareFunction&&(n.texParameteri(b,n.TEXTURE_COMPARE_MODE,n.COMPARE_REF_TO_TEXTURE),n.texParameteri(b,n.TEXTURE_COMPARE_FUNC,je[_.compareFunction])),e.has("EXT_texture_filter_anisotropic")===!0){if(_.magFilter===At||_.minFilter!==qr&&_.minFilter!==ci||_.type===pn&&e.has("OES_texture_float_linear")===!1)return;if(_.anisotropy>1||i.get(_).__currentAnisotropy){const O=e.get("EXT_texture_filter_anisotropic");n.texParameterf(b,O.TEXTURE_MAX_ANISOTROPY_EXT,Math.min(_.anisotropy,r.getMaxAnisotropy())),i.get(_).__currentAnisotropy=_.anisotropy}}}function W(b,_){let O=!1;b.__webglInit===void 0&&(b.__webglInit=!0,_.addEventListener("dispose",R));const G=_.source;let $=m.get(G);$===void 0&&($={},m.set(G,$));const re=H(_);if(re!==b.__cacheKey){$[re]===void 0&&($[re]={texture:n.createTexture(),usedTimes:0},a.memory.textures++,O=!0),$[re].usedTimes++;const oe=$[b.__cacheKey];oe!==void 0&&($[b.__cacheKey].usedTimes--,oe.usedTimes===0&&D(_)),b.__cacheKey=re,b.__webglTexture=$[re].texture}return O}function ne(b,_,O){return Math.floor(Math.floor(b/O)/_)}function te(b,_,O,G){const re=b.updateRanges;if(re.length===0)t.texSubImage2D(n.TEXTURE_2D,0,0,0,_.width,_.height,O,G,_.data);else{re.sort((be,de)=>be.start-de.start);let oe=0;for(let be=1;be<re.length;be++){const de=re[oe],ce=re[be],we=de.start+de.count,Ce=ne(ce.start,_.width,4),Ue=ne(de.start,_.width,4);ce.start<=we+1&&Ce===Ue&&ne(ce.start+ce.count-1,_.width,4)===Ce?de.count=Math.max(de.count,ce.start+ce.count-de.start):(++oe,re[oe]=ce)}re.length=oe+1;const K=t.getParameter(n.UNPACK_ROW_LENGTH),Q=t.getParameter(n.UNPACK_SKIP_PIXELS),le=t.getParameter(n.UNPACK_SKIP_ROWS);t.pixelStorei(n.UNPACK_ROW_LENGTH,_.width);for(let be=0,de=re.length;be<de;be++){const ce=re[be],we=Math.floor(ce.start/4),Ce=Math.ceil(ce.count/4),Ue=we%_.width,L=Math.floor(we/_.width),ae=Ce,J=1;t.pixelStorei(n.UNPACK_SKIP_PIXELS,Ue),t.pixelStorei(n.UNPACK_SKIP_ROWS,L),t.texSubImage2D(n.TEXTURE_2D,0,Ue,L,ae,J,O,G,_.data)}b.clearUpdateRanges(),t.pixelStorei(n.UNPACK_ROW_LENGTH,K),t.pixelStorei(n.UNPACK_SKIP_PIXELS,Q),t.pixelStorei(n.UNPACK_SKIP_ROWS,le)}}function Pe(b,_,O){let G=n.TEXTURE_2D;(_.isDataArrayTexture||_.isCompressedArrayTexture)&&(G=n.TEXTURE_2D_ARRAY),_.isData3DTexture&&(G=n.TEXTURE_3D);const $=W(b,_),re=_.source;t.bindTexture(G,b.__webglTexture,n.TEXTURE0+O);const oe=i.get(re);if(re.version!==oe.__version||$===!0){if(t.activeTexture(n.TEXTURE0+O),(typeof ImageBitmap<"u"&&_.image instanceof ImageBitmap)===!1){const J=Ge.getPrimaries(Ge.workingColorSpace),ue=_.colorSpace===qn?null:Ge.getPrimaries(_.colorSpace),ge=_.colorSpace===qn||J===ue?n.NONE:n.BROWSER_DEFAULT_WEBGL;t.pixelStorei(n.UNPACK_FLIP_Y_WEBGL,_.flipY),t.pixelStorei(n.UNPACK_PREMULTIPLY_ALPHA_WEBGL,_.premultiplyAlpha),t.pixelStorei(n.UNPACK_COLORSPACE_CONVERSION_WEBGL,ge)}t.pixelStorei(n.UNPACK_ALIGNMENT,_.unpackAlignment);let Q=p(_.image,!1,r.maxTextureSize);Q=Bt(_,Q);const le=s.convert(_.format,_.colorSpace),be=s.convert(_.type);let de=M(_.internalFormat,le,be,_.normalized,_.colorSpace,_.isVideoTexture);We(G,_);let ce;const we=_.mipmaps,Ce=_.isVideoTexture!==!0,Ue=oe.__version===void 0||$===!0,L=re.dataReady,ae=E(_,Q);if(_.isDepthTexture)de=A(_.format===ui,_.type),Ue&&(Ce?t.texStorage2D(n.TEXTURE_2D,1,de,Q.width,Q.height):t.texImage2D(n.TEXTURE_2D,0,de,Q.width,Q.height,0,le,be,null));else if(_.isDataTexture)if(we.length>0){Ce&&Ue&&t.texStorage2D(n.TEXTURE_2D,ae,de,we[0].width,we[0].height);for(let J=0,ue=we.length;J<ue;J++)ce=we[J],Ce?L&&t.texSubImage2D(n.TEXTURE_2D,J,0,0,ce.width,ce.height,le,be,ce.data):t.texImage2D(n.TEXTURE_2D,J,de,ce.width,ce.height,0,le,be,ce.data);_.generateMipmaps=!1}else Ce?(Ue&&t.texStorage2D(n.TEXTURE_2D,ae,de,Q.width,Q.height),L&&te(_,Q,le,be)):t.texImage2D(n.TEXTURE_2D,0,de,Q.width,Q.height,0,le,be,Q.data);else if(_.isCompressedTexture)if(_.isCompressedArrayTexture){Ce&&Ue&&t.texStorage3D(n.TEXTURE_2D_ARRAY,ae,de,we[0].width,we[0].height,Q.depth);for(let J=0,ue=we.length;J<ue;J++)if(ce=we[J],_.format!==nn)if(le!==null)if(Ce){if(L)if(_.layerUpdates.size>0){const ge=lu(ce.width,ce.height,_.format,_.type);for(const j of _.layerUpdates){const ye=ce.data.subarray(j*ge/ce.data.BYTES_PER_ELEMENT,(j+1)*ge/ce.data.BYTES_PER_ELEMENT);t.compressedTexSubImage3D(n.TEXTURE_2D_ARRAY,J,0,0,j,ce.width,ce.height,1,le,ye)}_.clearLayerUpdates()}else t.compressedTexSubImage3D(n.TEXTURE_2D_ARRAY,J,0,0,0,ce.width,ce.height,Q.depth,le,ce.data)}else t.compressedTexImage3D(n.TEXTURE_2D_ARRAY,J,de,ce.width,ce.height,Q.depth,0,ce.data,0,0);else De("WebGLRenderer: Attempt to load unsupported compressed texture format in .uploadTexture()");else Ce?L&&t.texSubImage3D(n.TEXTURE_2D_ARRAY,J,0,0,0,ce.width,ce.height,Q.depth,le,be,ce.data):t.texImage3D(n.TEXTURE_2D_ARRAY,J,de,ce.width,ce.height,Q.depth,0,le,be,ce.data)}else{Ce&&Ue&&t.texStorage2D(n.TEXTURE_2D,ae,de,we[0].width,we[0].height);for(let J=0,ue=we.length;J<ue;J++)ce=we[J],_.format!==nn?le!==null?Ce?L&&t.compressedTexSubImage2D(n.TEXTURE_2D,J,0,0,ce.width,ce.height,le,ce.data):t.compressedTexImage2D(n.TEXTURE_2D,J,de,ce.width,ce.height,0,ce.data):De("WebGLRenderer: Attempt to load unsupported compressed texture format in .uploadTexture()"):Ce?L&&t.texSubImage2D(n.TEXTURE_2D,J,0,0,ce.width,ce.height,le,be,ce.data):t.texImage2D(n.TEXTURE_2D,J,de,ce.width,ce.height,0,le,be,ce.data)}else if(_.isDataArrayTexture)if(Ce){if(Ue&&t.texStorage3D(n.TEXTURE_2D_ARRAY,ae,de,Q.width,Q.height,Q.depth),L)if(_.layerUpdates.size>0){const J=lu(Q.width,Q.height,_.format,_.type);for(const ue of _.layerUpdates){const ge=Q.data.subarray(ue*J/Q.data.BYTES_PER_ELEMENT,(ue+1)*J/Q.data.BYTES_PER_ELEMENT);t.texSubImage3D(n.TEXTURE_2D_ARRAY,0,0,0,ue,Q.width,Q.height,1,le,be,ge)}_.clearLayerUpdates()}else t.texSubImage3D(n.TEXTURE_2D_ARRAY,0,0,0,0,Q.width,Q.height,Q.depth,le,be,Q.data)}else t.texImage3D(n.TEXTURE_2D_ARRAY,0,de,Q.width,Q.height,Q.depth,0,le,be,Q.data);else if(_.isData3DTexture)Ce?(Ue&&t.texStorage3D(n.TEXTURE_3D,ae,de,Q.width,Q.height,Q.depth),L&&t.texSubImage3D(n.TEXTURE_3D,0,0,0,0,Q.width,Q.height,Q.depth,le,be,Q.data)):t.texImage3D(n.TEXTURE_3D,0,de,Q.width,Q.height,Q.depth,0,le,be,Q.data);else if(_.isFramebufferTexture){if(Ue)if(Ce)t.texStorage2D(n.TEXTURE_2D,ae,de,Q.width,Q.height);else{let J=Q.width,ue=Q.height;for(let ge=0;ge<ae;ge++)t.texImage2D(n.TEXTURE_2D,ge,de,J,ue,0,le,be,null),J>>=1,ue>>=1}}else if(_.isHTMLTexture){if("texElementImage2D"in n){const J=n.canvas;if(J.hasAttribute("layoutsubtree")||J.setAttribute("layoutsubtree","true"),Q.parentNode!==J){J.appendChild(Q),h.add(_),J.onpaint=ue=>{const ge=ue.changedElements;for(const j of h)ge.includes(j.image)&&(j.needsUpdate=!0)},J.requestPaint();return}if(n.texElementImage2D.length===3)n.texElementImage2D(n.TEXTURE_2D,n.RGBA8,Q);else{const ge=n.RGBA,j=n.RGBA,ye=n.UNSIGNED_BYTE;n.texElementImage2D(n.TEXTURE_2D,0,ge,j,ye,Q)}n.texParameteri(n.TEXTURE_2D,n.TEXTURE_MIN_FILTER,n.LINEAR),n.texParameteri(n.TEXTURE_2D,n.TEXTURE_WRAP_S,n.CLAMP_TO_EDGE),n.texParameteri(n.TEXTURE_2D,n.TEXTURE_WRAP_T,n.CLAMP_TO_EDGE)}}else if(we.length>0){if(Ce&&Ue){const J=Je(we[0]);t.texStorage2D(n.TEXTURE_2D,ae,de,J.width,J.height)}for(let J=0,ue=we.length;J<ue;J++)ce=we[J],Ce?L&&t.texSubImage2D(n.TEXTURE_2D,J,0,0,le,be,ce):t.texImage2D(n.TEXTURE_2D,J,de,le,be,ce);_.generateMipmaps=!1}else if(Ce){if(Ue){const J=Je(Q);t.texStorage2D(n.TEXTURE_2D,ae,de,J.width,J.height)}L&&t.texSubImage2D(n.TEXTURE_2D,0,0,0,le,be,Q)}else t.texImage2D(n.TEXTURE_2D,0,de,le,be,Q);f(_)&&y(G),oe.__version=re.version,_.onUpdate&&_.onUpdate(_)}b.__version=_.version}function Le(b,_,O){if(_.image.length!==6)return;const G=W(b,_),$=_.source;t.bindTexture(n.TEXTURE_CUBE_MAP,b.__webglTexture,n.TEXTURE0+O);const re=i.get($);if($.version!==re.__version||G===!0){t.activeTexture(n.TEXTURE0+O);const oe=Ge.getPrimaries(Ge.workingColorSpace),K=_.colorSpace===qn?null:Ge.getPrimaries(_.colorSpace),Q=_.colorSpace===qn||oe===K?n.NONE:n.BROWSER_DEFAULT_WEBGL;t.pixelStorei(n.UNPACK_FLIP_Y_WEBGL,_.flipY),t.pixelStorei(n.UNPACK_PREMULTIPLY_ALPHA_WEBGL,_.premultiplyAlpha),t.pixelStorei(n.UNPACK_ALIGNMENT,_.unpackAlignment),t.pixelStorei(n.UNPACK_COLORSPACE_CONVERSION_WEBGL,Q);const le=_.isCompressedTexture||_.image[0].isCompressedTexture,be=_.image[0]&&_.image[0].isDataTexture,de=[];for(let j=0;j<6;j++)!le&&!be?de[j]=p(_.image[j],!0,r.maxCubemapSize):de[j]=be?_.image[j].image:_.image[j],de[j]=Bt(_,de[j]);const ce=de[0],we=s.convert(_.format,_.colorSpace),Ce=s.convert(_.type),Ue=M(_.internalFormat,we,Ce,_.normalized,_.colorSpace),L=_.isVideoTexture!==!0,ae=re.__version===void 0||G===!0,J=$.dataReady;let ue=E(_,ce);We(n.TEXTURE_CUBE_MAP,_);let ge;if(le){L&&ae&&t.texStorage2D(n.TEXTURE_CUBE_MAP,ue,Ue,ce.width,ce.height);for(let j=0;j<6;j++){ge=de[j].mipmaps;for(let ye=0;ye<ge.length;ye++){const Me=ge[ye];_.format!==nn?we!==null?L?J&&t.compressedTexSubImage2D(n.TEXTURE_CUBE_MAP_POSITIVE_X+j,ye,0,0,Me.width,Me.height,we,Me.data):t.compressedTexImage2D(n.TEXTURE_CUBE_MAP_POSITIVE_X+j,ye,Ue,Me.width,Me.height,0,Me.data):De("WebGLRenderer: Attempt to load unsupported compressed texture format in .setTextureCube()"):L?J&&t.texSubImage2D(n.TEXTURE_CUBE_MAP_POSITIVE_X+j,ye,0,0,Me.width,Me.height,we,Ce,Me.data):t.texImage2D(n.TEXTURE_CUBE_MAP_POSITIVE_X+j,ye,Ue,Me.width,Me.height,0,we,Ce,Me.data)}}}else{if(ge=_.mipmaps,L&&ae){ge.length>0&&ue++;const j=Je(de[0]);t.texStorage2D(n.TEXTURE_CUBE_MAP,ue,Ue,j.width,j.height)}for(let j=0;j<6;j++)if(be){L?J&&t.texSubImage2D(n.TEXTURE_CUBE_MAP_POSITIVE_X+j,0,0,0,de[j].width,de[j].height,we,Ce,de[j].data):t.texImage2D(n.TEXTURE_CUBE_MAP_POSITIVE_X+j,0,Ue,de[j].width,de[j].height,0,we,Ce,de[j].data);for(let ye=0;ye<ge.length;ye++){const ft=ge[ye].image[j].image;L?J&&t.texSubImage2D(n.TEXTURE_CUBE_MAP_POSITIVE_X+j,ye+1,0,0,ft.width,ft.height,we,Ce,ft.data):t.texImage2D(n.TEXTURE_CUBE_MAP_POSITIVE_X+j,ye+1,Ue,ft.width,ft.height,0,we,Ce,ft.data)}}else{L?J&&t.texSubImage2D(n.TEXTURE_CUBE_MAP_POSITIVE_X+j,0,0,0,we,Ce,de[j]):t.texImage2D(n.TEXTURE_CUBE_MAP_POSITIVE_X+j,0,Ue,we,Ce,de[j]);for(let ye=0;ye<ge.length;ye++){const Me=ge[ye];L?J&&t.texSubImage2D(n.TEXTURE_CUBE_MAP_POSITIVE_X+j,ye+1,0,0,we,Ce,Me.image[j]):t.texImage2D(n.TEXTURE_CUBE_MAP_POSITIVE_X+j,ye+1,Ue,we,Ce,Me.image[j])}}}f(_)&&y(n.TEXTURE_CUBE_MAP),re.__version=$.version,_.onUpdate&&_.onUpdate(_)}b.__version=_.version}function Re(b,_,O,G,$,re){const oe=s.convert(O.format,O.colorSpace),K=s.convert(O.type),Q=M(O.internalFormat,oe,K,O.normalized,O.colorSpace),le=i.get(_),be=i.get(O);if(be.__renderTarget=_,!le.__hasExternalTextures){const de=Math.max(1,_.width>>re),ce=Math.max(1,_.height>>re);$===n.TEXTURE_3D||$===n.TEXTURE_2D_ARRAY?t.texImage3D($,re,Q,de,ce,_.depth,0,oe,K,null):t.texImage2D($,re,Q,de,ce,0,oe,K,null)}t.bindFramebuffer(n.FRAMEBUFFER,b),st(_)?o.framebufferTexture2DMultisampleEXT(n.FRAMEBUFFER,G,$,be.__webglTexture,0,ct(_)):($===n.TEXTURE_2D||$>=n.TEXTURE_CUBE_MAP_POSITIVE_X&&$<=n.TEXTURE_CUBE_MAP_NEGATIVE_Z)&&n.framebufferTexture2D(n.FRAMEBUFFER,G,$,be.__webglTexture,re),t.bindFramebuffer(n.FRAMEBUFFER,null)}function Ke(b,_,O){if(n.bindRenderbuffer(n.RENDERBUFFER,b),_.depthBuffer){const G=_.depthTexture,$=G&&G.isDepthTexture?G.type:null,re=A(_.stencilBuffer,$),oe=_.stencilBuffer?n.DEPTH_STENCIL_ATTACHMENT:n.DEPTH_ATTACHMENT;st(_)?o.renderbufferStorageMultisampleEXT(n.RENDERBUFFER,ct(_),re,_.width,_.height):O?n.renderbufferStorageMultisample(n.RENDERBUFFER,ct(_),re,_.width,_.height):n.renderbufferStorage(n.RENDERBUFFER,re,_.width,_.height),n.framebufferRenderbuffer(n.FRAMEBUFFER,oe,n.RENDERBUFFER,b)}else{const G=_.textures;for(let $=0;$<G.length;$++){const re=G[$],oe=s.convert(re.format,re.colorSpace),K=s.convert(re.type),Q=M(re.internalFormat,oe,K,re.normalized,re.colorSpace);st(_)?o.renderbufferStorageMultisampleEXT(n.RENDERBUFFER,ct(_),Q,_.width,_.height):O?n.renderbufferStorageMultisample(n.RENDERBUFFER,ct(_),Q,_.width,_.height):n.renderbufferStorage(n.RENDERBUFFER,Q,_.width,_.height)}}n.bindRenderbuffer(n.RENDERBUFFER,null)}function Be(b,_,O){const G=_.isWebGLCubeRenderTarget===!0;if(t.bindFramebuffer(n.FRAMEBUFFER,b),!(_.depthTexture&&_.depthTexture.isDepthTexture))throw new Error("THREE.WebGLTextures: renderTarget.depthTexture must be an instance of THREE.DepthTexture.");const $=i.get(_.depthTexture);if($.__renderTarget=_,(!$.__webglTexture||_.depthTexture.image.width!==_.width||_.depthTexture.image.height!==_.height)&&(_.depthTexture.image.width=_.width,_.depthTexture.image.height=_.height,_.depthTexture.needsUpdate=!0),G){if($.__webglInit===void 0&&($.__webglInit=!0,_.depthTexture.addEventListener("dispose",R)),$.__webglTexture===void 0){$.__webglTexture=n.createTexture(),t.bindTexture(n.TEXTURE_CUBE_MAP,$.__webglTexture),We(n.TEXTURE_CUBE_MAP,_.depthTexture);const le=s.convert(_.depthTexture.format),be=s.convert(_.depthTexture.type);let de;_.depthTexture.format===Un?de=n.DEPTH_COMPONENT24:_.depthTexture.format===ui&&(de=n.DEPTH24_STENCIL8);for(let ce=0;ce<6;ce++)n.texImage2D(n.TEXTURE_CUBE_MAP_POSITIVE_X+ce,0,de,_.width,_.height,0,le,be,null)}}else Z(_.depthTexture,0);const re=$.__webglTexture,oe=ct(_),K=G?n.TEXTURE_CUBE_MAP_POSITIVE_X+O:n.TEXTURE_2D,Q=_.depthTexture.format===ui?n.DEPTH_STENCIL_ATTACHMENT:n.DEPTH_ATTACHMENT;if(_.depthTexture.format===Un)st(_)?o.framebufferTexture2DMultisampleEXT(n.FRAMEBUFFER,Q,K,re,0,oe):n.framebufferTexture2D(n.FRAMEBUFFER,Q,K,re,0);else if(_.depthTexture.format===ui)st(_)?o.framebufferTexture2DMultisampleEXT(n.FRAMEBUFFER,Q,K,re,0,oe):n.framebufferTexture2D(n.FRAMEBUFFER,Q,K,re,0);else throw new Error("THREE.WebGLTextures: Unknown depthTexture format.")}function Ze(b){const _=i.get(b),O=b.isWebGLCubeRenderTarget===!0;if(_.__boundDepthTexture!==b.depthTexture){const G=b.depthTexture;if(_.__depthDisposeCallback&&_.__depthDisposeCallback(),G){const $=()=>{delete _.__boundDepthTexture,delete _.__depthDisposeCallback,G.removeEventListener("dispose",$)};G.addEventListener("dispose",$),_.__depthDisposeCallback=$}_.__boundDepthTexture=G}if(b.depthTexture&&!_.__autoAllocateDepthBuffer)if(O)for(let G=0;G<6;G++)Be(_.__webglFramebuffer[G],b,G);else{const G=b.texture.mipmaps;G&&G.length>0?Be(_.__webglFramebuffer[0],b,0):Be(_.__webglFramebuffer,b,0)}else if(O){_.__webglDepthbuffer=[];for(let G=0;G<6;G++)if(t.bindFramebuffer(n.FRAMEBUFFER,_.__webglFramebuffer[G]),_.__webglDepthbuffer[G]===void 0)_.__webglDepthbuffer[G]=n.createRenderbuffer(),Ke(_.__webglDepthbuffer[G],b,!1);else{const $=b.stencilBuffer?n.DEPTH_STENCIL_ATTACHMENT:n.DEPTH_ATTACHMENT,re=_.__webglDepthbuffer[G];n.bindRenderbuffer(n.RENDERBUFFER,re),n.framebufferRenderbuffer(n.FRAMEBUFFER,$,n.RENDERBUFFER,re)}}else{const G=b.texture.mipmaps;if(G&&G.length>0?t.bindFramebuffer(n.FRAMEBUFFER,_.__webglFramebuffer[0]):t.bindFramebuffer(n.FRAMEBUFFER,_.__webglFramebuffer),_.__webglDepthbuffer===void 0)_.__webglDepthbuffer=n.createRenderbuffer(),Ke(_.__webglDepthbuffer,b,!1);else{const $=b.stencilBuffer?n.DEPTH_STENCIL_ATTACHMENT:n.DEPTH_ATTACHMENT,re=_.__webglDepthbuffer;n.bindRenderbuffer(n.RENDERBUFFER,re),n.framebufferRenderbuffer(n.FRAMEBUFFER,$,n.RENDERBUFFER,re)}}t.bindFramebuffer(n.FRAMEBUFFER,null)}function Oe(b,_,O){const G=i.get(b);_!==void 0&&Re(G.__webglFramebuffer,b,b.texture,n.COLOR_ATTACHMENT0,n.TEXTURE_2D,0),O!==void 0&&Ze(b)}function fe(b){const _=b.texture,O=i.get(b),G=i.get(_);b.addEventListener("dispose",g);const $=b.textures,re=b.isWebGLCubeRenderTarget===!0,oe=$.length>1;if(oe||(G.__webglTexture===void 0&&(G.__webglTexture=n.createTexture()),G.__version=_.version,a.memory.textures++),re){O.__webglFramebuffer=[];for(let K=0;K<6;K++)if(_.mipmaps&&_.mipmaps.length>0){O.__webglFramebuffer[K]=[];for(let Q=0;Q<_.mipmaps.length;Q++)O.__webglFramebuffer[K][Q]=n.createFramebuffer()}else O.__webglFramebuffer[K]=n.createFramebuffer()}else{if(_.mipmaps&&_.mipmaps.length>0){O.__webglFramebuffer=[];for(let K=0;K<_.mipmaps.length;K++)O.__webglFramebuffer[K]=n.createFramebuffer()}else O.__webglFramebuffer=n.createFramebuffer();if(oe)for(let K=0,Q=$.length;K<Q;K++){const le=i.get($[K]);le.__webglTexture===void 0&&(le.__webglTexture=n.createTexture(),a.memory.textures++)}if(b.samples>0&&st(b)===!1){O.__webglMultisampledFramebuffer=n.createFramebuffer(),O.__webglColorRenderbuffer=[],t.bindFramebuffer(n.FRAMEBUFFER,O.__webglMultisampledFramebuffer);for(let K=0;K<$.length;K++){const Q=$[K];O.__webglColorRenderbuffer[K]=n.createRenderbuffer(),n.bindRenderbuffer(n.RENDERBUFFER,O.__webglColorRenderbuffer[K]);const le=s.convert(Q.format,Q.colorSpace),be=s.convert(Q.type),de=M(Q.internalFormat,le,be,Q.normalized,Q.colorSpace,b.isXRRenderTarget===!0),ce=ct(b);n.renderbufferStorageMultisample(n.RENDERBUFFER,ce,de,b.width,b.height),n.framebufferRenderbuffer(n.FRAMEBUFFER,n.COLOR_ATTACHMENT0+K,n.RENDERBUFFER,O.__webglColorRenderbuffer[K])}n.bindRenderbuffer(n.RENDERBUFFER,null),b.depthBuffer&&(O.__webglDepthRenderbuffer=n.createRenderbuffer(),Ke(O.__webglDepthRenderbuffer,b,!0)),t.bindFramebuffer(n.FRAMEBUFFER,null)}}if(re){t.bindTexture(n.TEXTURE_CUBE_MAP,G.__webglTexture),We(n.TEXTURE_CUBE_MAP,_);for(let K=0;K<6;K++)if(_.mipmaps&&_.mipmaps.length>0)for(let Q=0;Q<_.mipmaps.length;Q++)Re(O.__webglFramebuffer[K][Q],b,_,n.COLOR_ATTACHMENT0,n.TEXTURE_CUBE_MAP_POSITIVE_X+K,Q);else Re(O.__webglFramebuffer[K],b,_,n.COLOR_ATTACHMENT0,n.TEXTURE_CUBE_MAP_POSITIVE_X+K,0);f(_)&&y(n.TEXTURE_CUBE_MAP),t.unbindTexture()}else if(oe){for(let K=0,Q=$.length;K<Q;K++){const le=$[K],be=i.get(le);let de=n.TEXTURE_2D;(b.isWebGL3DRenderTarget||b.isWebGLArrayRenderTarget)&&(de=b.isWebGL3DRenderTarget?n.TEXTURE_3D:n.TEXTURE_2D_ARRAY),t.bindTexture(de,be.__webglTexture),We(de,le),Re(O.__webglFramebuffer,b,le,n.COLOR_ATTACHMENT0+K,de,0),f(le)&&y(de)}t.unbindTexture()}else{let K=n.TEXTURE_2D;if((b.isWebGL3DRenderTarget||b.isWebGLArrayRenderTarget)&&(K=b.isWebGL3DRenderTarget?n.TEXTURE_3D:n.TEXTURE_2D_ARRAY),t.bindTexture(K,G.__webglTexture),We(K,_),_.mipmaps&&_.mipmaps.length>0)for(let Q=0;Q<_.mipmaps.length;Q++)Re(O.__webglFramebuffer[Q],b,_,n.COLOR_ATTACHMENT0,K,Q);else Re(O.__webglFramebuffer,b,_,n.COLOR_ATTACHMENT0,K,0);f(_)&&y(K),t.unbindTexture()}b.depthBuffer&&Ze(b)}function Xe(b){const _=b.textures;for(let O=0,G=_.length;O<G;O++){const $=_[O];if(f($)){const re=w(b),oe=i.get($).__webglTexture;t.bindTexture(re,oe),y(re),t.unbindTexture()}}}const et=[],rt=[];function xt(b){if(b.samples>0){if(st(b)===!1){const _=b.textures,O=b.width,G=b.height;let $=n.COLOR_BUFFER_BIT;const re=b.stencilBuffer?n.DEPTH_STENCIL_ATTACHMENT:n.DEPTH_ATTACHMENT,oe=i.get(b),K=_.length>1;if(K)for(let le=0;le<_.length;le++)t.bindFramebuffer(n.FRAMEBUFFER,oe.__webglMultisampledFramebuffer),n.framebufferRenderbuffer(n.FRAMEBUFFER,n.COLOR_ATTACHMENT0+le,n.RENDERBUFFER,null),t.bindFramebuffer(n.FRAMEBUFFER,oe.__webglFramebuffer),n.framebufferTexture2D(n.DRAW_FRAMEBUFFER,n.COLOR_ATTACHMENT0+le,n.TEXTURE_2D,null,0);t.bindFramebuffer(n.READ_FRAMEBUFFER,oe.__webglMultisampledFramebuffer);const Q=b.texture.mipmaps;Q&&Q.length>0?t.bindFramebuffer(n.DRAW_FRAMEBUFFER,oe.__webglFramebuffer[0]):t.bindFramebuffer(n.DRAW_FRAMEBUFFER,oe.__webglFramebuffer);for(let le=0;le<_.length;le++){if(b.resolveDepthBuffer&&(b.depthBuffer&&($|=n.DEPTH_BUFFER_BIT),b.stencilBuffer&&b.resolveStencilBuffer&&($|=n.STENCIL_BUFFER_BIT)),K){n.framebufferRenderbuffer(n.READ_FRAMEBUFFER,n.COLOR_ATTACHMENT0,n.RENDERBUFFER,oe.__webglColorRenderbuffer[le]);const be=i.get(_[le]).__webglTexture;n.framebufferTexture2D(n.DRAW_FRAMEBUFFER,n.COLOR_ATTACHMENT0,n.TEXTURE_2D,be,0)}n.blitFramebuffer(0,0,O,G,0,0,O,G,$,n.NEAREST),l===!0&&(et.length=0,rt.length=0,et.push(n.COLOR_ATTACHMENT0+le),b.depthBuffer&&b.resolveDepthBuffer===!1&&(et.push(re),rt.push(re),n.invalidateFramebuffer(n.DRAW_FRAMEBUFFER,rt)),n.invalidateFramebuffer(n.READ_FRAMEBUFFER,et))}if(t.bindFramebuffer(n.READ_FRAMEBUFFER,null),t.bindFramebuffer(n.DRAW_FRAMEBUFFER,null),K)for(let le=0;le<_.length;le++){t.bindFramebuffer(n.FRAMEBUFFER,oe.__webglMultisampledFramebuffer),n.framebufferRenderbuffer(n.FRAMEBUFFER,n.COLOR_ATTACHMENT0+le,n.RENDERBUFFER,oe.__webglColorRenderbuffer[le]);const be=i.get(_[le]).__webglTexture;t.bindFramebuffer(n.FRAMEBUFFER,oe.__webglFramebuffer),n.framebufferTexture2D(n.DRAW_FRAMEBUFFER,n.COLOR_ATTACHMENT0+le,n.TEXTURE_2D,be,0)}t.bindFramebuffer(n.DRAW_FRAMEBUFFER,oe.__webglMultisampledFramebuffer)}else if(b.depthBuffer&&b.resolveDepthBuffer===!1&&l){const _=b.stencilBuffer?n.DEPTH_STENCIL_ATTACHMENT:n.DEPTH_ATTACHMENT;n.invalidateFramebuffer(n.DRAW_FRAMEBUFFER,[_])}}}function ct(b){return Math.min(r.maxSamples,b.samples)}function st(b){const _=i.get(b);return b.samples>0&&e.has("WEBGL_multisampled_render_to_texture")===!0&&_.__useRenderToTexture!==!1}function I(b){const _=a.render.frame;u.get(b)!==_&&(u.set(b,_),b.update())}function Bt(b,_){const O=b.colorSpace,G=b.format,$=b.type;return b.isCompressedTexture===!0||b.isVideoTexture===!0||O!==Ns&&O!==qn&&(Ge.getTransfer(O)===Qe?(G!==nn||$!==Yt)&&De("WebGLTextures: sRGB encoded textures have to use RGBAFormat and UnsignedByteType."):$e("WebGLTextures: Unsupported texture color space:",O)),_}function Je(b){return typeof HTMLImageElement<"u"&&b instanceof HTMLImageElement?(c.width=b.naturalWidth||b.width,c.height=b.naturalHeight||b.height):typeof VideoFrame<"u"&&b instanceof VideoFrame?(c.width=b.displayWidth,c.height=b.displayHeight):(c.width=b.width,c.height=b.height),c}this.allocateTextureUnit=Y,this.resetTextureUnits=X,this.getTextureUnits=q,this.setTextureUnits=F,this.setTexture2D=Z,this.setTexture2DArray=ee,this.setTexture3D=se,this.setTextureCube=ie,this.rebindTextures=Oe,this.setupRenderTarget=fe,this.updateRenderTargetMipmap=Xe,this.updateMultisampleRenderTarget=xt,this.setupDepthRenderbuffer=Ze,this.setupFrameBufferTexture=Re,this.useMultisampledRTT=st,this.isReversedDepthBuffer=function(){return t.buffers.depth.getReversed()}}function BS(n,e){function t(i,r=qn){let s;const a=Ge.getTransfer(r);if(i===Yt)return n.UNSIGNED_BYTE;if(i===gl)return n.UNSIGNED_SHORT_4_4_4_4;if(i===xl)return n.UNSIGNED_SHORT_5_5_5_1;if(i===Cf)return n.UNSIGNED_INT_5_9_9_9_REV;if(i===Pf)return n.UNSIGNED_INT_10F_11F_11F_REV;if(i===wf)return n.BYTE;if(i===Rf)return n.SHORT;if(i===Cr)return n.UNSIGNED_SHORT;if(i===_l)return n.INT;if(i===vn)return n.UNSIGNED_INT;if(i===pn)return n.FLOAT;if(i===In)return n.HALF_FLOAT;if(i===Df)return n.ALPHA;if(i===Lf)return n.RGB;if(i===nn)return n.RGBA;if(i===Un)return n.DEPTH_COMPONENT;if(i===ui)return n.DEPTH_STENCIL;if(i===If)return n.RED;if(i===vl)return n.RED_INTEGER;if(i===Mi)return n.RG;if(i===Sl)return n.RG_INTEGER;if(i===Ml)return n.RGBA_INTEGER;if(i===bs||i===Ts||i===As||i===ws)if(a===Qe)if(s=e.get("WEBGL_compressed_texture_s3tc_srgb"),s!==null){if(i===bs)return s.COMPRESSED_SRGB_S3TC_DXT1_EXT;if(i===Ts)return s.COMPRESSED_SRGB_ALPHA_S3TC_DXT1_EXT;if(i===As)return s.COMPRESSED_SRGB_ALPHA_S3TC_DXT3_EXT;if(i===ws)return s.COMPRESSED_SRGB_ALPHA_S3TC_DXT5_EXT}else return null;else if(s=e.get("WEBGL_compressed_texture_s3tc"),s!==null){if(i===bs)return s.COMPRESSED_RGB_S3TC_DXT1_EXT;if(i===Ts)return s.COMPRESSED_RGBA_S3TC_DXT1_EXT;if(i===As)return s.COMPRESSED_RGBA_S3TC_DXT3_EXT;if(i===ws)return s.COMPRESSED_RGBA_S3TC_DXT5_EXT}else return null;if(i===fo||i===ho||i===po||i===mo)if(s=e.get("WEBGL_compressed_texture_pvrtc"),s!==null){if(i===fo)return s.COMPRESSED_RGB_PVRTC_4BPPV1_IMG;if(i===ho)return s.COMPRESSED_RGB_PVRTC_2BPPV1_IMG;if(i===po)return s.COMPRESSED_RGBA_PVRTC_4BPPV1_IMG;if(i===mo)return s.COMPRESSED_RGBA_PVRTC_2BPPV1_IMG}else return null;if(i===_o||i===go||i===xo||i===vo||i===So||i===Is||i===Mo)if(s=e.get("WEBGL_compressed_texture_etc"),s!==null){if(i===_o||i===go)return a===Qe?s.COMPRESSED_SRGB8_ETC2:s.COMPRESSED_RGB8_ETC2;if(i===xo)return a===Qe?s.COMPRESSED_SRGB8_ALPHA8_ETC2_EAC:s.COMPRESSED_RGBA8_ETC2_EAC;if(i===vo)return s.COMPRESSED_R11_EAC;if(i===So)return s.COMPRESSED_SIGNED_R11_EAC;if(i===Is)return s.COMPRESSED_RG11_EAC;if(i===Mo)return s.COMPRESSED_SIGNED_RG11_EAC}else return null;if(i===Eo||i===yo||i===bo||i===To||i===Ao||i===wo||i===Ro||i===Co||i===Po||i===Do||i===Lo||i===Io||i===Uo||i===No)if(s=e.get("WEBGL_compressed_texture_astc"),s!==null){if(i===Eo)return a===Qe?s.COMPRESSED_SRGB8_ALPHA8_ASTC_4x4_KHR:s.COMPRESSED_RGBA_ASTC_4x4_KHR;if(i===yo)return a===Qe?s.COMPRESSED_SRGB8_ALPHA8_ASTC_5x4_KHR:s.COMPRESSED_RGBA_ASTC_5x4_KHR;if(i===bo)return a===Qe?s.COMPRESSED_SRGB8_ALPHA8_ASTC_5x5_KHR:s.COMPRESSED_RGBA_ASTC_5x5_KHR;if(i===To)return a===Qe?s.COMPRESSED_SRGB8_ALPHA8_ASTC_6x5_KHR:s.COMPRESSED_RGBA_ASTC_6x5_KHR;if(i===Ao)return a===Qe?s.COMPRESSED_SRGB8_ALPHA8_ASTC_6x6_KHR:s.COMPRESSED_RGBA_ASTC_6x6_KHR;if(i===wo)return a===Qe?s.COMPRESSED_SRGB8_ALPHA8_ASTC_8x5_KHR:s.COMPRESSED_RGBA_ASTC_8x5_KHR;if(i===Ro)return a===Qe?s.COMPRESSED_SRGB8_ALPHA8_ASTC_8x6_KHR:s.COMPRESSED_RGBA_ASTC_8x6_KHR;if(i===Co)return a===Qe?s.COMPRESSED_SRGB8_ALPHA8_ASTC_8x8_KHR:s.COMPRESSED_RGBA_ASTC_8x8_KHR;if(i===Po)return a===Qe?s.COMPRESSED_SRGB8_ALPHA8_ASTC_10x5_KHR:s.COMPRESSED_RGBA_ASTC_10x5_KHR;if(i===Do)return a===Qe?s.COMPRESSED_SRGB8_ALPHA8_ASTC_10x6_KHR:s.COMPRESSED_RGBA_ASTC_10x6_KHR;if(i===Lo)return a===Qe?s.COMPRESSED_SRGB8_ALPHA8_ASTC_10x8_KHR:s.COMPRESSED_RGBA_ASTC_10x8_KHR;if(i===Io)return a===Qe?s.COMPRESSED_SRGB8_ALPHA8_ASTC_10x10_KHR:s.COMPRESSED_RGBA_ASTC_10x10_KHR;if(i===Uo)return a===Qe?s.COMPRESSED_SRGB8_ALPHA8_ASTC_12x10_KHR:s.COMPRESSED_RGBA_ASTC_12x10_KHR;if(i===No)return a===Qe?s.COMPRESSED_SRGB8_ALPHA8_ASTC_12x12_KHR:s.COMPRESSED_RGBA_ASTC_12x12_KHR}else return null;if(i===Oo||i===Fo||i===Bo)if(s=e.get("EXT_texture_compression_bptc"),s!==null){if(i===Oo)return a===Qe?s.COMPRESSED_SRGB_ALPHA_BPTC_UNORM_EXT:s.COMPRESSED_RGBA_BPTC_UNORM_EXT;if(i===Fo)return s.COMPRESSED_RGB_BPTC_SIGNED_FLOAT_EXT;if(i===Bo)return s.COMPRESSED_RGB_BPTC_UNSIGNED_FLOAT_EXT}else return null;if(i===zo||i===Ho||i===Us||i===Vo)if(s=e.get("EXT_texture_compression_rgtc"),s!==null){if(i===zo)return s.COMPRESSED_RED_RGTC1_EXT;if(i===Ho)return s.COMPRESSED_SIGNED_RED_RGTC1_EXT;if(i===Us)return s.COMPRESSED_RED_GREEN_RGTC2_EXT;if(i===Vo)return s.COMPRESSED_SIGNED_RED_GREEN_RGTC2_EXT}else return null;return i===Pr?n.UNSIGNED_INT_24_8:n[i]!==void 0?n[i]:null}return{convert:t}}const zS=`
void main() {

	gl_Position = vec4( position, 1.0 );

}`,HS=`
uniform sampler2DArray depthColor;
uniform float depthWidth;
uniform float depthHeight;

void main() {

	vec2 coord = vec2( gl_FragCoord.x / depthWidth, gl_FragCoord.y / depthHeight );

	if ( coord.x >= 1.0 ) {

		gl_FragDepth = texture( depthColor, vec3( coord.x - 1.0, coord.y, 1 ) ).r;

	} else {

		gl_FragDepth = texture( depthColor, vec3( coord.x, coord.y, 0 ) ).r;

	}

}`;class VS{constructor(){this.texture=null,this.mesh=null,this.depthNear=0,this.depthFar=0}init(e,t){if(this.texture===null){const i=new Gf(e.texture);(e.depthNear!==t.depthNear||e.depthFar!==t.depthFar)&&(this.depthNear=e.depthNear,this.depthFar=e.depthFar),this.texture=i}}getMesh(e){if(this.texture!==null&&this.mesh===null){const t=e.cameras[0].viewport,i=new Sn({vertexShader:zS,fragmentShader:HS,uniforms:{depthColor:{value:this.texture},depthWidth:{value:t.z},depthHeight:{value:t.w}}});this.mesh=new bt(new $s(20,20),i)}return this.mesh}reset(){this.texture=null,this.mesh=null}getDepthTexture(){return this.texture}}class GS extends Ti{constructor(e,t){super();const i=this;let r=null,s=1,a=null,o="local-floor",l=1,c=null,u=null,h=null,d=null,m=null,x=null;const S=typeof XRWebGLBinding<"u",p=new VS,f={},y=t.getContextAttributes();let w=null,M=null;const A=[],E=[],R=new Ve;let g=null;const T=new qt;T.viewport=new ut;const D=new qt;D.viewport=new ut;const C=[T,D],N=new J_;let X=null,q=null;this.cameraAutoUpdate=!0,this.enabled=!1,this.isPresenting=!1,this.getController=function(W){let ne=A[W];return ne===void 0&&(ne=new Ea,A[W]=ne),ne.getTargetRaySpace()},this.getControllerGrip=function(W){let ne=A[W];return ne===void 0&&(ne=new Ea,A[W]=ne),ne.getGripSpace()},this.getHand=function(W){let ne=A[W];return ne===void 0&&(ne=new Ea,A[W]=ne),ne.getHandSpace()};function F(W){const ne=E.indexOf(W.inputSource);if(ne===-1)return;const te=A[ne];te!==void 0&&(te.update(W.inputSource,W.frame,c||a),te.dispatchEvent({type:W.type,data:W.inputSource}))}function Y(){r.removeEventListener("select",F),r.removeEventListener("selectstart",F),r.removeEventListener("selectend",F),r.removeEventListener("squeeze",F),r.removeEventListener("squeezestart",F),r.removeEventListener("squeezeend",F),r.removeEventListener("end",Y),r.removeEventListener("inputsourceschange",H);for(let W=0;W<A.length;W++){const ne=E[W];ne!==null&&(E[W]=null,A[W].disconnect(ne))}X=null,q=null,p.reset();for(const W in f)delete f[W];e.setRenderTarget(w),m=null,d=null,h=null,r=null,M=null,We.stop(),i.isPresenting=!1,e.setPixelRatio(g),e.setSize(R.width,R.height,!1),i.dispatchEvent({type:"sessionend"})}this.setFramebufferScaleFactor=function(W){s=W,i.isPresenting===!0&&De("WebXRManager: Cannot change framebuffer scale while presenting.")},this.setReferenceSpaceType=function(W){o=W,i.isPresenting===!0&&De("WebXRManager: Cannot change reference space type while presenting.")},this.getReferenceSpace=function(){return c||a},this.setReferenceSpace=function(W){c=W},this.getBaseLayer=function(){return d!==null?d:m},this.getBinding=function(){return h===null&&S&&(h=new XRWebGLBinding(r,t)),h},this.getFrame=function(){return x},this.getSession=function(){return r},this.setSession=async function(W){if(r=W,r!==null){if(w=e.getRenderTarget(),r.addEventListener("select",F),r.addEventListener("selectstart",F),r.addEventListener("selectend",F),r.addEventListener("squeeze",F),r.addEventListener("squeezestart",F),r.addEventListener("squeezeend",F),r.addEventListener("end",Y),r.addEventListener("inputsourceschange",H),y.xrCompatible!==!0&&await t.makeXRCompatible(),g=e.getPixelRatio(),e.getSize(R),S&&"createProjectionLayer"in XRWebGLBinding.prototype){let te=null,Pe=null,Le=null;y.depth&&(Le=y.stencil?t.DEPTH24_STENCIL8:t.DEPTH_COMPONENT24,te=y.stencil?ui:Un,Pe=y.stencil?Pr:vn);const Re={colorFormat:t.RGBA8,depthFormat:Le,scaleFactor:s};h=this.getBinding(),d=h.createProjectionLayer(Re),r.updateRenderState({layers:[d]}),e.setPixelRatio(1),e.setSize(d.textureWidth,d.textureHeight,!1),M=new gn(d.textureWidth,d.textureHeight,{format:nn,type:Yt,depthTexture:new Qi(d.textureWidth,d.textureHeight,Pe,void 0,void 0,void 0,void 0,void 0,void 0,te),stencilBuffer:y.stencil,colorSpace:e.outputColorSpace,samples:y.antialias?4:0,resolveDepthBuffer:d.ignoreDepthValues===!1,resolveStencilBuffer:d.ignoreDepthValues===!1})}else{const te={antialias:y.antialias,alpha:!0,depth:y.depth,stencil:y.stencil,framebufferScaleFactor:s};m=new XRWebGLLayer(r,t,te),r.updateRenderState({baseLayer:m}),e.setPixelRatio(1),e.setSize(m.framebufferWidth,m.framebufferHeight,!1),M=new gn(m.framebufferWidth,m.framebufferHeight,{format:nn,type:Yt,colorSpace:e.outputColorSpace,stencilBuffer:y.stencil,resolveDepthBuffer:m.ignoreDepthValues===!1,resolveStencilBuffer:m.ignoreDepthValues===!1})}M.isXRRenderTarget=!0,this.setFoveation(l),c=null,a=await r.requestReferenceSpace(o),We.setContext(r),We.start(),i.isPresenting=!0,i.dispatchEvent({type:"sessionstart"})}},this.getEnvironmentBlendMode=function(){if(r!==null)return r.environmentBlendMode},this.getDepthTexture=function(){return p.getDepthTexture()};function H(W){for(let ne=0;ne<W.removed.length;ne++){const te=W.removed[ne],Pe=E.indexOf(te);Pe>=0&&(E[Pe]=null,A[Pe].disconnect(te))}for(let ne=0;ne<W.added.length;ne++){const te=W.added[ne];let Pe=E.indexOf(te);if(Pe===-1){for(let Re=0;Re<A.length;Re++)if(Re>=E.length){E.push(te),Pe=Re;break}else if(E[Re]===null){E[Re]=te,Pe=Re;break}if(Pe===-1)break}const Le=A[Pe];Le&&Le.connect(te)}}const Z=new B,ee=new B;function se(W,ne,te){Z.setFromMatrixPosition(ne.matrixWorld),ee.setFromMatrixPosition(te.matrixWorld);const Pe=Z.distanceTo(ee),Le=ne.projectionMatrix.elements,Re=te.projectionMatrix.elements,Ke=Le[14]/(Le[10]-1),Be=Le[14]/(Le[10]+1),Ze=(Le[9]+1)/Le[5],Oe=(Le[9]-1)/Le[5],fe=(Le[8]-1)/Le[0],Xe=(Re[8]+1)/Re[0],et=Ke*fe,rt=Ke*Xe,xt=Pe/(-fe+Xe),ct=xt*-fe;if(ne.matrixWorld.decompose(W.position,W.quaternion,W.scale),W.translateX(ct),W.translateZ(xt),W.matrixWorld.compose(W.position,W.quaternion,W.scale),W.matrixWorldInverse.copy(W.matrixWorld).invert(),Le[10]===-1)W.projectionMatrix.copy(ne.projectionMatrix),W.projectionMatrixInverse.copy(ne.projectionMatrixInverse);else{const st=Ke+xt,I=Be+xt,Bt=et-ct,Je=rt+(Pe-ct),b=Ze*Be/I*st,_=Oe*Be/I*st;W.projectionMatrix.makePerspective(Bt,Je,b,_,st,I),W.projectionMatrixInverse.copy(W.projectionMatrix).invert()}}function ie(W,ne){ne===null?W.matrixWorld.copy(W.matrix):W.matrixWorld.multiplyMatrices(ne.matrixWorld,W.matrix),W.matrixWorldInverse.copy(W.matrixWorld).invert()}this.updateCamera=function(W){if(r===null)return;let ne=W.near,te=W.far;p.texture!==null&&(p.depthNear>0&&(ne=p.depthNear),p.depthFar>0&&(te=p.depthFar)),N.near=D.near=T.near=ne,N.far=D.far=T.far=te,(X!==N.near||q!==N.far)&&(r.updateRenderState({depthNear:N.near,depthFar:N.far}),X=N.near,q=N.far),N.layers.mask=W.layers.mask|6,T.layers.mask=N.layers.mask&-5,D.layers.mask=N.layers.mask&-3;const Pe=W.parent,Le=N.cameras;ie(N,Pe);for(let Re=0;Re<Le.length;Re++)ie(Le[Re],Pe);Le.length===2?se(N,T,D):N.projectionMatrix.copy(T.projectionMatrix),xe(W,N,Pe)};function xe(W,ne,te){te===null?W.matrix.copy(ne.matrixWorld):(W.matrix.copy(te.matrixWorld),W.matrix.invert(),W.matrix.multiply(ne.matrixWorld)),W.matrix.decompose(W.position,W.quaternion,W.scale),W.updateMatrixWorld(!0),W.projectionMatrix.copy(ne.projectionMatrix),W.projectionMatrixInverse.copy(ne.projectionMatrixInverse),W.isPerspectiveCamera&&(W.fov=ko*2*Math.atan(1/W.projectionMatrix.elements[5]),W.zoom=1)}this.getCamera=function(){return N},this.getFoveation=function(){if(!(d===null&&m===null))return l},this.setFoveation=function(W){l=W,d!==null&&(d.fixedFoveation=W),m!==null&&m.fixedFoveation!==void 0&&(m.fixedFoveation=W)},this.hasDepthSensing=function(){return p.texture!==null},this.getDepthSensingMesh=function(){return p.getMesh(N)},this.getCameraTexture=function(W){return f[W]};let He=null;function je(W,ne){if(u=ne.getViewerPose(c||a),x=ne,u!==null){const te=u.views;m!==null&&(e.setRenderTargetFramebuffer(M,m.framebuffer),e.setRenderTarget(M));let Pe=!1;te.length!==N.cameras.length&&(N.cameras.length=0,Pe=!0);for(let Be=0;Be<te.length;Be++){const Ze=te[Be];let Oe=null;if(m!==null)Oe=m.getViewport(Ze);else{const Xe=h.getViewSubImage(d,Ze);Oe=Xe.viewport,Be===0&&(e.setRenderTargetTextures(M,Xe.colorTexture,Xe.depthStencilTexture),e.setRenderTarget(M))}let fe=C[Be];fe===void 0&&(fe=new qt,fe.layers.enable(Be),fe.viewport=new ut,C[Be]=fe),fe.matrix.fromArray(Ze.transform.matrix),fe.matrix.decompose(fe.position,fe.quaternion,fe.scale),fe.projectionMatrix.fromArray(Ze.projectionMatrix),fe.projectionMatrixInverse.copy(fe.projectionMatrix).invert(),fe.viewport.set(Oe.x,Oe.y,Oe.width,Oe.height),Be===0&&(N.matrix.copy(fe.matrix),N.matrix.decompose(N.position,N.quaternion,N.scale)),Pe===!0&&N.cameras.push(fe)}const Le=r.enabledFeatures;if(Le&&Le.includes("depth-sensing")&&r.depthUsage=="gpu-optimized"&&S){h=i.getBinding();const Be=h.getDepthInformation(te[0]);Be&&Be.isValid&&Be.texture&&p.init(Be,r.renderState)}if(Le&&Le.includes("camera-access")&&S){e.state.unbindTexture(),h=i.getBinding();for(let Be=0;Be<te.length;Be++){const Ze=te[Be].camera;if(Ze){let Oe=f[Ze];Oe||(Oe=new Gf,f[Ze]=Oe);const fe=h.getCameraImage(Ze);Oe.sourceTexture=fe}}}}for(let te=0;te<A.length;te++){const Pe=E[te],Le=A[te];Pe!==null&&Le!==void 0&&Le.update(Pe,ne,c||a)}He&&He(W,ne),ne.detectedPlanes&&i.dispatchEvent({type:"planesdetected",data:ne}),x=null}const We=new qf;We.setAnimationLoop(je),this.setAnimationLoop=function(W){He=W},this.dispose=function(){}}}const kS=new ht,jf=new Ie;jf.set(-1,0,0,0,1,0,0,0,1);function WS(n,e){function t(p,f){p.matrixAutoUpdate===!0&&p.updateMatrix(),f.value.copy(p.matrix)}function i(p,f){f.color.getRGB(p.fogColor.value,kf(n)),f.isFog?(p.fogNear.value=f.near,p.fogFar.value=f.far):f.isFogExp2&&(p.fogDensity.value=f.density)}function r(p,f,y,w,M){f.isNodeMaterial?f.uniformsNeedUpdate=!1:f.isMeshBasicMaterial?s(p,f):f.isMeshLambertMaterial?(s(p,f),f.envMap&&(p.envMapIntensity.value=f.envMapIntensity)):f.isMeshToonMaterial?(s(p,f),h(p,f)):f.isMeshPhongMaterial?(s(p,f),u(p,f),f.envMap&&(p.envMapIntensity.value=f.envMapIntensity)):f.isMeshStandardMaterial?(s(p,f),d(p,f),f.isMeshPhysicalMaterial&&m(p,f,M)):f.isMeshMatcapMaterial?(s(p,f),x(p,f)):f.isMeshDepthMaterial?s(p,f):f.isMeshDistanceMaterial?(s(p,f),S(p,f)):f.isMeshNormalMaterial?s(p,f):f.isLineBasicMaterial?(a(p,f),f.isLineDashedMaterial&&o(p,f)):f.isPointsMaterial?l(p,f,y,w):f.isSpriteMaterial?c(p,f):f.isShadowMaterial?(p.color.value.copy(f.color),p.opacity.value=f.opacity):f.isShaderMaterial&&(f.uniformsNeedUpdate=!1)}function s(p,f){p.opacity.value=f.opacity,f.color&&p.diffuse.value.copy(f.color),f.emissive&&p.emissive.value.copy(f.emissive).multiplyScalar(f.emissiveIntensity),f.map&&(p.map.value=f.map,t(f.map,p.mapTransform)),f.alphaMap&&(p.alphaMap.value=f.alphaMap,t(f.alphaMap,p.alphaMapTransform)),f.bumpMap&&(p.bumpMap.value=f.bumpMap,t(f.bumpMap,p.bumpMapTransform),p.bumpScale.value=f.bumpScale,f.side===Vt&&(p.bumpScale.value*=-1)),f.normalMap&&(p.normalMap.value=f.normalMap,t(f.normalMap,p.normalMapTransform),p.normalScale.value.copy(f.normalScale),f.side===Vt&&p.normalScale.value.negate()),f.displacementMap&&(p.displacementMap.value=f.displacementMap,t(f.displacementMap,p.displacementMapTransform),p.displacementScale.value=f.displacementScale,p.displacementBias.value=f.displacementBias),f.emissiveMap&&(p.emissiveMap.value=f.emissiveMap,t(f.emissiveMap,p.emissiveMapTransform)),f.specularMap&&(p.specularMap.value=f.specularMap,t(f.specularMap,p.specularMapTransform)),f.alphaTest>0&&(p.alphaTest.value=f.alphaTest);const y=e.get(f),w=y.envMap,M=y.envMapRotation;w&&(p.envMap.value=w,p.envMapRotation.value.setFromMatrix4(kS.makeRotationFromEuler(M)).transpose(),w.isCubeTexture&&w.isRenderTargetTexture===!1&&p.envMapRotation.value.premultiply(jf),p.reflectivity.value=f.reflectivity,p.ior.value=f.ior,p.refractionRatio.value=f.refractionRatio),f.lightMap&&(p.lightMap.value=f.lightMap,p.lightMapIntensity.value=f.lightMapIntensity,t(f.lightMap,p.lightMapTransform)),f.aoMap&&(p.aoMap.value=f.aoMap,p.aoMapIntensity.value=f.aoMapIntensity,t(f.aoMap,p.aoMapTransform))}function a(p,f){p.diffuse.value.copy(f.color),p.opacity.value=f.opacity,f.map&&(p.map.value=f.map,t(f.map,p.mapTransform))}function o(p,f){p.dashSize.value=f.dashSize,p.totalSize.value=f.dashSize+f.gapSize,p.scale.value=f.scale}function l(p,f,y,w){p.diffuse.value.copy(f.color),p.opacity.value=f.opacity,p.size.value=f.size*y,p.scale.value=w*.5,f.map&&(p.map.value=f.map,t(f.map,p.uvTransform)),f.alphaMap&&(p.alphaMap.value=f.alphaMap,t(f.alphaMap,p.alphaMapTransform)),f.alphaTest>0&&(p.alphaTest.value=f.alphaTest)}function c(p,f){p.diffuse.value.copy(f.color),p.opacity.value=f.opacity,p.rotation.value=f.rotation,f.map&&(p.map.value=f.map,t(f.map,p.mapTransform)),f.alphaMap&&(p.alphaMap.value=f.alphaMap,t(f.alphaMap,p.alphaMapTransform)),f.alphaTest>0&&(p.alphaTest.value=f.alphaTest)}function u(p,f){p.specular.value.copy(f.specular),p.shininess.value=Math.max(f.shininess,1e-4)}function h(p,f){f.gradientMap&&(p.gradientMap.value=f.gradientMap)}function d(p,f){p.metalness.value=f.metalness,f.metalnessMap&&(p.metalnessMap.value=f.metalnessMap,t(f.metalnessMap,p.metalnessMapTransform)),p.roughness.value=f.roughness,f.roughnessMap&&(p.roughnessMap.value=f.roughnessMap,t(f.roughnessMap,p.roughnessMapTransform)),f.envMap&&(p.envMapIntensity.value=f.envMapIntensity)}function m(p,f,y){p.ior.value=f.ior,f.sheen>0&&(p.sheenColor.value.copy(f.sheenColor).multiplyScalar(f.sheen),p.sheenRoughness.value=f.sheenRoughness,f.sheenColorMap&&(p.sheenColorMap.value=f.sheenColorMap,t(f.sheenColorMap,p.sheenColorMapTransform)),f.sheenRoughnessMap&&(p.sheenRoughnessMap.value=f.sheenRoughnessMap,t(f.sheenRoughnessMap,p.sheenRoughnessMapTransform))),f.clearcoat>0&&(p.clearcoat.value=f.clearcoat,p.clearcoatRoughness.value=f.clearcoatRoughness,f.clearcoatMap&&(p.clearcoatMap.value=f.clearcoatMap,t(f.clearcoatMap,p.clearcoatMapTransform)),f.clearcoatRoughnessMap&&(p.clearcoatRoughnessMap.value=f.clearcoatRoughnessMap,t(f.clearcoatRoughnessMap,p.clearcoatRoughnessMapTransform)),f.clearcoatNormalMap&&(p.clearcoatNormalMap.value=f.clearcoatNormalMap,t(f.clearcoatNormalMap,p.clearcoatNormalMapTransform),p.clearcoatNormalScale.value.copy(f.clearcoatNormalScale),f.side===Vt&&p.clearcoatNormalScale.value.negate())),f.dispersion>0&&(p.dispersion.value=f.dispersion),f.iridescence>0&&(p.iridescence.value=f.iridescence,p.iridescenceIOR.value=f.iridescenceIOR,p.iridescenceThicknessMinimum.value=f.iridescenceThicknessRange[0],p.iridescenceThicknessMaximum.value=f.iridescenceThicknessRange[1],f.iridescenceMap&&(p.iridescenceMap.value=f.iridescenceMap,t(f.iridescenceMap,p.iridescenceMapTransform)),f.iridescenceThicknessMap&&(p.iridescenceThicknessMap.value=f.iridescenceThicknessMap,t(f.iridescenceThicknessMap,p.iridescenceThicknessMapTransform))),f.transmission>0&&(p.transmission.value=f.transmission,p.transmissionSamplerMap.value=y.texture,p.transmissionSamplerSize.value.set(y.width,y.height),f.transmissionMap&&(p.transmissionMap.value=f.transmissionMap,t(f.transmissionMap,p.transmissionMapTransform)),p.thickness.value=f.thickness,f.thicknessMap&&(p.thicknessMap.value=f.thicknessMap,t(f.thicknessMap,p.thicknessMapTransform)),p.attenuationDistance.value=f.attenuationDistance,p.attenuationColor.value.copy(f.attenuationColor)),f.anisotropy>0&&(p.anisotropyVector.value.set(f.anisotropy*Math.cos(f.anisotropyRotation),f.anisotropy*Math.sin(f.anisotropyRotation)),f.anisotropyMap&&(p.anisotropyMap.value=f.anisotropyMap,t(f.anisotropyMap,p.anisotropyMapTransform))),p.specularIntensity.value=f.specularIntensity,p.specularColor.value.copy(f.specularColor),f.specularColorMap&&(p.specularColorMap.value=f.specularColorMap,t(f.specularColorMap,p.specularColorMapTransform)),f.specularIntensityMap&&(p.specularIntensityMap.value=f.specularIntensityMap,t(f.specularIntensityMap,p.specularIntensityMapTransform))}function x(p,f){f.matcap&&(p.matcap.value=f.matcap)}function S(p,f){const y=e.get(f).light;p.referencePosition.value.setFromMatrixPosition(y.matrixWorld),p.nearDistance.value=y.shadow.camera.near,p.farDistance.value=y.shadow.camera.far}return{refreshFogUniforms:i,refreshMaterialUniforms:r}}function XS(n,e,t,i){let r={},s={},a=[];const o=n.getParameter(n.MAX_UNIFORM_BUFFER_BINDINGS);function l(M,A){const E=A.program;i.uniformBlockBinding(M,E)}function c(M,A){let E=r[M.id];E===void 0&&(p(M),E=u(M),r[M.id]=E,M.addEventListener("dispose",y));const R=A.program;i.updateUBOMapping(M,R);const g=e.render.frame;s[M.id]!==g&&(d(M),s[M.id]=g)}function u(M){const A=h();M.__bindingPointIndex=A;const E=n.createBuffer(),R=M.__size,g=M.usage;return n.bindBuffer(n.UNIFORM_BUFFER,E),n.bufferData(n.UNIFORM_BUFFER,R,g),n.bindBuffer(n.UNIFORM_BUFFER,null),n.bindBufferBase(n.UNIFORM_BUFFER,A,E),E}function h(){for(let M=0;M<o;M++)if(a.indexOf(M)===-1)return a.push(M),M;return $e("WebGLRenderer: Maximum number of simultaneously usable uniforms groups reached."),0}function d(M){const A=r[M.id],E=M.uniforms,R=M.__cache;n.bindBuffer(n.UNIFORM_BUFFER,A);for(let g=0,T=E.length;g<T;g++){const D=E[g];if(Array.isArray(D))for(let C=0,N=D.length;C<N;C++)m(D[C],g,C,R);else m(D,g,0,R)}n.bindBuffer(n.UNIFORM_BUFFER,null)}function m(M,A,E,R){if(S(M,A,E,R)===!0){const g=M.__offset,T=M.value;if(Array.isArray(T)){let D=0;for(let C=0;C<T.length;C++){const N=T[C],X=f(N);x(N,M.__data,D),typeof N!="number"&&typeof N!="boolean"&&!N.isMatrix3&&!ArrayBuffer.isView(N)&&(D+=X.storage/Float32Array.BYTES_PER_ELEMENT)}}else x(T,M.__data,0);n.bufferSubData(n.UNIFORM_BUFFER,g,M.__data)}}function x(M,A,E){typeof M=="number"||typeof M=="boolean"?A[0]=M:M.isMatrix3?(A[0]=M.elements[0],A[1]=M.elements[1],A[2]=M.elements[2],A[3]=0,A[4]=M.elements[3],A[5]=M.elements[4],A[6]=M.elements[5],A[7]=0,A[8]=M.elements[6],A[9]=M.elements[7],A[10]=M.elements[8],A[11]=0):ArrayBuffer.isView(M)?A.set(new M.constructor(M.buffer,M.byteOffset,A.length)):M.toArray(A,E)}function S(M,A,E,R){const g=M.value,T=A+"_"+E;if(R[T]===void 0)return typeof g=="number"||typeof g=="boolean"?R[T]=g:ArrayBuffer.isView(g)?R[T]=g.slice():R[T]=g.clone(),!0;{const D=R[T];if(typeof g=="number"||typeof g=="boolean"){if(D!==g)return R[T]=g,!0}else{if(ArrayBuffer.isView(g))return!0;if(D.equals(g)===!1)return D.copy(g),!0}}return!1}function p(M){const A=M.uniforms;let E=0;const R=16;for(let T=0,D=A.length;T<D;T++){const C=Array.isArray(A[T])?A[T]:[A[T]];for(let N=0,X=C.length;N<X;N++){const q=C[N],F=Array.isArray(q.value)?q.value:[q.value];for(let Y=0,H=F.length;Y<H;Y++){const Z=F[Y],ee=f(Z),se=E%R,ie=se%ee.boundary,xe=se+ie;E+=ie,xe!==0&&R-xe<ee.storage&&(E+=R-xe),q.__data=new Float32Array(ee.storage/Float32Array.BYTES_PER_ELEMENT),q.__offset=E,E+=ee.storage}}}const g=E%R;return g>0&&(E+=R-g),M.__size=E,M.__cache={},this}function f(M){const A={boundary:0,storage:0};return typeof M=="number"||typeof M=="boolean"?(A.boundary=4,A.storage=4):M.isVector2?(A.boundary=8,A.storage=8):M.isVector3||M.isColor?(A.boundary=16,A.storage=12):M.isVector4?(A.boundary=16,A.storage=16):M.isMatrix3?(A.boundary=48,A.storage=48):M.isMatrix4?(A.boundary=64,A.storage=64):M.isTexture?De("WebGLRenderer: Texture samplers can not be part of an uniforms group."):ArrayBuffer.isView(M)?(A.boundary=16,A.storage=M.byteLength):De("WebGLRenderer: Unsupported uniform value type.",M),A}function y(M){const A=M.target;A.removeEventListener("dispose",y);const E=a.indexOf(A.__bindingPointIndex);a.splice(E,1),n.deleteBuffer(r[A.id]),delete r[A.id],delete s[A.id]}function w(){for(const M in r)n.deleteBuffer(r[M]);a=[],r={},s={}}return{bind:l,update:c,dispose:w}}const qS=new Uint16Array([12469,15057,12620,14925,13266,14620,13807,14376,14323,13990,14545,13625,14713,13328,14840,12882,14931,12528,14996,12233,15039,11829,15066,11525,15080,11295,15085,10976,15082,10705,15073,10495,13880,14564,13898,14542,13977,14430,14158,14124,14393,13732,14556,13410,14702,12996,14814,12596,14891,12291,14937,11834,14957,11489,14958,11194,14943,10803,14921,10506,14893,10278,14858,9960,14484,14039,14487,14025,14499,13941,14524,13740,14574,13468,14654,13106,14743,12678,14818,12344,14867,11893,14889,11509,14893,11180,14881,10751,14852,10428,14812,10128,14765,9754,14712,9466,14764,13480,14764,13475,14766,13440,14766,13347,14769,13070,14786,12713,14816,12387,14844,11957,14860,11549,14868,11215,14855,10751,14825,10403,14782,10044,14729,9651,14666,9352,14599,9029,14967,12835,14966,12831,14963,12804,14954,12723,14936,12564,14917,12347,14900,11958,14886,11569,14878,11247,14859,10765,14828,10401,14784,10011,14727,9600,14660,9289,14586,8893,14508,8533,15111,12234,15110,12234,15104,12216,15092,12156,15067,12010,15028,11776,14981,11500,14942,11205,14902,10752,14861,10393,14812,9991,14752,9570,14682,9252,14603,8808,14519,8445,14431,8145,15209,11449,15208,11451,15202,11451,15190,11438,15163,11384,15117,11274,15055,10979,14994,10648,14932,10343,14871,9936,14803,9532,14729,9218,14645,8742,14556,8381,14461,8020,14365,7603,15273,10603,15272,10607,15267,10619,15256,10631,15231,10614,15182,10535,15118,10389,15042,10167,14963,9787,14883,9447,14800,9115,14710,8665,14615,8318,14514,7911,14411,7507,14279,7198,15314,9675,15313,9683,15309,9712,15298,9759,15277,9797,15229,9773,15166,9668,15084,9487,14995,9274,14898,8910,14800,8539,14697,8234,14590,7790,14479,7409,14367,7067,14178,6621,15337,8619,15337,8631,15333,8677,15325,8769,15305,8871,15264,8940,15202,8909,15119,8775,15022,8565,14916,8328,14804,8009,14688,7614,14569,7287,14448,6888,14321,6483,14088,6171,15350,7402,15350,7419,15347,7480,15340,7613,15322,7804,15287,7973,15229,8057,15148,8012,15046,7846,14933,7611,14810,7357,14682,7069,14552,6656,14421,6316,14251,5948,14007,5528,15356,5942,15356,5977,15353,6119,15348,6294,15332,6551,15302,6824,15249,7044,15171,7122,15070,7050,14949,6861,14818,6611,14679,6349,14538,6067,14398,5651,14189,5311,13935,4958,15359,4123,15359,4153,15356,4296,15353,4646,15338,5160,15311,5508,15263,5829,15188,6042,15088,6094,14966,6001,14826,5796,14678,5543,14527,5287,14377,4985,14133,4586,13869,4257,15360,1563,15360,1642,15358,2076,15354,2636,15341,3350,15317,4019,15273,4429,15203,4732,15105,4911,14981,4932,14836,4818,14679,4621,14517,4386,14359,4156,14083,3795,13808,3437,15360,122,15360,137,15358,285,15355,636,15344,1274,15322,2177,15281,2765,15215,3223,15120,3451,14995,3569,14846,3567,14681,3466,14511,3305,14344,3121,14037,2800,13753,2467,15360,0,15360,1,15359,21,15355,89,15346,253,15325,479,15287,796,15225,1148,15133,1492,15008,1749,14856,1882,14685,1886,14506,1783,14324,1608,13996,1398,13702,1183]);let fn=null;function YS(){return fn===null&&(fn=new I_(qS,16,16,Mi,In),fn.name="DFG_LUT",fn.minFilter=Dt,fn.magFilter=Dt,fn.wrapS=Cn,fn.wrapT=Cn,fn.generateMipmaps=!1,fn.needsUpdate=!0),fn}class $S{constructor(e={}){const{canvas:t=c_(),context:i=null,depth:r=!0,stencil:s=!1,alpha:a=!1,antialias:o=!1,premultipliedAlpha:l=!0,preserveDrawingBuffer:c=!1,powerPreference:u="default",failIfMajorPerformanceCaveat:h=!1,reversedDepthBuffer:d=!1,outputBufferType:m=Yt}=e;this.isWebGLRenderer=!0;let x;if(i!==null){if(typeof WebGLRenderingContext<"u"&&i instanceof WebGLRenderingContext)throw new Error("THREE.WebGLRenderer: WebGL 1 is not supported since r163.");x=i.getContextAttributes().alpha}else x=a;const S=m,p=new Set([Ml,Sl,vl]),f=new Set([Yt,vn,Cr,Pr,gl,xl]),y=new Uint32Array(4),w=new Int32Array(4),M=new B;let A=null,E=null;const R=[],g=[];let T=null;this.domElement=t,this.debug={checkShaderErrors:!0,onShaderError:null},this.autoClear=!0,this.autoClearColor=!0,this.autoClearDepth=!0,this.autoClearStencil=!0,this.sortObjects=!0,this.clippingPlanes=[],this.localClippingEnabled=!1,this.toneMapping=_n,this.toneMappingExposure=1,this.transmissionResolutionScale=1;const D=this;let C=!1,N=null,X=null,q=null,F=null;this._outputColorSpace=Xt;let Y=0,H=0,Z=null,ee=-1,se=null;const ie=new ut,xe=new ut;let He=null;const je=new qe(0);let We=0,W=t.width,ne=t.height,te=1,Pe=null,Le=null;const Re=new ut(0,0,W,ne),Ke=new ut(0,0,W,ne);let Be=!1;const Ze=new Al;let Oe=!1,fe=!1;const Xe=new ht,et=new B,rt=new ut,xt={background:null,fog:null,environment:null,overrideMaterial:null,isScene:!0};let ct=!1;function st(){return Z===null?te:1}let I=i;function Bt(v,U){return t.getContext(v,U)}try{const v={alpha:!0,depth:r,stencil:s,antialias:o,premultipliedAlpha:l,preserveDrawingBuffer:c,powerPreference:u,failIfMajorPerformanceCaveat:h};if("setAttribute"in t&&t.setAttribute("data-engine",`three.js r${ml}`),t.addEventListener("webglcontextlost",ft,!1),t.addEventListener("webglcontextrestored",at,!1),t.addEventListener("webglcontextcreationerror",on,!1),I===null){const U="webgl2";if(I=Bt(U,v),I===null)throw Bt(U)?new Error("THREE.WebGLRenderer: Error creating WebGL context with your selected attributes."):new Error("THREE.WebGLRenderer: Error creating WebGL context.")}}catch(v){throw $e("WebGLRenderer: "+v.message),v}let Je,b,_,O,G,$,re,oe,K,Q,le,be,de,ce,we,Ce,Ue,L,ae,J,ue,ge,j;function ye(){Je=new Yx(I),Je.init(),ue=new BS(I,Je),b=new zx(I,Je,e,ue),_=new OS(I,Je),b.reversedDepthBuffer&&d&&_.buffers.depth.setReversed(!0),X=I.createFramebuffer(),q=I.createFramebuffer(),F=I.createFramebuffer(),O=new Zx(I),G=new ES,$=new FS(I,Je,_,G,b,ue,O),re=new qx(D),oe=new eg(I),ge=new Fx(I,oe),K=new $x(I,oe,O,ge),Q=new Qx(I,K,oe,ge,O),L=new Jx(I,b,$),we=new Hx(G),le=new MS(D,re,Je,b,ge,we),be=new WS(D,G),de=new bS,ce=new PS(Je),Ue=new Ox(D,re,_,Q,x,l),Ce=new NS(D,Q,b),j=new XS(I,O,b,_),ae=new Bx(I,Je,O),J=new Kx(I,Je,O),O.programs=le.programs,D.capabilities=b,D.extensions=Je,D.properties=G,D.renderLists=de,D.shadowMap=Ce,D.state=_,D.info=O}ye(),S!==Yt&&(T=new ev(S,t.width,t.height,o,r,s));const Me=new GS(D,I);this.xr=Me,this.getContext=function(){return I},this.getContextAttributes=function(){return I.getContextAttributes()},this.forceContextLoss=function(){const v=Je.get("WEBGL_lose_context");v&&v.loseContext()},this.forceContextRestore=function(){const v=Je.get("WEBGL_lose_context");v&&v.restoreContext()},this.getPixelRatio=function(){return te},this.setPixelRatio=function(v){v!==void 0&&(te=v,this.setSize(W,ne,!1))},this.getSize=function(v){return v.set(W,ne)},this.setSize=function(v,U,k=!0){if(Me.isPresenting){De("WebGLRenderer: Can't change size while VR device is presenting.");return}W=v,ne=U,t.width=Math.floor(v*te),t.height=Math.floor(U*te),k===!0&&(t.style.width=v+"px",t.style.height=U+"px"),T!==null&&T.setSize(t.width,t.height),this.setViewport(0,0,v,U)},this.getDrawingBufferSize=function(v){return v.set(W*te,ne*te).floor()},this.setDrawingBufferSize=function(v,U,k){W=v,ne=U,te=k,t.width=Math.floor(v*k),t.height=Math.floor(U*k),this.setViewport(0,0,v,U)},this.setEffects=function(v){if(S===Yt){$e("WebGLRenderer: setEffects() requires outputBufferType set to HalfFloatType or FloatType.");return}if(v){for(let U=0;U<v.length;U++)if(v[U].isOutputPass===!0){De("WebGLRenderer: OutputPass is not needed in setEffects(). Tone mapping and color space conversion are applied automatically.");break}}T.setEffects(v||[])},this.getCurrentViewport=function(v){return v.copy(ie)},this.getViewport=function(v){return v.copy(Re)},this.setViewport=function(v,U,k,z){v.isVector4?Re.set(v.x,v.y,v.z,v.w):Re.set(v,U,k,z),_.viewport(ie.copy(Re).multiplyScalar(te).round())},this.getScissor=function(v){return v.copy(Ke)},this.setScissor=function(v,U,k,z){v.isVector4?Ke.set(v.x,v.y,v.z,v.w):Ke.set(v,U,k,z),_.scissor(xe.copy(Ke).multiplyScalar(te).round())},this.getScissorTest=function(){return Be},this.setScissorTest=function(v){_.setScissorTest(Be=v)},this.setOpaqueSort=function(v){Pe=v},this.setTransparentSort=function(v){Le=v},this.getClearColor=function(v){return v.copy(Ue.getClearColor())},this.setClearColor=function(){Ue.setClearColor(...arguments)},this.getClearAlpha=function(){return Ue.getClearAlpha()},this.setClearAlpha=function(){Ue.setClearAlpha(...arguments)},this.clear=function(v=!0,U=!0,k=!0){let z=0;if(v){let V=!1;if(Z!==null){const _e=Z.texture.format;V=p.has(_e)}if(V){const _e=Z.texture.type,Se=f.has(_e),me=Ue.getClearColor(),Ee=Ue.getClearAlpha(),Te=me.r,Ne=me.g,ze=me.b;Se?(y[0]=Te,y[1]=Ne,y[2]=ze,y[3]=Ee,I.clearBufferuiv(I.COLOR,0,y)):(w[0]=Te,w[1]=Ne,w[2]=ze,w[3]=Ee,I.clearBufferiv(I.COLOR,0,w))}else z|=I.COLOR_BUFFER_BIT}U&&(z|=I.DEPTH_BUFFER_BIT,this.state.buffers.depth.setMask(!0)),k&&(z|=I.STENCIL_BUFFER_BIT,this.state.buffers.stencil.setMask(4294967295)),z!==0&&I.clear(z)},this.clearColor=function(){this.clear(!0,!1,!1)},this.clearDepth=function(){this.clear(!1,!0,!1)},this.clearStencil=function(){this.clear(!1,!1,!0)},this.setNodesHandler=function(v){v.setRenderer(this),N=v},this.dispose=function(){t.removeEventListener("webglcontextlost",ft,!1),t.removeEventListener("webglcontextrestored",at,!1),t.removeEventListener("webglcontextcreationerror",on,!1),Ue.dispose(),de.dispose(),ce.dispose(),G.dispose(),re.dispose(),Q.dispose(),ge.dispose(),j.dispose(),le.dispose(),Me.dispose(),Me.removeEventListener("sessionstart",ac),Me.removeEventListener("sessionend",oc),jn.stop()};function ft(v){v.preventDefault(),Vc("WebGLRenderer: Context Lost."),C=!0}function at(){Vc("WebGLRenderer: Context Restored."),C=!1;const v=O.autoReset,U=Ce.enabled,k=Ce.autoUpdate,z=Ce.needsUpdate,V=Ce.type;ye(),O.autoReset=v,Ce.enabled=U,Ce.autoUpdate=k,Ce.needsUpdate=z,Ce.type=V}function on(v){$e("WebGLRenderer: A WebGL context could not be created. Reason: ",v.statusMessage)}function ln(v){const U=v.target;U.removeEventListener("dispose",ln),hh(U)}function hh(v){ph(v),G.remove(v)}function ph(v){const U=G.get(v).programs;U!==void 0&&(U.forEach(function(k){le.releaseProgram(k)}),v.isShaderMaterial&&le.releaseShaderCache(v))}this.renderBufferDirect=function(v,U,k,z,V,_e){U===null&&(U=xt);const Se=V.isMesh&&V.matrixWorld.determinantAffine()<0,me=gh(v,U,k,z,V);_.setMaterial(z,Se);let Ee=k.index,Te=1;if(z.wireframe===!0){if(Ee=K.getWireframeAttribute(k),Ee===void 0)return;Te=2}const Ne=k.drawRange,ze=k.attributes.position;let Ae=Ne.start*Te,tt=(Ne.start+Ne.count)*Te;_e!==null&&(Ae=Math.max(Ae,_e.start*Te),tt=Math.min(tt,(_e.start+_e.count)*Te)),Ee!==null?(Ae=Math.max(Ae,0),tt=Math.min(tt,Ee.count)):ze!=null&&(Ae=Math.max(Ae,0),tt=Math.min(tt,ze.count));const pt=tt-Ae;if(pt<0||pt===1/0)return;ge.setup(V,z,me,k,Ee);let dt,nt=ae;if(Ee!==null&&(dt=oe.get(Ee),nt=J,nt.setIndex(dt)),V.isMesh)z.wireframe===!0?(_.setLineWidth(z.wireframeLinewidth*st()),nt.setMode(I.LINES)):nt.setMode(I.TRIANGLES);else if(V.isLine){let wt=z.linewidth;wt===void 0&&(wt=1),_.setLineWidth(wt*st()),V.isLineSegments?nt.setMode(I.LINES):V.isLineLoop?nt.setMode(I.LINE_LOOP):nt.setMode(I.LINE_STRIP)}else V.isPoints?nt.setMode(I.POINTS):V.isSprite&&nt.setMode(I.TRIANGLES);if(V.isBatchedMesh)if(Je.get("WEBGL_multi_draw"))nt.renderMultiDraw(V._multiDrawStarts,V._multiDrawCounts,V._multiDrawCount);else{const wt=V._multiDrawStarts,ve=V._multiDrawCounts,Gt=V._multiDrawCount,Ye=Ee?oe.get(Ee).bytesPerElement:1,$t=G.get(z).currentProgram.getUniforms();for(let cn=0;cn<Gt;cn++)$t.setValue(I,"_gl_DrawID",cn),nt.render(wt[cn]/Ye,ve[cn])}else if(V.isInstancedMesh)nt.renderInstances(Ae,pt,V.count);else if(k.isInstancedBufferGeometry){const wt=k._maxInstanceCount!==void 0?k._maxInstanceCount:1/0,ve=Math.min(k.instanceCount,wt);nt.renderInstances(Ae,pt,ve)}else nt.render(Ae,pt)};function sc(v,U,k){v.transparent===!0&&v.side===Rn&&v.forceSinglePass===!1?(v.side=Vt,v.needsUpdate=!0,Wr(v,U,k),v.side=$n,v.needsUpdate=!0,Wr(v,U,k),v.side=Rn):Wr(v,U,k)}this.compile=function(v,U,k=null){k===null&&(k=v),E=ce.get(k),E.init(U),g.push(E),k.traverseVisible(function(V){V.isLight&&V.layers.test(U.layers)&&(E.pushLight(V),V.castShadow&&E.pushShadow(V))}),v!==k&&v.traverseVisible(function(V){V.isLight&&V.layers.test(U.layers)&&(E.pushLight(V),V.castShadow&&E.pushShadow(V))}),E.setupLights();const z=new Set;return v.traverse(function(V){if(!(V.isMesh||V.isPoints||V.isLine||V.isSprite))return;const _e=V.material;if(_e)if(Array.isArray(_e))for(let Se=0;Se<_e.length;Se++){const me=_e[Se];sc(me,k,V),z.add(me)}else sc(_e,k,V),z.add(_e)}),E=g.pop(),z},this.compileAsync=function(v,U,k=null){const z=this.compile(v,U,k);return new Promise(V=>{function _e(){if(z.forEach(function(Se){G.get(Se).currentProgram.isReady()&&z.delete(Se)}),z.size===0){V(v);return}setTimeout(_e,10)}Je.get("KHR_parallel_shader_compile")!==null?_e():setTimeout(_e,10)})};let ra=null;function mh(v){ra&&ra(v)}function ac(){jn.stop()}function oc(){jn.start()}const jn=new qf;jn.setAnimationLoop(mh),typeof self<"u"&&jn.setContext(self),this.setAnimationLoop=function(v){ra=v,Me.setAnimationLoop(v),v===null?jn.stop():jn.start()},Me.addEventListener("sessionstart",ac),Me.addEventListener("sessionend",oc),this.render=function(v,U){if(U!==void 0&&U.isCamera!==!0){$e("WebGLRenderer.render: camera is not an instance of THREE.Camera.");return}if(C===!0)return;N!==null&&N.renderStart(v,U);const k=Me.enabled===!0&&Me.isPresenting===!0,z=T!==null&&(Z===null||k)&&T.begin(D,Z);if(v.matrixWorldAutoUpdate===!0&&v.updateMatrixWorld(),U.parent===null&&U.matrixWorldAutoUpdate===!0&&U.updateMatrixWorld(),Me.enabled===!0&&Me.isPresenting===!0&&(T===null||T.isCompositing()===!1)&&(Me.cameraAutoUpdate===!0&&Me.updateCamera(U),U=Me.getCamera()),v.isScene===!0&&v.onBeforeRender(D,v,U,Z),E=ce.get(v,g.length),E.init(U),E.state.textureUnits=$.getTextureUnits(),g.push(E),Xe.multiplyMatrices(U.projectionMatrix,U.matrixWorldInverse),Ze.setFromProjectionMatrix(Xe,mn,U.reversedDepth),fe=this.localClippingEnabled,Oe=we.init(this.clippingPlanes,fe),A=de.get(v,R.length),A.init(),R.push(A),Me.enabled===!0&&Me.isPresenting===!0){const Se=D.xr.getDepthSensingMesh();Se!==null&&sa(Se,U,-1/0,D.sortObjects)}sa(v,U,0,D.sortObjects),A.finish(),D.sortObjects===!0&&A.sort(Pe,Le,U.reversedDepth),ct=Me.enabled===!1||Me.isPresenting===!1||Me.hasDepthSensing()===!1,ct&&Ue.addToRenderList(A,v),this.info.render.frame++,this.info.autoReset===!0&&this.info.reset(),Oe===!0&&we.beginShadows();const V=E.state.shadowsArray;if(Ce.render(V,v,U),Oe===!0&&we.endShadows(),(z&&T.hasRenderPass())===!1){const Se=A.opaque,me=A.transmissive;if(E.setupLights(),U.isArrayCamera){const Ee=U.cameras;if(me.length>0)for(let Te=0,Ne=Ee.length;Te<Ne;Te++){const ze=Ee[Te];cc(Se,me,v,ze)}ct&&Ue.render(v);for(let Te=0,Ne=Ee.length;Te<Ne;Te++){const ze=Ee[Te];lc(A,v,ze,ze.viewport)}}else me.length>0&&cc(Se,me,v,U),ct&&Ue.render(v),lc(A,v,U)}Z!==null&&H===0&&($.updateMultisampleRenderTarget(Z),$.updateRenderTargetMipmap(Z)),z&&T.end(D),v.isScene===!0&&v.onAfterRender(D,v,U),ge.resetDefaultState(),ee=-1,se=null,g.pop(),g.length>0?(E=g[g.length-1],$.setTextureUnits(E.state.textureUnits),Oe===!0&&we.setGlobalState(D.clippingPlanes,E.state.camera)):E=null,R.pop(),R.length>0?A=R[R.length-1]:A=null,N!==null&&N.renderEnd()};function sa(v,U,k,z){if(v.visible===!1)return;if(v.layers.test(U.layers)){if(v.isGroup)k=v.renderOrder;else if(v.isLOD)v.autoUpdate===!0&&v.update(U);else if(v.isLightProbeGrid)E.pushLightProbeGrid(v);else if(v.isLight)E.pushLight(v),v.castShadow&&E.pushShadow(v);else if(v.isSprite){if(!v.frustumCulled||Ze.intersectsSprite(v)){z&&rt.setFromMatrixPosition(v.matrixWorld).applyMatrix4(Xe);const Se=Q.update(v),me=v.material;me.visible&&A.push(v,Se,me,k,rt.z,null)}}else if((v.isMesh||v.isLine||v.isPoints)&&(!v.frustumCulled||Ze.intersectsObject(v))){const Se=Q.update(v),me=v.material;if(z&&(v.boundingSphere!==void 0?(v.boundingSphere===null&&v.computeBoundingSphere(),rt.copy(v.boundingSphere.center)):(Se.boundingSphere===null&&Se.computeBoundingSphere(),rt.copy(Se.boundingSphere.center)),rt.applyMatrix4(v.matrixWorld).applyMatrix4(Xe)),Array.isArray(me)){const Ee=Se.groups;for(let Te=0,Ne=Ee.length;Te<Ne;Te++){const ze=Ee[Te],Ae=me[ze.materialIndex];Ae&&Ae.visible&&A.push(v,Se,Ae,k,rt.z,ze)}}else me.visible&&A.push(v,Se,me,k,rt.z,null)}}const _e=v.children;for(let Se=0,me=_e.length;Se<me;Se++)sa(_e[Se],U,k,z)}function lc(v,U,k,z){const{opaque:V,transmissive:_e,transparent:Se}=v;E.setupLightsView(k),Oe===!0&&we.setGlobalState(D.clippingPlanes,k),z&&_.viewport(ie.copy(z)),V.length>0&&kr(V,U,k),_e.length>0&&kr(_e,U,k),Se.length>0&&kr(Se,U,k),_.buffers.depth.setTest(!0),_.buffers.depth.setMask(!0),_.buffers.color.setMask(!0),_.setPolygonOffset(!1)}function cc(v,U,k,z){if((k.isScene===!0?k.overrideMaterial:null)!==null)return;if(E.state.transmissionRenderTarget[z.id]===void 0){const Ae=Je.has("EXT_color_buffer_half_float")||Je.has("EXT_color_buffer_float");E.state.transmissionRenderTarget[z.id]=new gn(1,1,{generateMipmaps:!0,type:Ae?In:Yt,minFilter:ci,samples:Math.max(4,b.samples),stencilBuffer:s,resolveDepthBuffer:!1,resolveStencilBuffer:!1,colorSpace:Ge.workingColorSpace})}const _e=E.state.transmissionRenderTarget[z.id],Se=z.viewport||ie;_e.setSize(Se.z*D.transmissionResolutionScale,Se.w*D.transmissionResolutionScale);const me=D.getRenderTarget(),Ee=D.getActiveCubeFace(),Te=D.getActiveMipmapLevel();D.setRenderTarget(_e),D.getClearColor(je),We=D.getClearAlpha(),We<1&&D.setClearColor(16777215,.5),D.clear(),ct&&Ue.render(k);const Ne=D.toneMapping;D.toneMapping=_n;const ze=z.viewport;if(z.viewport!==void 0&&(z.viewport=void 0),E.setupLightsView(z),Oe===!0&&we.setGlobalState(D.clippingPlanes,z),kr(v,k,z),$.updateMultisampleRenderTarget(_e),$.updateRenderTargetMipmap(_e),Je.has("WEBGL_multisampled_render_to_texture")===!1){let Ae=!1;for(let tt=0,pt=U.length;tt<pt;tt++){const dt=U[tt],{object:nt,geometry:wt,material:ve,group:Gt}=dt;if(ve.side===Rn&&nt.layers.test(z.layers)){const Ye=ve.side;ve.side=Vt,ve.needsUpdate=!0,uc(nt,k,z,wt,ve,Gt),ve.side=Ye,ve.needsUpdate=!0,Ae=!0}}Ae===!0&&($.updateMultisampleRenderTarget(_e),$.updateRenderTargetMipmap(_e))}D.setRenderTarget(me,Ee,Te),D.setClearColor(je,We),ze!==void 0&&(z.viewport=ze),D.toneMapping=Ne}function kr(v,U,k){const z=U.isScene===!0?U.overrideMaterial:null;for(let V=0,_e=v.length;V<_e;V++){const Se=v[V],{object:me,geometry:Ee,group:Te}=Se;let Ne=Se.material;Ne.allowOverride===!0&&z!==null&&(Ne=z),me.layers.test(k.layers)&&uc(me,U,k,Ee,Ne,Te)}}function uc(v,U,k,z,V,_e){v.onBeforeRender(D,U,k,z,V,_e),v.modelViewMatrix.multiplyMatrices(k.matrixWorldInverse,v.matrixWorld),v.normalMatrix.getNormalMatrix(v.modelViewMatrix),V.onBeforeRender(D,U,k,z,v,_e),V.transparent===!0&&V.side===Rn&&V.forceSinglePass===!1?(V.side=Vt,V.needsUpdate=!0,D.renderBufferDirect(k,U,z,V,v,_e),V.side=$n,V.needsUpdate=!0,D.renderBufferDirect(k,U,z,V,v,_e),V.side=Rn):D.renderBufferDirect(k,U,z,V,v,_e),v.onAfterRender(D,U,k,z,V,_e)}function Wr(v,U,k){U.isScene!==!0&&(U=xt);const z=G.get(v),V=E.state.lights,_e=E.state.shadowsArray,Se=V.state.version,me=le.getParameters(v,V.state,_e,U,k,E.state.lightProbeGridArray),Ee=le.getProgramCacheKey(me);let Te=z.programs;z.environment=v.isMeshStandardMaterial||v.isMeshLambertMaterial||v.isMeshPhongMaterial?U.environment:null,z.fog=U.fog;const Ne=v.isMeshStandardMaterial||v.isMeshLambertMaterial&&!v.envMap||v.isMeshPhongMaterial&&!v.envMap;z.envMap=re.get(v.envMap||z.environment,Ne),z.envMapRotation=z.environment!==null&&v.envMap===null?U.environmentRotation:v.envMapRotation,Te===void 0&&(v.addEventListener("dispose",ln),Te=new Map,z.programs=Te);let ze=Te.get(Ee);if(ze!==void 0){if(z.currentProgram===ze&&z.lightsStateVersion===Se)return dc(v,me),ze}else me.uniforms=le.getUniforms(v),N!==null&&v.isNodeMaterial&&N.build(v,k,me),v.onBeforeCompile(me,D),ze=le.acquireProgram(me,Ee),Te.set(Ee,ze),z.uniforms=me.uniforms;const Ae=z.uniforms;return(!v.isShaderMaterial&&!v.isRawShaderMaterial||v.clipping===!0)&&(Ae.clippingPlanes=we.uniform),dc(v,me),z.needsLights=vh(v),z.lightsStateVersion=Se,z.needsLights&&(Ae.ambientLightColor.value=V.state.ambient,Ae.lightProbe.value=V.state.probe,Ae.directionalLights.value=V.state.directional,Ae.directionalLightShadows.value=V.state.directionalShadow,Ae.spotLights.value=V.state.spot,Ae.spotLightShadows.value=V.state.spotShadow,Ae.rectAreaLights.value=V.state.rectArea,Ae.ltc_1.value=V.state.rectAreaLTC1,Ae.ltc_2.value=V.state.rectAreaLTC2,Ae.pointLights.value=V.state.point,Ae.pointLightShadows.value=V.state.pointShadow,Ae.hemisphereLights.value=V.state.hemi,Ae.directionalShadowMatrix.value=V.state.directionalShadowMatrix,Ae.spotLightMatrix.value=V.state.spotLightMatrix,Ae.spotLightMap.value=V.state.spotLightMap,Ae.pointShadowMatrix.value=V.state.pointShadowMatrix),z.lightProbeGrid=E.state.lightProbeGridArray.length>0,z.currentProgram=ze,z.uniformsList=null,ze}function fc(v){if(v.uniformsList===null){const U=v.currentProgram.getUniforms();v.uniformsList=Rs.seqWithValue(U.seq,v.uniforms)}return v.uniformsList}function dc(v,U){const k=G.get(v);k.outputColorSpace=U.outputColorSpace,k.batching=U.batching,k.batchingColor=U.batchingColor,k.instancing=U.instancing,k.instancingColor=U.instancingColor,k.instancingMorph=U.instancingMorph,k.skinning=U.skinning,k.morphTargets=U.morphTargets,k.morphNormals=U.morphNormals,k.morphColors=U.morphColors,k.morphTargetsCount=U.morphTargetsCount,k.numClippingPlanes=U.numClippingPlanes,k.numIntersection=U.numClipIntersection,k.vertexAlphas=U.vertexAlphas,k.vertexTangents=U.vertexTangents,k.toneMapping=U.toneMapping}function _h(v,U){if(v.length===0)return null;if(v.length===1)return v[0].texture!==null?v[0]:null;M.setFromMatrixPosition(U.matrixWorld);for(let k=0,z=v.length;k<z;k++){const V=v[k];if(V.texture!==null&&V.boundingBox.containsPoint(M))return V}return null}function gh(v,U,k,z,V){U.isScene!==!0&&(U=xt),$.resetTextureUnits();const _e=U.fog,Se=z.isMeshStandardMaterial||z.isMeshLambertMaterial||z.isMeshPhongMaterial?U.environment:null,me=Z===null?D.outputColorSpace:Z.isXRRenderTarget===!0?Z.texture.colorSpace:Ge.workingColorSpace,Ee=z.isMeshStandardMaterial||z.isMeshLambertMaterial&&!z.envMap||z.isMeshPhongMaterial&&!z.envMap,Te=re.get(z.envMap||Se,Ee),Ne=z.vertexColors===!0&&!!k.attributes.color&&k.attributes.color.itemSize===4,ze=!!k.attributes.tangent&&(!!z.normalMap||z.anisotropy>0),Ae=!!k.morphAttributes.position,tt=!!k.morphAttributes.normal,pt=!!k.morphAttributes.color;let dt=_n;z.toneMapped&&(Z===null||Z.isXRRenderTarget===!0)&&(dt=D.toneMapping);const nt=k.morphAttributes.position||k.morphAttributes.normal||k.morphAttributes.color,wt=nt!==void 0?nt.length:0,ve=G.get(z),Gt=E.state.lights;if(Oe===!0&&(fe===!0||v!==se)){const ot=v===se&&z.id===ee;we.setState(z,v,ot)}let Ye=!1;z.version===ve.__version?(ve.needsLights&&ve.lightsStateVersion!==Gt.state.version||ve.outputColorSpace!==me||V.isBatchedMesh&&ve.batching===!1||!V.isBatchedMesh&&ve.batching===!0||V.isBatchedMesh&&ve.batchingColor===!0&&V.colorTexture===null||V.isBatchedMesh&&ve.batchingColor===!1&&V.colorTexture!==null||V.isInstancedMesh&&ve.instancing===!1||!V.isInstancedMesh&&ve.instancing===!0||V.isSkinnedMesh&&ve.skinning===!1||!V.isSkinnedMesh&&ve.skinning===!0||V.isInstancedMesh&&ve.instancingColor===!0&&V.instanceColor===null||V.isInstancedMesh&&ve.instancingColor===!1&&V.instanceColor!==null||V.isInstancedMesh&&ve.instancingMorph===!0&&V.morphTexture===null||V.isInstancedMesh&&ve.instancingMorph===!1&&V.morphTexture!==null||ve.envMap!==Te||z.fog===!0&&ve.fog!==_e||ve.numClippingPlanes!==void 0&&(ve.numClippingPlanes!==we.numPlanes||ve.numIntersection!==we.numIntersection)||ve.vertexAlphas!==Ne||ve.vertexTangents!==ze||ve.morphTargets!==Ae||ve.morphNormals!==tt||ve.morphColors!==pt||ve.toneMapping!==dt||ve.morphTargetsCount!==wt||!!ve.lightProbeGrid!=E.state.lightProbeGridArray.length>0)&&(Ye=!0):(Ye=!0,ve.__version=z.version);let $t=ve.currentProgram;Ye===!0&&($t=Wr(z,U,V),N&&z.isNodeMaterial&&N.onUpdateProgram(z,$t,ve));let cn=!1,On=!1,wi=!1;const it=$t.getUniforms(),mt=ve.uniforms;if(_.useProgram($t.program)&&(cn=!0,On=!0,wi=!0),z.id!==ee&&(ee=z.id,On=!0),ve.needsLights){const ot=_h(E.state.lightProbeGridArray,V);ve.lightProbeGrid!==ot&&(ve.lightProbeGrid=ot,On=!0)}if(cn||se!==v){_.buffers.depth.getReversed()&&v.reversedDepth!==!0&&(v._reversedDepth=!0,v.updateProjectionMatrix()),it.setValue(I,"projectionMatrix",v.projectionMatrix),it.setValue(I,"viewMatrix",v.matrixWorldInverse);const Bn=it.map.cameraPosition;Bn!==void 0&&Bn.setValue(I,et.setFromMatrixPosition(v.matrixWorld)),b.logarithmicDepthBuffer&&it.setValue(I,"logDepthBufFC",2/(Math.log(v.far+1)/Math.LN2)),(z.isMeshPhongMaterial||z.isMeshToonMaterial||z.isMeshLambertMaterial||z.isMeshBasicMaterial||z.isMeshStandardMaterial||z.isShaderMaterial)&&it.setValue(I,"isOrthographic",v.isOrthographicCamera===!0),se!==v&&(se=v,On=!0,wi=!0)}if(ve.needsLights&&(Gt.state.directionalShadowMap.length>0&&it.setValue(I,"directionalShadowMap",Gt.state.directionalShadowMap,$),Gt.state.spotShadowMap.length>0&&it.setValue(I,"spotShadowMap",Gt.state.spotShadowMap,$),Gt.state.pointShadowMap.length>0&&it.setValue(I,"pointShadowMap",Gt.state.pointShadowMap,$)),V.isSkinnedMesh){it.setOptional(I,V,"bindMatrix"),it.setOptional(I,V,"bindMatrixInverse");const ot=V.skeleton;ot&&(ot.boneTexture===null&&ot.computeBoneTexture(),it.setValue(I,"boneTexture",ot.boneTexture,$))}V.isBatchedMesh&&(it.setOptional(I,V,"batchingTexture"),it.setValue(I,"batchingTexture",V._matricesTexture,$),it.setOptional(I,V,"batchingIdTexture"),it.setValue(I,"batchingIdTexture",V._indirectTexture,$),it.setOptional(I,V,"batchingColorTexture"),V._colorsTexture!==null&&it.setValue(I,"batchingColorTexture",V._colorsTexture,$));const Fn=k.morphAttributes;if((Fn.position!==void 0||Fn.normal!==void 0||Fn.color!==void 0)&&L.update(V,k,$t),(On||ve.receiveShadow!==V.receiveShadow)&&(ve.receiveShadow=V.receiveShadow,it.setValue(I,"receiveShadow",V.receiveShadow)),(z.isMeshStandardMaterial||z.isMeshLambertMaterial||z.isMeshPhongMaterial)&&z.envMap===null&&U.environment!==null&&(mt.envMapIntensity.value=U.environmentIntensity),mt.dfgLUT!==void 0&&(mt.dfgLUT.value=YS()),On){if(it.setValue(I,"toneMappingExposure",D.toneMappingExposure),ve.needsLights&&xh(mt,wi),_e&&z.fog===!0&&be.refreshFogUniforms(mt,_e),be.refreshMaterialUniforms(mt,z,te,ne,E.state.transmissionRenderTarget[v.id]),ve.needsLights&&ve.lightProbeGrid){const ot=ve.lightProbeGrid;mt.probesSH.value=ot.texture,mt.probesMin.value.copy(ot.boundingBox.min),mt.probesMax.value.copy(ot.boundingBox.max),mt.probesResolution.value.copy(ot.resolution)}Rs.upload(I,fc(ve),mt,$)}if(z.isShaderMaterial&&z.uniformsNeedUpdate===!0&&(Rs.upload(I,fc(ve),mt,$),z.uniformsNeedUpdate=!1),z.isSpriteMaterial&&it.setValue(I,"center",V.center),it.setValue(I,"modelViewMatrix",V.modelViewMatrix),it.setValue(I,"normalMatrix",V.normalMatrix),it.setValue(I,"modelMatrix",V.matrixWorld),z.uniformsGroups!==void 0){const ot=z.uniformsGroups;for(let Bn=0,Ri=ot.length;Bn<Ri;Bn++){const hc=ot[Bn];j.update(hc,$t),j.bind(hc,$t)}}return $t}function xh(v,U){v.ambientLightColor.needsUpdate=U,v.lightProbe.needsUpdate=U,v.directionalLights.needsUpdate=U,v.directionalLightShadows.needsUpdate=U,v.pointLights.needsUpdate=U,v.pointLightShadows.needsUpdate=U,v.spotLights.needsUpdate=U,v.spotLightShadows.needsUpdate=U,v.rectAreaLights.needsUpdate=U,v.hemisphereLights.needsUpdate=U}function vh(v){return v.isMeshLambertMaterial||v.isMeshToonMaterial||v.isMeshPhongMaterial||v.isMeshStandardMaterial||v.isShadowMaterial||v.isShaderMaterial&&v.lights===!0}this.getActiveCubeFace=function(){return Y},this.getActiveMipmapLevel=function(){return H},this.getRenderTarget=function(){return Z},this.setRenderTargetTextures=function(v,U,k){const z=G.get(v);z.__autoAllocateDepthBuffer=v.resolveDepthBuffer===!1,z.__autoAllocateDepthBuffer===!1&&(z.__useRenderToTexture=!1),G.get(v.texture).__webglTexture=U,G.get(v.depthTexture).__webglTexture=z.__autoAllocateDepthBuffer?void 0:k,z.__hasExternalTextures=!0},this.setRenderTargetFramebuffer=function(v,U){const k=G.get(v);k.__webglFramebuffer=U,k.__useDefaultFramebuffer=U===void 0},this.setRenderTarget=function(v,U=0,k=0){Z=v,Y=U,H=k;let z=null,V=!1,_e=!1;if(v){const me=G.get(v);if(me.__useDefaultFramebuffer!==void 0){_.bindFramebuffer(I.FRAMEBUFFER,me.__webglFramebuffer),ie.copy(v.viewport),xe.copy(v.scissor),He=v.scissorTest,_.viewport(ie),_.scissor(xe),_.setScissorTest(He),ee=-1;return}else if(me.__webglFramebuffer===void 0)$.setupRenderTarget(v);else if(me.__hasExternalTextures)$.rebindTextures(v,G.get(v.texture).__webglTexture,G.get(v.depthTexture).__webglTexture);else if(v.depthBuffer){const Ne=v.depthTexture;if(me.__boundDepthTexture!==Ne){if(Ne!==null&&G.has(Ne)&&(v.width!==Ne.image.width||v.height!==Ne.image.height))throw new Error("THREE.WebGLRenderer: Attached DepthTexture is initialized to the incorrect size.");$.setupDepthRenderbuffer(v)}}const Ee=v.texture;(Ee.isData3DTexture||Ee.isDataArrayTexture||Ee.isCompressedArrayTexture)&&(_e=!0);const Te=G.get(v).__webglFramebuffer;v.isWebGLCubeRenderTarget?(Array.isArray(Te[U])?z=Te[U][k]:z=Te[U],V=!0):v.samples>0&&$.useMultisampledRTT(v)===!1?z=G.get(v).__webglMultisampledFramebuffer:Array.isArray(Te)?z=Te[k]:z=Te,ie.copy(v.viewport),xe.copy(v.scissor),He=v.scissorTest}else ie.copy(Re).multiplyScalar(te).floor(),xe.copy(Ke).multiplyScalar(te).floor(),He=Be;if(k!==0&&(z=X),_.bindFramebuffer(I.FRAMEBUFFER,z)&&_.drawBuffers(v,z),_.viewport(ie),_.scissor(xe),_.setScissorTest(He),V){const me=G.get(v.texture);I.framebufferTexture2D(I.FRAMEBUFFER,I.COLOR_ATTACHMENT0,I.TEXTURE_CUBE_MAP_POSITIVE_X+U,me.__webglTexture,k)}else if(_e){const me=U;for(let Ee=0;Ee<v.textures.length;Ee++){const Te=G.get(v.textures[Ee]);I.framebufferTextureLayer(I.FRAMEBUFFER,I.COLOR_ATTACHMENT0+Ee,Te.__webglTexture,k,me)}}else if(v!==null&&k!==0){const me=G.get(v.texture);I.framebufferTexture2D(I.FRAMEBUFFER,I.COLOR_ATTACHMENT0,I.TEXTURE_2D,me.__webglTexture,k)}ee=-1},this.readRenderTargetPixels=function(v,U,k,z,V,_e,Se,me=0){if(!(v&&v.isWebGLRenderTarget)){$e("WebGLRenderer.readRenderTargetPixels: renderTarget is not THREE.WebGLRenderTarget.");return}let Ee=G.get(v).__webglFramebuffer;if(v.isWebGLCubeRenderTarget&&Se!==void 0&&(Ee=Ee[Se]),Ee){_.bindFramebuffer(I.FRAMEBUFFER,Ee);try{const Te=v.textures[me],Ne=Te.format,ze=Te.type;if(v.textures.length>1&&I.readBuffer(I.COLOR_ATTACHMENT0+me),!b.textureFormatReadable(Ne)){$e("WebGLRenderer.readRenderTargetPixels: renderTarget is not in RGBA or implementation defined format.");return}if(!b.textureTypeReadable(ze)){$e("WebGLRenderer.readRenderTargetPixels: renderTarget is not in UnsignedByteType or implementation defined type.");return}U>=0&&U<=v.width-z&&k>=0&&k<=v.height-V&&I.readPixels(U,k,z,V,ue.convert(Ne),ue.convert(ze),_e)}finally{const Te=Z!==null?G.get(Z).__webglFramebuffer:null;_.bindFramebuffer(I.FRAMEBUFFER,Te)}}},this.readRenderTargetPixelsAsync=async function(v,U,k,z,V,_e,Se,me=0){if(!(v&&v.isWebGLRenderTarget))throw new Error("THREE.WebGLRenderer.readRenderTargetPixels: renderTarget is not THREE.WebGLRenderTarget.");let Ee=G.get(v).__webglFramebuffer;if(v.isWebGLCubeRenderTarget&&Se!==void 0&&(Ee=Ee[Se]),Ee)if(U>=0&&U<=v.width-z&&k>=0&&k<=v.height-V){_.bindFramebuffer(I.FRAMEBUFFER,Ee);const Te=v.textures[me],Ne=Te.format,ze=Te.type;if(v.textures.length>1&&I.readBuffer(I.COLOR_ATTACHMENT0+me),!b.textureFormatReadable(Ne))throw new Error("THREE.WebGLRenderer.readRenderTargetPixelsAsync: renderTarget is not in RGBA or implementation defined format.");if(!b.textureTypeReadable(ze))throw new Error("THREE.WebGLRenderer.readRenderTargetPixelsAsync: renderTarget is not in UnsignedByteType or implementation defined type.");const Ae=I.createBuffer();I.bindBuffer(I.PIXEL_PACK_BUFFER,Ae),I.bufferData(I.PIXEL_PACK_BUFFER,_e.byteLength,I.STREAM_READ),I.readPixels(U,k,z,V,ue.convert(Ne),ue.convert(ze),0);const tt=Z!==null?G.get(Z).__webglFramebuffer:null;_.bindFramebuffer(I.FRAMEBUFFER,tt);const pt=I.fenceSync(I.SYNC_GPU_COMMANDS_COMPLETE,0);return I.flush(),await u_(I,pt,4),I.bindBuffer(I.PIXEL_PACK_BUFFER,Ae),I.getBufferSubData(I.PIXEL_PACK_BUFFER,0,_e),I.deleteBuffer(Ae),I.deleteSync(pt),_e}else throw new Error("THREE.WebGLRenderer.readRenderTargetPixelsAsync: requested read bounds are out of range.")},this.copyFramebufferToTexture=function(v,U=null,k=0){const z=Math.pow(2,-k),V=Math.floor(v.image.width*z),_e=Math.floor(v.image.height*z),Se=U!==null?U.x:0,me=U!==null?U.y:0;$.setTexture2D(v,0),I.copyTexSubImage2D(I.TEXTURE_2D,k,0,0,Se,me,V,_e),_.unbindTexture()},this.copyTextureToTexture=function(v,U,k=null,z=null,V=0,_e=0){let Se,me,Ee,Te,Ne,ze,Ae,tt,pt;const dt=v.isCompressedTexture?v.mipmaps[_e]:v.image;if(k!==null)Se=k.max.x-k.min.x,me=k.max.y-k.min.y,Ee=k.isBox3?k.max.z-k.min.z:1,Te=k.min.x,Ne=k.min.y,ze=k.isBox3?k.min.z:0;else{const mt=Math.pow(2,-V);Se=Math.floor(dt.width*mt),me=Math.floor(dt.height*mt),v.isDataArrayTexture?Ee=dt.depth:v.isData3DTexture?Ee=Math.floor(dt.depth*mt):Ee=1,Te=0,Ne=0,ze=0}z!==null?(Ae=z.x,tt=z.y,pt=z.z):(Ae=0,tt=0,pt=0);const nt=ue.convert(U.format),wt=ue.convert(U.type);let ve;U.isData3DTexture?($.setTexture3D(U,0),ve=I.TEXTURE_3D):U.isDataArrayTexture||U.isCompressedArrayTexture?($.setTexture2DArray(U,0),ve=I.TEXTURE_2D_ARRAY):($.setTexture2D(U,0),ve=I.TEXTURE_2D),_.activeTexture(I.TEXTURE0),_.pixelStorei(I.UNPACK_FLIP_Y_WEBGL,U.flipY),_.pixelStorei(I.UNPACK_PREMULTIPLY_ALPHA_WEBGL,U.premultiplyAlpha),_.pixelStorei(I.UNPACK_ALIGNMENT,U.unpackAlignment);const Gt=_.getParameter(I.UNPACK_ROW_LENGTH),Ye=_.getParameter(I.UNPACK_IMAGE_HEIGHT),$t=_.getParameter(I.UNPACK_SKIP_PIXELS),cn=_.getParameter(I.UNPACK_SKIP_ROWS),On=_.getParameter(I.UNPACK_SKIP_IMAGES);_.pixelStorei(I.UNPACK_ROW_LENGTH,dt.width),_.pixelStorei(I.UNPACK_IMAGE_HEIGHT,dt.height),_.pixelStorei(I.UNPACK_SKIP_PIXELS,Te),_.pixelStorei(I.UNPACK_SKIP_ROWS,Ne),_.pixelStorei(I.UNPACK_SKIP_IMAGES,ze);const wi=v.isDataArrayTexture||v.isData3DTexture,it=U.isDataArrayTexture||U.isData3DTexture;if(v.isDepthTexture){const mt=G.get(v),Fn=G.get(U),ot=G.get(mt.__renderTarget),Bn=G.get(Fn.__renderTarget);_.bindFramebuffer(I.READ_FRAMEBUFFER,ot.__webglFramebuffer),_.bindFramebuffer(I.DRAW_FRAMEBUFFER,Bn.__webglFramebuffer);for(let Ri=0;Ri<Ee;Ri++)wi&&(I.framebufferTextureLayer(I.READ_FRAMEBUFFER,I.COLOR_ATTACHMENT0,G.get(v).__webglTexture,V,ze+Ri),I.framebufferTextureLayer(I.DRAW_FRAMEBUFFER,I.COLOR_ATTACHMENT0,G.get(U).__webglTexture,_e,pt+Ri)),I.blitFramebuffer(Te,Ne,Se,me,Ae,tt,Se,me,I.DEPTH_BUFFER_BIT,I.NEAREST);_.bindFramebuffer(I.READ_FRAMEBUFFER,null),_.bindFramebuffer(I.DRAW_FRAMEBUFFER,null)}else if(V!==0||v.isRenderTargetTexture||G.has(v)){const mt=G.get(v),Fn=G.get(U);_.bindFramebuffer(I.READ_FRAMEBUFFER,q),_.bindFramebuffer(I.DRAW_FRAMEBUFFER,F);for(let ot=0;ot<Ee;ot++)wi?I.framebufferTextureLayer(I.READ_FRAMEBUFFER,I.COLOR_ATTACHMENT0,mt.__webglTexture,V,ze+ot):I.framebufferTexture2D(I.READ_FRAMEBUFFER,I.COLOR_ATTACHMENT0,I.TEXTURE_2D,mt.__webglTexture,V),it?I.framebufferTextureLayer(I.DRAW_FRAMEBUFFER,I.COLOR_ATTACHMENT0,Fn.__webglTexture,_e,pt+ot):I.framebufferTexture2D(I.DRAW_FRAMEBUFFER,I.COLOR_ATTACHMENT0,I.TEXTURE_2D,Fn.__webglTexture,_e),V!==0?I.blitFramebuffer(Te,Ne,Se,me,Ae,tt,Se,me,I.COLOR_BUFFER_BIT,I.NEAREST):it?I.copyTexSubImage3D(ve,_e,Ae,tt,pt+ot,Te,Ne,Se,me):I.copyTexSubImage2D(ve,_e,Ae,tt,Te,Ne,Se,me);_.bindFramebuffer(I.READ_FRAMEBUFFER,null),_.bindFramebuffer(I.DRAW_FRAMEBUFFER,null)}else it?v.isDataTexture||v.isData3DTexture?I.texSubImage3D(ve,_e,Ae,tt,pt,Se,me,Ee,nt,wt,dt.data):U.isCompressedArrayTexture?I.compressedTexSubImage3D(ve,_e,Ae,tt,pt,Se,me,Ee,nt,dt.data):I.texSubImage3D(ve,_e,Ae,tt,pt,Se,me,Ee,nt,wt,dt):v.isDataTexture?I.texSubImage2D(I.TEXTURE_2D,_e,Ae,tt,Se,me,nt,wt,dt.data):v.isCompressedTexture?I.compressedTexSubImage2D(I.TEXTURE_2D,_e,Ae,tt,dt.width,dt.height,nt,dt.data):I.texSubImage2D(I.TEXTURE_2D,_e,Ae,tt,Se,me,nt,wt,dt);_.pixelStorei(I.UNPACK_ROW_LENGTH,Gt),_.pixelStorei(I.UNPACK_IMAGE_HEIGHT,Ye),_.pixelStorei(I.UNPACK_SKIP_PIXELS,$t),_.pixelStorei(I.UNPACK_SKIP_ROWS,cn),_.pixelStorei(I.UNPACK_SKIP_IMAGES,On),_e===0&&U.generateMipmaps&&I.generateMipmap(ve),_.unbindTexture()},this.initRenderTarget=function(v){G.get(v).__webglFramebuffer===void 0&&$.setupRenderTarget(v)},this.initTexture=function(v){v.isCubeTexture?$.setTextureCube(v,0):v.isData3DTexture?$.setTexture3D(v,0):v.isDataArrayTexture||v.isCompressedArrayTexture?$.setTexture2DArray(v,0):$.setTexture2D(v,0),_.unbindTexture()},this.resetState=function(){Y=0,H=0,Z=null,_.reset(),ge.reset()},typeof __THREE_DEVTOOLS__<"u"&&__THREE_DEVTOOLS__.dispatchEvent(new CustomEvent("observe",{detail:this}))}get coordinateSystem(){return mn}get outputColorSpace(){return this._outputColorSpace}set outputColorSpace(e){this._outputColorSpace=e;const t=this.getContext();t.drawingBufferColorSpace=Ge._getDrawingBufferColorSpace(e),t.unpackColorSpace=Ge._getUnpackColorSpace()}}const Lu=document.getElementById("asew-3d-scene");if(Lu){let H=function(){requestAnimationFrame(H);const Z=Y.getElapsedTime();u.rotation.y+=(-.35+q*.18-u.rotation.y)*.035,u.rotation.x+=(F*.05-u.rotation.x)*.035,u.position.y=-1.25+Math.sin(Z*.7)*.035,M.rotation.y=Z*.4,t.render(n,e)};var By=H;const n=new A_;n.background=new qe(133908);const e=new qt(42,window.innerWidth/window.innerHeight,.1,100);e.position.set(5.8,3.8,8.5);const t=new $S({antialias:!0,alpha:!0});t.setPixelRatio(Math.min(window.devicePixelRatio,2)),t.setSize(window.innerWidth,window.innerHeight),t.outputColorSpace=Xt,Lu.appendChild(t.domElement);const i=new K_(16777215,1.4);n.add(i);const r=new $_(16777215,3);r.position.set(4,8,6),n.add(r);const s=new q_(14884388,18,12);s.position.set(-3,3,2),n.add(s);const a=new _r({color:2503742,metalness:.85,roughness:.25}),o=new _r({color:10332077,metalness:.9,roughness:.2}),l=new _r({color:14884388,metalness:.45,roughness:.25}),c=new _r({color:329997,metalness:.7,roughness:.2}),u=new yr;u.position.set(2.2,-1.25,0),u.rotation.y=-.35,n.add(u);const h=new en(3.8,.45,2.5),d=new bt(h,a);u.add(d);const m=new en(3.4,.42,2.1),x=new bt(m,a);x.position.y=4.7,u.add(x);const S=new Bs(.14,.14,4.25,32);[[-1.35,2.35,-.75],[1.35,2.35,-.75],[-1.35,2.35,.75],[1.35,2.35,.75]].forEach(Z=>{const ee=new bt(S,o);ee.position.set(Z[0],Z[1],Z[2]),u.add(ee)});const f=new en(2.3,.28,1.65),y=new bt(f,o);y.position.y=2.15,u.add(y);const w=new en(.8,.8,.8),M=new bt(w,l);M.position.y=2.72,u.add(M);const A=new Bs(.42,.42,.5,32),E=new bt(A,o);E.position.y=3.35,u.add(E);const R=new en(.85,1.25,.5),g=new bt(R,c);g.position.set(2.25,1.25,0),u.add(g);const T=new en(.52,.35,.04),D=new bt(T,l);D.position.set(2.25,1.55,-.27),u.add(D);const C=new wl(7,64),N=new _r({color:463902,metalness:.4,roughness:.7}),X=new bt(C,N);X.rotation.x=-Math.PI/2,X.position.y=-1.5,n.add(X);let q=0,F=0;window.addEventListener("pointermove",Z=>{q=Z.clientX/window.innerWidth*2-1,F=Z.clientY/window.innerHeight*2-1});const Y=new Q_;H(),window.addEventListener("resize",()=>{e.aspect=window.innerWidth/window.innerHeight,e.updateProjectionMatrix(),t.setSize(window.innerWidth,window.innerHeight)})}var qo=!1,Yo=!1,hi=[],$o=-1,Pl=!1;function KS(n){QS(n)}function ZS(){Pl=!0}function JS(){Pl=!1,ed()}function QS(n){hi.includes(n)||hi.push(n),ed()}function jS(n){let e=hi.indexOf(n);e!==-1&&e>$o&&hi.splice(e,1)}function ed(){if(!Yo&&!qo){if(Pl)return;qo=!0,queueMicrotask(eM)}}function eM(){qo=!1,Yo=!0;for(let n=0;n<hi.length;n++)hi[n](),$o=n;hi.length=0,$o=-1,Yo=!1}var sr,Ai,ar,td,Ko=!0;function tM(n){Ko=!1,n(),Ko=!0}function nM(n){sr=n.reactive,ar=n.release,Ai=e=>n.effect(e,{scheduler:t=>{Ko?KS(t):t()}}),td=n.raw}function Iu(n){Ai=n}function iM(n){let e=()=>{};return[i=>{let r=Ai(i);return n._x_effects||(n._x_effects=new Set,n._x_runEffects=()=>{n._x_effects.forEach(s=>s())}),n._x_effects.add(r),e=()=>{r!==void 0&&(n._x_effects.delete(r),ar(r))},r},()=>{e()}]}function nd(n,e){let t=!0,i,r,s=Ai(()=>{let a=n(),o=JSON.stringify(a);if(!t&&(typeof a=="object"||a!==i)){let l=typeof i=="object"?JSON.parse(r):i;queueMicrotask(()=>{e(a,l)})}i=a,r=o,t=!1});return()=>ar(s)}async function rM(n){ZS();try{await n(),await Promise.resolve()}finally{JS()}}var id=[],rd=[],sd=[];function sM(n){sd.push(n)}function Dl(n,e){typeof e=="function"?(n._x_cleanups||(n._x_cleanups=[]),n._x_cleanups.push(e)):(e=n,rd.push(e))}function ad(n){id.push(n)}function od(n,e,t){n._x_attributeCleanups||(n._x_attributeCleanups={}),n._x_attributeCleanups[e]||(n._x_attributeCleanups[e]=[]),n._x_attributeCleanups[e].push(t)}function ld(n,e){n._x_attributeCleanups&&Object.entries(n._x_attributeCleanups).forEach(([t,i])=>{(e===void 0||e.includes(t))&&(i.forEach(r=>r()),delete n._x_attributeCleanups[t])})}function aM(n){for(n._x_effects?.forEach(jS);n._x_cleanups?.length;)n._x_cleanups.pop()()}var Ll=new MutationObserver(Ol),Il=!1;function Ul(){Ll.observe(document,{subtree:!0,childList:!0,attributes:!0,attributeOldValue:!0}),Il=!0}function cd(){oM(),Ll.disconnect(),Il=!1}var vr=[];function oM(){let n=Ll.takeRecords();vr.push(()=>n.length>0&&Ol(n));let e=vr.length;queueMicrotask(()=>{if(vr.length===e)for(;vr.length>0;)vr.shift()()})}function _t(n){if(!Il)return n();cd();let e=n();return Ul(),e}var Nl=!1,zs=[];function lM(){Nl=!0}function cM(){Nl=!1,Ol(zs),zs=[]}function Ol(n){if(Nl){zs=zs.concat(n);return}let e=[],t=new Set,i=new Map,r=new Map;for(let s=0;s<n.length;s++)if(!n[s].target._x_ignoreMutationObserver&&(n[s].type==="childList"&&(n[s].removedNodes.forEach(a=>{a.nodeType===1&&a._x_marker&&t.add(a)}),n[s].addedNodes.forEach(a=>{if(a.nodeType===1){if(t.has(a)){t.delete(a);return}a._x_marker||e.push(a)}})),n[s].type==="attributes")){let a=n[s].target,o=n[s].attributeName,l=n[s].oldValue,c=()=>{i.has(a)||i.set(a,[]),i.get(a).push({name:o,value:a.getAttribute(o)})},u=()=>{r.has(a)||r.set(a,[]),r.get(a).push(o)};a.hasAttribute(o)&&l===null?c():a.hasAttribute(o)?(u(),c()):u()}r.forEach((s,a)=>{ld(a,s)}),i.forEach((s,a)=>{id.forEach(o=>o(a,s))});for(let s of t)e.some(a=>a.contains(s))||rd.forEach(a=>a(s));for(let s of e)s.isConnected&&sd.forEach(a=>a(s));e=null,t=null,i=null,r=null}function ud(n){return yi(Ei(n))}function Gr(n,e,t){return n._x_dataStack=[e,...Ei(t||n)],()=>{n._x_dataStack=n._x_dataStack.filter(i=>i!==e)}}function Ei(n){return n._x_dataStack?n._x_dataStack:typeof ShadowRoot=="function"&&n instanceof ShadowRoot?Ei(n.host):n.parentNode?Ei(n.parentNode):[]}function yi(n){return new Proxy({objects:n},uM)}function fd(n,e){return n===null||n===Object.prototype?null:Object.prototype.hasOwnProperty.call(n,e)?n:fd(Object.getPrototypeOf(n),e)}var uM={ownKeys({objects:n}){return Array.from(new Set(n.flatMap(e=>Object.keys(e))))},has({objects:n},e){return e==Symbol.unscopables?!1:n.some(t=>Object.prototype.hasOwnProperty.call(t,e)||Reflect.has(t,e))},get({objects:n},e,t){return e=="toJSON"?fM:Reflect.get(n.find(i=>Reflect.has(i,e))||{},e,t)},set({objects:n},e,t,i){let r;for(const a of n)if(r=fd(a,e),r)break;r||(r=n[n.length-1]);const s=Object.getOwnPropertyDescriptor(r,e);return s?.set&&s?.get?s.set.call(i,t)||!0:Reflect.set(r,e,t)}};function fM(){return Reflect.ownKeys(this).reduce((e,t)=>(e[t]=Reflect.get(this,t),e),{})}function Fl(n,e=()=>{}){let t=r=>typeof r=="object"&&!Array.isArray(r)&&r!==null,i=(r,s="")=>{Object.entries(Object.getOwnPropertyDescriptors(r)).forEach(([a,{value:o,enumerable:l}])=>{if(l===!1||o===void 0||typeof o=="object"&&o!==null&&o.__v_skip)return;let c=s===""?a:`${s}.${a}`;typeof o=="object"&&o!==null&&o._x_interceptor?r[a]=o.initialize(n,c,a,e):t(o)&&o!==r&&!(o instanceof Element)&&i(o,c)})};return i(n)}function dd(n,e=()=>{}){let t={initialValue:void 0,_x_interceptor:!0,initialize(i,r,s,a){return n(this.initialValue,()=>dM(i,r),o=>Zo(i,r,o),r,s,a)}};return e(t),i=>{if(typeof i=="object"&&i!==null&&i._x_interceptor){let r=t.initialize.bind(t);t.initialize=(s,a,o,l)=>{let c=i.initialize(s,a,o,l);return t.initialValue=c,r(s,a,o,l)}}else t.initialValue=i;return t}}function dM(n,e){return e.split(".").reduce((t,i)=>t[i],n)}function Zo(n,e,t){if(typeof e=="string"&&(e=e.split(".")),e.length===1)n[e[0]]=t;else{if(e.length===0)throw error;return n[e[0]]||(n[e[0]]={}),Zo(n[e[0]],e.slice(1),t)}}var hd={};function an(n,e){hd[n]=e}function Lr(n,e){let t=hM(e);return Object.entries(hd).forEach(([i,r])=>{Object.defineProperty(n,`$${i}`,{get(){return r(e,t)},enumerable:!1})}),n}function hM(n){let[e,t]=Sd(n),i={interceptor:dd,...e};return Dl(n,t),i}function pM(n,e,t,...i){try{return t(...i)}catch(r){Ir(r,n,e)}}function Ir(...n){return pd(...n)}var pd=_M;function mM(n){pd=n}function _M(n,e,t=void 0){n=Object.assign(n??{message:"No error message given."},{el:e,expression:t}),console.warn(`Alpine Expression Error: ${n.message}

${t?'Expression: "'+t+`"

`:""}`,e),setTimeout(()=>{throw n},0)}var $i=!0;function md(n){let e=$i;$i=!1;let t=n();return $i=e,t}function pi(n,e,t={}){let i;return Ft(n,e)(r=>i=r,t),i}function Ft(...n){return _d(...n)}var _d=()=>{};function gM(n){_d=n}var gd;function xM(n){gd=n}function vM(n,e){let t={};Lr(t,n);let i=[t,...Ei(n)],r=typeof e=="function"?SM(i,e):EM(i,e,n);return pM.bind(null,n,e,r)}function SM(n,e){return(t=()=>{},{scope:i={},params:r=[],context:s}={})=>{if(!$i){Ur(t,e,yi([i,...n]),r);return}let a=e.apply(yi([i,...n]),r);Ur(t,a)}}var qa={};function MM(n,e){if(qa[n])return qa[n];let t=Object.getPrototypeOf(async function(){}).constructor,i=/^[\n\s]*if.*\(.*\)/.test(n.trim())||/^(let|const)\s/.test(n.trim())?`(async()=>{ ${n} })()`:n,s=(()=>{try{let a=new t(["__self","scope"],`with (scope) { __self.result = ${i} }; __self.finished = true; return __self.result;`);return Object.defineProperty(a,"name",{value:`[Alpine] ${n}`}),a}catch(a){return Ir(a,e,n),Promise.resolve()}})();return qa[n]=s,s}function EM(n,e,t){let i=MM(e,t);return(r=()=>{},{scope:s={},params:a=[],context:o}={})=>{i.result=void 0,i.finished=!1;let l=yi([s,...n]);if(typeof i=="function"){let c=i.call(o,i,l).catch(u=>Ir(u,t,e));i.finished?(Ur(r,i.result,l,a,t),i.result=void 0):c.then(u=>{Ur(r,u,l,a,t)}).catch(u=>Ir(u,t,e)).finally(()=>i.result=void 0)}}}function Ur(n,e,t,i,r){if($i&&typeof e=="function"){let s=e.apply(t,i);s instanceof Promise?s.then(a=>Ur(n,a,t,i)).catch(a=>Ir(a,r,e)):n(s)}else typeof e=="object"&&e instanceof Promise?e.then(s=>n(s)):n(e)}function yM(...n){return gd(...n)}function bM(n,e,t={}){let i={};Lr(i,n);let r=[i,...Ei(n)],s=yi([t.scope??{},...r]),a=t.params??[];if(e.includes("await")){let o=Object.getPrototypeOf(async function(){}).constructor,l=/^[\n\s]*if.*\(.*\)/.test(e.trim())||/^(let|const)\s/.test(e.trim())?`(async()=>{ ${e} })()`:e;return new o(["scope"],`with (scope) { let __result = ${l}; return __result }`).call(t.context,s)}else{let o=/^[\n\s]*if.*\(.*\)/.test(e.trim())||/^(let|const)\s/.test(e.trim())?`(()=>{ ${e} })()`:e,c=new Function(["scope"],`with (scope) { let __result = ${o}; return __result }`).call(t.context,s);return typeof c=="function"&&$i?c.apply(s,a):c}}var Bl="x-";function or(n=""){return Bl+n}function TM(n){Bl=n}var Hs={};function St(n,e){return Hs[n]=e,{before(t){if(!Hs[t]){console.warn(String.raw`Cannot find directive \`${t}\`. \`${n}\` will use the default order of execution`);return}const i=fi.indexOf(t);fi.splice(i>=0?i:fi.indexOf("DEFAULT"),0,n)}}}function AM(n){return Object.keys(Hs).includes(n)}function zl(n,e,t){if(e=Array.from(e),n._x_virtualDirectives){let s=Object.entries(n._x_virtualDirectives).map(([o,l])=>({name:o,value:l})),a=xd(s);s=s.map(o=>a.find(l=>l.name===o.name)?{name:`x-bind:${o.name}`,value:`"${o.value}"`}:o),e=e.concat(s)}let i={};return e.map(yd((s,a)=>i[s]=a)).filter(Td).map(CM(i,t)).sort(PM).map(s=>RM(n,s))}function xd(n){return Array.from(n).map(yd()).filter(e=>!Td(e))}var Jo=!1,Tr=new Map,vd=Symbol();function wM(n){Jo=!0;let e=Symbol();vd=e,Tr.set(e,[]);let t=()=>{for(;Tr.get(e).length;)Tr.get(e).shift()();Tr.delete(e)},i=()=>{Jo=!1,t()};n(t),i()}function Sd(n){let e=[],t=o=>e.push(o),[i,r]=iM(n);return e.push(r),[{Alpine:cr,effect:i,cleanup:t,evaluateLater:Ft.bind(Ft,n),evaluate:pi.bind(pi,n)},()=>e.forEach(o=>o())]}function RM(n,e){let t=()=>{},i=Hs[e.type]||t,[r,s]=Sd(n);od(n,e.original,s);let a=()=>{n._x_ignore||n._x_ignoreSelf||(i.inline&&i.inline(n,e,r),i=i.bind(i,n,e,r),Jo?Tr.get(vd).push(i):i())};return a.runCleanups=s,a}var Md=(n,e)=>({name:t,value:i})=>(t.startsWith(n)&&(t=t.replace(n,e)),{name:t,value:i}),Ed=n=>n;function yd(n=()=>{}){return({name:e,value:t})=>{let{name:i,value:r}=bd.reduce((s,a)=>a(s),{name:e,value:t});return i!==e&&n(i,e),{name:i,value:r}}}var bd=[];function Hl(n){bd.push(n)}function Td({name:n}){return Ad().test(n)}var Ad=()=>new RegExp(`^${Bl}([^:^.]+)\\b`);function CM(n,e){return({name:t,value:i})=>{t===i&&(i="");let r=t.match(Ad()),s=t.match(/:([a-zA-Z0-9\-_:]+)/),a=t.match(/\.[^.\]]+(?=[^\]]*$)/g)||[],o=e||n[t]||t;return{type:r?r[1]:null,value:s?s[1]:null,modifiers:a.map(l=>l.replace(".","")),expression:i,original:o}}}var Qo="DEFAULT",fi=["ignore","ref","id","data","anchor","bind","init","for","model","modelable","transition","show","if",Qo,"teleport"];function PM(n,e){let t=fi.indexOf(n.type)===-1?Qo:n.type,i=fi.indexOf(e.type)===-1?Qo:e.type;return fi.indexOf(t)-fi.indexOf(i)}function Ar(n,e,t={},i={}){return n.dispatchEvent(new CustomEvent(e,{detail:t,bubbles:!0,composed:!0,cancelable:!0,...i}))}function bi(n,e){if(typeof ShadowRoot=="function"&&n instanceof ShadowRoot){Array.from(n.children).forEach(r=>bi(r,e));return}let t=!1;if(e(n,()=>t=!0),t)return;let i=n.firstElementChild;for(;i;)bi(i,e),i=i.nextElementSibling}function Mn(n,...e){console.warn(`Alpine Warning: ${n}`,...e)}var Uu=!1;function DM(){Uu&&Mn("Alpine has already been initialized on this page. Calling Alpine.start() more than once can cause problems."),Uu=!0,document.body||Mn("Unable to initialize. Trying to load Alpine before `<body>` is available. Did you forget to add `defer` in Alpine's `<script>` tag?"),Ar(document,"alpine:init"),Ar(document,"alpine:initializing"),Ul(),sM(e=>Nn(e,bi)),Dl(e=>lr(e)),ad((e,t)=>{zl(e,t).forEach(i=>i())});let n=e=>!Js(e.parentElement,!0);Array.from(document.querySelectorAll(Cd().join(","))).filter(n).forEach(e=>{Nn(e)}),Ar(document,"alpine:initialized"),setTimeout(()=>{NM()})}var Vl=[],wd=[];function Rd(){return Vl.map(n=>n())}function Cd(){return Vl.concat(wd).map(n=>n())}function Pd(n){Vl.push(n)}function Dd(n){wd.push(n)}function Js(n,e=!1){return Ln(n,t=>{if((e?Cd():Rd()).some(r=>t.matches(r)))return!0})}function Ln(n,e){if(n){if(e(n))return n;if(n._x_teleportBack)return Ln(n._x_teleportBack,e);if(n.parentNode instanceof ShadowRoot)return Ln(n.parentNode.host,e);if(n.parentElement)return Ln(n.parentElement,e)}}function LM(n){return Rd().some(e=>n.matches(e))}var Ld=[];function IM(n){Ld.push(n)}var UM=1;function Nn(n,e=bi,t=()=>{}){Ln(n,i=>i._x_ignore)||wM(()=>{e(n,(i,r)=>{i._x_marker||(t(i,r),Ld.forEach(s=>s(i,r)),zl(i,i.attributes).forEach(s=>s()),i._x_ignore||(i._x_marker=UM++),i._x_ignore&&r())})})}function lr(n,e=bi){e(n,t=>{aM(t),ld(t),delete t._x_marker})}function NM(){[["ui","dialog",["[x-dialog], [x-popover]"]],["anchor","anchor",["[x-anchor]"]],["sort","sort",["[x-sort]"]]].forEach(([e,t,i])=>{AM(t)||i.some(r=>{if(document.querySelector(r))return Mn(`found "${r}", but missing ${e} plugin`),!0})})}var jo=[],Gl=!1;function kl(n=()=>{}){return queueMicrotask(()=>{Gl||setTimeout(()=>{el()})}),new Promise(e=>{jo.push(()=>{n(),e()})})}function el(){for(Gl=!1;jo.length;)jo.shift()()}function OM(){Gl=!0}function Wl(n,e){return Array.isArray(e)?Nu(n,e.join(" ")):typeof e=="object"&&e!==null?FM(n,e):typeof e=="function"?Wl(n,e()):Nu(n,e)}function tl(n){return n.split(/\s/).filter(Boolean)}function Nu(n,e){let t=r=>tl(r).filter(s=>!n.classList.contains(s)).filter(Boolean),i=r=>(n.classList.add(...r),()=>{n.classList.remove(...r)});return e=e===!0?e="":e||"",i(t(e))}function FM(n,e){let t=Object.entries(e).flatMap(([a,o])=>o?tl(a):!1).filter(Boolean),i=Object.entries(e).flatMap(([a,o])=>o?!1:tl(a)).filter(Boolean),r=[],s=[];return i.forEach(a=>{n.classList.contains(a)&&(n.classList.remove(a),s.push(a))}),t.forEach(a=>{n.classList.contains(a)||(n.classList.add(a),r.push(a))}),()=>{s.forEach(a=>n.classList.add(a)),r.forEach(a=>n.classList.remove(a))}}function Qs(n,e){return typeof e=="object"&&e!==null?BM(n,e):zM(n,e)}function BM(n,e){let t={};return Object.entries(e).forEach(([i,r])=>{t[i]=n.style[i],i.startsWith("--")||(i=HM(i)),n.style.setProperty(i,r)}),setTimeout(()=>{n.style.length===0&&n.removeAttribute("style")}),()=>{Qs(n,t)}}function zM(n,e){let t=n.getAttribute("style",e);return n.setAttribute("style",e),()=>{n.setAttribute("style",t||"")}}function HM(n){return n.replace(/([a-z])([A-Z])/g,"$1-$2").toLowerCase()}function nl(n,e=()=>{}){let t=!1;return function(){t?e.apply(this,arguments):(t=!0,n.apply(this,arguments))}}St("transition",(n,{value:e,modifiers:t,expression:i},{evaluate:r})=>{typeof i=="function"&&(i=r(i)),i!==!1&&(!i||typeof i=="boolean"?GM(n,t,e):VM(n,i,e))});function VM(n,e,t){Id(n,Wl,""),{enter:r=>{n._x_transition.enter.during=r},"enter-start":r=>{n._x_transition.enter.start=r},"enter-end":r=>{n._x_transition.enter.end=r},leave:r=>{n._x_transition.leave.during=r},"leave-start":r=>{n._x_transition.leave.start=r},"leave-end":r=>{n._x_transition.leave.end=r}}[t](e)}function GM(n,e,t){Id(n,Qs);let i=!e.includes("in")&&!e.includes("out")&&!t,r=i||e.includes("in")||["enter"].includes(t),s=i||e.includes("out")||["leave"].includes(t);e.includes("in")&&!i&&(e=e.filter((f,y)=>y<e.indexOf("out"))),e.includes("out")&&!i&&(e=e.filter((f,y)=>y>e.indexOf("out")));let a=!e.includes("opacity")&&!e.includes("scale"),o=a||e.includes("opacity"),l=a||e.includes("scale"),c=o?0:1,u=l?Sr(e,"scale",95)/100:1,h=Sr(e,"delay",0)/1e3,d=Sr(e,"origin","center"),m="opacity, transform",x=Sr(e,"duration",150)/1e3,S=Sr(e,"duration",75)/1e3,p="cubic-bezier(0.4, 0.0, 0.2, 1)";r&&(n._x_transition.enter.during={transformOrigin:d,transitionDelay:`${h}s`,transitionProperty:m,transitionDuration:`${x}s`,transitionTimingFunction:p},n._x_transition.enter.start={opacity:c,transform:`scale(${u})`},n._x_transition.enter.end={opacity:1,transform:"scale(1)"}),s&&(n._x_transition.leave.during={transformOrigin:d,transitionDelay:`${h}s`,transitionProperty:m,transitionDuration:`${S}s`,transitionTimingFunction:p},n._x_transition.leave.start={opacity:1,transform:"scale(1)"},n._x_transition.leave.end={opacity:c,transform:`scale(${u})`})}function Id(n,e,t={}){n._x_transition||(n._x_transition={enter:{during:t,start:t,end:t},leave:{during:t,start:t,end:t},in(i=()=>{},r=()=>{}){il(n,e,{during:this.enter.during,start:this.enter.start,end:this.enter.end},i,r)},out(i=()=>{},r=()=>{}){il(n,e,{during:this.leave.during,start:this.leave.start,end:this.leave.end},i,r)}})}window.Element.prototype._x_toggleAndCascadeWithTransitions=function(n,e,t,i){const r=document.visibilityState==="visible"?requestAnimationFrame:setTimeout;let s=()=>r(t);if(e){n._x_transition&&(n._x_transition.enter||n._x_transition.leave)?n._x_transition.enter&&(Object.entries(n._x_transition.enter.during).length||Object.entries(n._x_transition.enter.start).length||Object.entries(n._x_transition.enter.end).length)?n._x_transition.in(t):s():n._x_transition?n._x_transition.in(t):s();return}n._x_hidePromise=n._x_transition?new Promise((a,o)=>{n._x_transition.out(()=>{},()=>a(i)),n._x_transitioning&&n._x_transitioning.beforeCancel(()=>o({isFromCancelledTransition:!0}))}):Promise.resolve(i),queueMicrotask(()=>{let a=Ud(n);a?(a._x_hideChildren||(a._x_hideChildren=[]),a._x_hideChildren.push(n)):r(()=>{let o=l=>{let c=Promise.all([l._x_hidePromise,...(l._x_hideChildren||[]).map(o)]).then(([u])=>u?.());return delete l._x_hidePromise,delete l._x_hideChildren,c};o(n).catch(l=>{if(!l.isFromCancelledTransition)throw l})})})};function Ud(n){let e=n.parentNode;if(e)return e._x_hidePromise?e:Ud(e)}function il(n,e,{during:t,start:i,end:r}={},s=()=>{},a=()=>{}){if(n._x_transitioning&&n._x_transitioning.cancel(),Object.keys(t).length===0&&Object.keys(i).length===0&&Object.keys(r).length===0){s(),a();return}let o,l,c;kM(n,{start(){o=e(n,i)},during(){l=e(n,t)},before:s,end(){o(),c=e(n,r)},after:a,cleanup(){l(),c()}})}function kM(n,e){let t,i,r,s=nl(()=>{_t(()=>{t=!0,i||e.before(),r||(e.end(),el()),e.after(),n.isConnected&&e.cleanup(),delete n._x_transitioning})});n._x_transitioning={beforeCancels:[],beforeCancel(a){this.beforeCancels.push(a)},cancel:nl(function(){for(;this.beforeCancels.length;)this.beforeCancels.shift()();s()}),finish:s},_t(()=>{e.start(),e.during()}),OM(),requestAnimationFrame(()=>{if(t)return;let a=Number(getComputedStyle(n).transitionDuration.replace(/,.*/,"").replace("s",""))*1e3,o=Number(getComputedStyle(n).transitionDelay.replace(/,.*/,"").replace("s",""))*1e3;a===0&&(a=Number(getComputedStyle(n).animationDuration.replace("s",""))*1e3),_t(()=>{e.before()}),i=!0,requestAnimationFrame(()=>{t||(_t(()=>{e.end()}),el(),setTimeout(n._x_transitioning.finish,a+o),r=!0)})})}function Sr(n,e,t){if(n.indexOf(e)===-1)return t;const i=n[n.indexOf(e)+1];if(!i||e==="scale"&&isNaN(i))return t;if(e==="duration"||e==="delay"){let r=i.match(/([0-9]+)ms/);if(r)return r[1]}return e==="origin"&&["top","right","left","center","bottom"].includes(n[n.indexOf(e)+2])?[i,n[n.indexOf(e)+2]].join(" "):i}var Zn=!1;function Qn(n,e=()=>{}){return(...t)=>Zn?e(...t):n(...t)}function WM(n){return(...e)=>Zn&&n(...e)}var Nd=[];function js(n){Nd.push(n)}function XM(n,e){Nd.forEach(t=>t(n,e)),Zn=!0,Od(()=>{Nn(e,(t,i)=>{i(t,()=>{})})}),Zn=!1}var rl=!1;function qM(n,e){e._x_dataStack||(e._x_dataStack=n._x_dataStack),Zn=!0,rl=!0,Od(()=>{YM(e)}),Zn=!1,rl=!1}function YM(n){let e=!1;Nn(n,(i,r)=>{bi(i,(s,a)=>{if(e&&LM(s))return a();e=!0,r(s,a)})})}function Od(n){let e=Ai;Iu((t,i)=>{let r=e(t);return ar(r),()=>{}}),n(),Iu(e)}function Fd(n,e,t,i=[]){switch(n._x_bindings||(n._x_bindings=sr({})),n._x_bindings[e]=t,e=i.includes("camel")?tE(e):e,e){case"value":$M(n,t);break;case"style":ZM(n,t);break;case"class":KM(n,t);break;case"selected":case"checked":JM(n,e,t);break;default:Xl(n,e,t);break}}function $M(n,e){if(ql(n))n.attributes.value===void 0&&(n.value=e);else if(Vs(n))Number.isInteger(e)?n.value=e:!Array.isArray(e)&&typeof e!="boolean"&&![null,void 0].includes(e)?n.value=String(e):Array.isArray(e)?n.checked=e.some(t=>nE(t,n.value)):n.checked=!!e;else if(n.tagName==="SELECT")eE(n,e);else if(n.tagName==="OPTION")Xl(n,"value",e);else{if(n.value===e&&(typeof e!="object"||e===null))return;n.value=e===void 0?"":e}}function KM(n,e){n._x_undoAddedClasses&&n._x_undoAddedClasses(),n._x_undoAddedClasses=Wl(n,e)}function ZM(n,e){n._x_undoAddedStyles&&n._x_undoAddedStyles(),n._x_undoAddedStyles=Qs(n,e)}function JM(n,e,t){Xl(n,e,t),jM(n,e,t)}function Xl(n,e,t){[null,void 0,!1].includes(t)&&rE(e)?n.removeAttribute(e):(Bd(e)&&(t=e),sE(t)&&(t=JSON.stringify(t)),QM(n,e,t))}function QM(n,e,t){n.getAttribute(e)!=t&&n.setAttribute(e,t)}function jM(n,e,t){n[e]!==t&&(n[e]=t)}function eE(n,e){const t=[].concat(e).map(i=>i+"");Array.from(n.options).forEach(i=>{i.selected=t.includes(i.value)})}function tE(n){return n.toLowerCase().replace(/-(\w)/g,(e,t)=>t.toUpperCase())}function nE(n,e){return n==e}function Cs(n){return[1,"1","true","on","yes",!0].includes(n)?!0:[0,"0","false","off","no",!1].includes(n)?!1:n?!!n:null}var iE=new Set(["allowfullscreen","async","autofocus","autoplay","checked","controls","default","defer","disabled","formnovalidate","inert","ismap","itemscope","loop","multiple","muted","nomodule","novalidate","open","playsinline","readonly","required","reversed","selected","shadowrootclonable","shadowrootdelegatesfocus","shadowrootserializable"]);function Bd(n){return iE.has(n)}function rE(n){return!["aria-pressed","aria-checked","aria-expanded","aria-selected"].includes(n)}function sE(n){return typeof n=="object"&&n!==null}function aE(n,e,t){return n._x_bindings&&n._x_bindings[e]!==void 0?n._x_bindings[e]:zd(n,e,t)}function oE(n,e,t,i=!0){if(n._x_bindings&&n._x_bindings[e]!==void 0)return n._x_bindings[e];if(n._x_inlineBindings&&n._x_inlineBindings[e]!==void 0){let r=n._x_inlineBindings[e];return r.extract=i,md(()=>pi(n,r.expression))}return zd(n,e,t)}function zd(n,e,t){let i=n.getAttribute(e);return i===null?typeof t=="function"?t():t:i===""?!0:Bd(e)?!![e,"true"].includes(i):i}function Vs(n){return n.type==="checkbox"||n.localName==="ui-checkbox"||n.localName==="ui-switch"}function ql(n){return n.type==="radio"||n.localName==="ui-radio"}function Hd(n,e){let t;return function(){const i=this,r=arguments,s=function(){t=null,n.apply(i,r)};clearTimeout(t),t=setTimeout(s,e)}}function Vd(n,e){let t;return function(){let i=this,r=arguments;t||(n.apply(i,r),t=!0,setTimeout(()=>t=!1,e))}}function Gd({get:n,set:e},{get:t,set:i}){let r=!0,s,a=Ai(()=>{let o=n(),l=t();if(r)i(Ya(o)),r=!1;else{let c=JSON.stringify(o),u=JSON.stringify(l);c!==s?i(Ya(o)):c!==u&&e(Ya(l))}s=JSON.stringify(n()),JSON.stringify(t())});return()=>{ar(a)}}function Ya(n){return typeof n=="object"?JSON.parse(JSON.stringify(n)):n}function lE(n){(Array.isArray(n)?n:[n]).forEach(t=>t(cr))}var wn={},Ou=!1;function cE(n,e){if(Ou||(wn=sr(wn),Ou=!0),e===void 0)return wn[n];wn[n]=e,typeof e=="object"&&e!==null&&e._x_interceptor?wn[n]=e.initialize(wn,n,n,()=>{}):Fl(wn[n]),typeof e=="object"&&e!==null&&e.hasOwnProperty("init")&&typeof e.init=="function"&&wn[n].init()}function uE(){return wn}var kd={};function fE(n,e){let t=typeof e!="function"?()=>e:e;return n instanceof Element?Wd(n,t()):(kd[n]=t,()=>{})}function dE(n){return Object.entries(kd).forEach(([e,t])=>{Object.defineProperty(n,e,{get(){return(...i)=>t(...i)}})}),n}function Wd(n,e,t){let i=[];for(;i.length;)i.pop()();let r=Object.entries(e).map(([a,o])=>({name:a,value:o})),s=xd(r);return r=r.map(a=>s.find(o=>o.name===a.name)?{name:`x-bind:${a.name}`,value:`"${a.value}"`}:a),zl(n,r,t).map(a=>{i.push(a.runCleanups),a()}),()=>{for(;i.length;)i.pop()()}}var Xd={};function hE(n,e){Xd[n]=e}function pE(n,e){return Object.entries(Xd).forEach(([t,i])=>{Object.defineProperty(n,t,{get(){return(...r)=>i.bind(e)(...r)},enumerable:!1})}),n}var mE={get reactive(){return sr},get release(){return ar},get effect(){return Ai},get raw(){return td},get transaction(){return rM},version:"3.16.1",flushAndStopDeferringMutations:cM,dontAutoEvaluateFunctions:md,disableEffectScheduling:tM,startObservingMutations:Ul,stopObservingMutations:cd,setReactivityEngine:nM,onAttributeRemoved:od,onAttributesAdded:ad,closestDataStack:Ei,skipDuringClone:Qn,onlyDuringClone:WM,addRootSelector:Pd,addInitSelector:Dd,setErrorHandler:mM,interceptClone:js,addScopeToNode:Gr,deferMutations:lM,mapAttributes:Hl,evaluateLater:Ft,interceptInit:IM,initInterceptors:Fl,injectMagics:Lr,setEvaluator:gM,setRawEvaluator:xM,mergeProxies:yi,extractProp:oE,findClosest:Ln,onElRemoved:Dl,closestRoot:Js,destroyTree:lr,interceptor:dd,transition:il,setStyles:Qs,mutateDom:_t,directive:St,entangle:Gd,throttle:Vd,debounce:Hd,evaluate:pi,evaluateRaw:yM,initTree:Nn,nextTick:kl,prefixed:or,prefix:TM,plugin:lE,magic:an,store:cE,start:DM,clone:qM,cloneNode:XM,bound:aE,$data:ud,watch:nd,walk:bi,data:hE,bind:fE},cr=mE;function _E(n,e){const t=Object.create(null),i=n.split(",");for(let r=0;r<i.length;r++)t[i[r]]=!0;return r=>!!t[r]}var gE=Object.freeze({}),xE=Object.prototype.hasOwnProperty,ea=(n,e)=>xE.call(n,e),mi=Array.isArray,wr=n=>qd(n)==="[object Map]",vE=n=>typeof n=="string",Yl=n=>typeof n=="symbol",ta=n=>n!==null&&typeof n=="object",SE=Object.prototype.toString,qd=n=>SE.call(n),Yd=n=>qd(n).slice(8,-1),$l=n=>vE(n)&&n!=="NaN"&&n[0]!=="-"&&""+parseInt(n,10)===n,ME=n=>{const e=Object.create(null);return t=>e[t]||(e[t]=n(t))},EE=ME(n=>n.charAt(0).toUpperCase()+n.slice(1)),$d=(n,e)=>n!==e&&(n===n||e===e),sl=new WeakMap,Mr=[],dn,_i=Symbol("iterate"),al=Symbol("Map key iterate");function yE(n){return n&&n._isEffect===!0}function bE(n,e=gE){yE(n)&&(n=n.raw);const t=wE(n,e);return e.lazy||t(),t}function TE(n){n.active&&(Kd(n),n.options.onStop&&n.options.onStop(),n.active=!1)}var AE=0;function wE(n,e){const t=function(){if(!t.active)return n();if(!Mr.includes(t)){Kd(t);try{return CE(),Mr.push(t),dn=t,n()}finally{Mr.pop(),Zd(),dn=Mr[Mr.length-1]}}};return t.id=AE++,t.allowRecurse=!!e.allowRecurse,t._isEffect=!0,t.active=!0,t.raw=n,t.deps=[],t.options=e,t}function Kd(n){const{deps:e}=n;if(e.length){for(let t=0;t<e.length;t++)e[t].delete(n);e.length=0}}var er=!0,Kl=[];function RE(){Kl.push(er),er=!1}function CE(){Kl.push(er),er=!0}function Zd(){const n=Kl.pop();er=n===void 0?!0:n}function rn(n,e,t){if(!er||dn===void 0)return;let i=sl.get(n);i||sl.set(n,i=new Map);let r=i.get(t);r||i.set(t,r=new Set),r.has(dn)||(r.add(dn),dn.deps.push(r),dn.options.onTrack&&dn.options.onTrack({effect:dn,target:n,type:e,key:t}))}function Jn(n,e,t,i,r,s){const a=sl.get(n);if(!a)return;const o=new Set,l=u=>{u&&u.forEach(h=>{(h!==dn||h.allowRecurse)&&o.add(h)})};if(e==="clear")a.forEach(l);else if(t==="length"&&mi(n))a.forEach((u,h)=>{(h==="length"||h>=i)&&l(u)});else switch(t!==void 0&&l(a.get(t)),e){case"add":mi(n)?$l(t)&&l(a.get("length")):(l(a.get(_i)),wr(n)&&l(a.get(al)));break;case"delete":mi(n)||(l(a.get(_i)),wr(n)&&l(a.get(al)));break;case"set":wr(n)&&l(a.get(_i));break}const c=u=>{u.options.onTrigger&&u.options.onTrigger({effect:u,target:n,key:t,type:e,newValue:i,oldValue:r,oldTarget:s}),u.options.scheduler?u.options.scheduler(u):u()};o.forEach(c)}var PE=_E("__proto__,__v_isRef,__isVue"),Jd=new Set(Object.getOwnPropertyNames(Symbol).map(n=>Symbol[n]).filter(Yl)),DE=Qd(),LE=Qd(!0),Fu=IE();function IE(){const n={};return["includes","indexOf","lastIndexOf"].forEach(e=>{n[e]=function(...t){const i=lt(this);for(let s=0,a=this.length;s<a;s++)rn(i,"get",s+"");const r=i[e](...t);return r===-1||r===!1?i[e](...t.map(lt)):r}}),["push","pop","shift","unshift","splice"].forEach(e=>{n[e]=function(...t){RE();const i=lt(this)[e].apply(this,t);return Zd(),i}}),n}function Qd(n=!1,e=!1){return function(i,r,s){if(r==="__v_isReactive")return!n;if(r==="__v_isReadonly")return n;if(r==="__v_raw"&&s===(n?e?YE:nh:e?qE:th).get(i))return i;const a=mi(i);if(!n&&a&&ea(Fu,r))return Reflect.get(Fu,r,s);const o=Reflect.get(i,r,s);return(Yl(r)?Jd.has(r):PE(r))||(n||rn(i,"get",r),e)?o:ol(o)?!a||!$l(r)?o.value:o:ta(o)?n?ih(o):jl(o):o}}var UE=NE();function NE(n=!1){return function(t,i,r,s){let a=t[i];if(!n&&(r=lt(r),a=lt(a),!mi(t)&&ol(a)&&!ol(r)))return a.value=r,!0;const o=mi(t)&&$l(i)?Number(i)<t.length:ea(t,i),l=Reflect.set(t,i,r,s);return t===lt(s)&&(o?$d(r,a)&&Jn(t,"set",i,r,a):Jn(t,"add",i,r)),l}}function OE(n,e){const t=ea(n,e),i=n[e],r=Reflect.deleteProperty(n,e);return r&&t&&Jn(n,"delete",e,void 0,i),r}function FE(n,e){const t=Reflect.has(n,e);return(!Yl(e)||!Jd.has(e))&&rn(n,"has",e),t}function BE(n){return rn(n,"iterate",mi(n)?"length":_i),Reflect.ownKeys(n)}var zE={get:DE,set:UE,deleteProperty:OE,has:FE,ownKeys:BE},HE={get:LE,set(n,e){return console.warn(`Set operation on key "${String(e)}" failed: target is readonly.`,n),!0},deleteProperty(n,e){return console.warn(`Delete operation on key "${String(e)}" failed: target is readonly.`,n),!0}},Zl=n=>ta(n)?jl(n):n,Jl=n=>ta(n)?ih(n):n,Ql=n=>n,na=n=>Reflect.getPrototypeOf(n);function ps(n,e,t=!1,i=!1){n=n.__v_raw;const r=lt(n),s=lt(e);e!==s&&!t&&rn(r,"get",e),!t&&rn(r,"get",s);const{has:a}=na(r),o=i?Ql:t?Jl:Zl;if(a.call(r,e))return o(n.get(e));if(a.call(r,s))return o(n.get(s));n!==r&&n.get(e)}function ms(n,e=!1){const t=this.__v_raw,i=lt(t),r=lt(n);return n!==r&&!e&&rn(i,"has",n),!e&&rn(i,"has",r),n===r?t.has(n):t.has(n)||t.has(r)}function _s(n,e=!1){return n=n.__v_raw,!e&&rn(lt(n),"iterate",_i),Reflect.get(n,"size",n)}function Bu(n){n=lt(n);const e=lt(this);return na(e).has.call(e,n)||(e.add(n),Jn(e,"add",n,n)),this}function zu(n,e){e=lt(e);const t=lt(this),{has:i,get:r}=na(t);let s=i.call(t,n);s?eh(t,i,n):(n=lt(n),s=i.call(t,n));const a=r.call(t,n);return t.set(n,e),s?$d(e,a)&&Jn(t,"set",n,e,a):Jn(t,"add",n,e),this}function Hu(n){const e=lt(this),{has:t,get:i}=na(e);let r=t.call(e,n);r?eh(e,t,n):(n=lt(n),r=t.call(e,n));const s=i?i.call(e,n):void 0,a=e.delete(n);return r&&Jn(e,"delete",n,void 0,s),a}function Vu(){const n=lt(this),e=n.size!==0,t=wr(n)?new Map(n):new Set(n),i=n.clear();return e&&Jn(n,"clear",void 0,void 0,t),i}function gs(n,e){return function(i,r){const s=this,a=s.__v_raw,o=lt(a),l=e?Ql:n?Jl:Zl;return!n&&rn(o,"iterate",_i),a.forEach((c,u)=>i.call(r,l(c),l(u),s))}}function xs(n,e,t){return function(...i){const r=this.__v_raw,s=lt(r),a=wr(s),o=n==="entries"||n===Symbol.iterator&&a,l=n==="keys"&&a,c=r[n](...i),u=t?Ql:e?Jl:Zl;return!e&&rn(s,"iterate",l?al:_i),{next(){const{value:h,done:d}=c.next();return d?{value:h,done:d}:{value:o?[u(h[0]),u(h[1])]:u(h),done:d}},[Symbol.iterator](){return this}}}}function Xn(n){return function(...e){{const t=e[0]?`on key "${e[0]}" `:"";console.warn(`${EE(n)} operation ${t}failed: target is readonly.`,lt(this))}return n==="delete"?!1:this}}function VE(){const n={get(s){return ps(this,s)},get size(){return _s(this)},has:ms,add:Bu,set:zu,delete:Hu,clear:Vu,forEach:gs(!1,!1)},e={get(s){return ps(this,s,!1,!0)},get size(){return _s(this)},has:ms,add:Bu,set:zu,delete:Hu,clear:Vu,forEach:gs(!1,!0)},t={get(s){return ps(this,s,!0)},get size(){return _s(this,!0)},has(s){return ms.call(this,s,!0)},add:Xn("add"),set:Xn("set"),delete:Xn("delete"),clear:Xn("clear"),forEach:gs(!0,!1)},i={get(s){return ps(this,s,!0,!0)},get size(){return _s(this,!0)},has(s){return ms.call(this,s,!0)},add:Xn("add"),set:Xn("set"),delete:Xn("delete"),clear:Xn("clear"),forEach:gs(!0,!0)};return["keys","values","entries",Symbol.iterator].forEach(s=>{n[s]=xs(s,!1,!1),t[s]=xs(s,!0,!1),e[s]=xs(s,!1,!0),i[s]=xs(s,!0,!0)}),[n,t,e,i]}var[GE,kE]=VE();function jd(n,e){const t=n?kE:GE;return(i,r,s)=>r==="__v_isReactive"?!n:r==="__v_isReadonly"?n:r==="__v_raw"?i:Reflect.get(ea(t,r)&&r in i?t:i,r,s)}var WE={get:jd(!1)},XE={get:jd(!0)};function eh(n,e,t){const i=lt(t);if(i!==t&&e.call(n,i)){const r=Yd(n);console.warn(`Reactive ${r} contains both the raw and reactive versions of the same object${r==="Map"?" as keys":""}, which can lead to inconsistencies. Avoid differentiating between the raw and reactive versions of an object and only use the reactive version if possible.`)}}var th=new WeakMap,qE=new WeakMap,nh=new WeakMap,YE=new WeakMap;function $E(n){switch(n){case"Object":case"Array":return 1;case"Map":case"Set":case"WeakMap":case"WeakSet":return 2;default:return 0}}function KE(n){return n.__v_skip||!Object.isExtensible(n)?0:$E(Yd(n))}function jl(n){return n&&n.__v_isReadonly?n:rh(n,!1,zE,WE,th)}function ih(n){return rh(n,!0,HE,XE,nh)}function rh(n,e,t,i,r){if(!ta(n))return console.warn(`value cannot be made reactive: ${String(n)}`),n;if(n.__v_raw&&!(e&&n.__v_isReactive))return n;const s=r.get(n);if(s)return s;const a=KE(n);if(a===0)return n;const o=new Proxy(n,a===2?i:t);return r.set(n,o),o}function lt(n){return n&&lt(n.__v_raw)||n}function ol(n){return!!(n&&n.__v_isRef===!0)}an("nextTick",()=>kl);an("dispatch",n=>Ar.bind(Ar,n));an("watch",(n,{evaluateLater:e,cleanup:t})=>(i,r)=>{let s=e(i),o=nd(()=>{let l;return s(c=>l=c),l},r);t(o)});an("store",uE);an("data",n=>ud(n));an("root",n=>Js(n));an("refs",n=>(n._x_refs_proxy||(n._x_refs_proxy=yi(ZE(n))),n._x_refs_proxy));function ZE(n){let e=[];return Ln(n,t=>{t._x_refs&&e.push(t._x_refs)}),e}var $a={};function sh(n){return $a[n]||($a[n]=0),++$a[n]}function JE(n,e){return Ln(n,t=>{if(t._x_ids&&t._x_ids[e])return!0})}function QE(n,e){n._x_ids||(n._x_ids={}),n._x_ids[e]||(n._x_ids[e]=sh(e))}an("id",(n,{cleanup:e})=>(t,i=null)=>{let r=`${t}${i?`-${i}`:""}`;return jE(n,r,e,()=>{let s=JE(n,t),a=s?s._x_ids[t]:sh(t);return i?`${t}-${a}-${i}`:`${t}-${a}`})});js((n,e)=>{n._x_id&&(e._x_id=n._x_id)});function jE(n,e,t,i){if(n._x_id||(n._x_id={}),n._x_id[e])return n._x_id[e];let r=i();return n._x_id[e]=r,t(()=>{delete n._x_id[e]}),r}an("el",n=>n);ah("Focus","focus","focus");ah("Persist","persist","persist");function ah(n,e,t){an(e,i=>Mn(`You can't use [$${e}] without first installing the "${n}" plugin here: https://alpinejs.dev/plugins/${t}`,i))}St("modelable",(n,{expression:e},{effect:t,evaluateLater:i,cleanup:r})=>{let s=i(e),a=()=>{let u;return s(h=>u=h),u},o=i(`${e} = __placeholder`),l=u=>o(()=>{},{scope:{__placeholder:u}}),c=a();l(c),queueMicrotask(()=>{if(!n._x_model)return;n._x_removeModelListeners.default();let u=n._x_model.get,h=n._x_model.setWithModifiers,d=Gd({get(){return u()},set(m){h(m)}},{get(){return a()},set(m){l(m)}});r(d)})});St("teleport",(n,{modifiers:e,expression:t},{cleanup:i})=>{n.tagName.toLowerCase()!=="template"&&Mn("x-teleport can only be used on a <template> tag",n);let r=Gu(t),s=n.content.cloneNode(!0).firstElementChild;n._x_teleport=s,s._x_teleportBack=n,n.setAttribute("data-teleport-template",!0),s.setAttribute("data-teleport-target",!0),n._x_forwardEvents&&n._x_forwardEvents.forEach(o=>{s.addEventListener(o,l=>{l.stopPropagation(),n.dispatchEvent(new l.constructor(l.type,l))})}),Gr(s,{},n);let a=(o,l,c)=>{c.includes("prepend")?l.parentNode.insertBefore(o,l):c.includes("append")?l.parentNode.insertBefore(o,l.nextSibling):l.appendChild(o)};_t(()=>{Qn(()=>{a(s,r,e),Nn(s)})()}),n._x_teleportPutBack=()=>{let o=Gu(t);_t(()=>{a(n._x_teleport,o,e)})},i(()=>_t(()=>{s.remove(),lr(s)}))});var ey=document.createElement("div");function Gu(n){let e=Qn(()=>document.querySelector(n),()=>ey)();return e||Mn(`Cannot find x-teleport element for selector: "${n}"`),e}var oh=()=>{};oh.inline=(n,{modifiers:e},{cleanup:t})=>{e.includes("self")?n._x_ignoreSelf=!0:n._x_ignore=!0,t(()=>{e.includes("self")?delete n._x_ignoreSelf:delete n._x_ignore})};St("ignore",oh);St("effect",Qn((n,{expression:e},{effect:t})=>{t(Ft(n,e))}));function Wi(n,e,t,i){let r=n,s=l=>i(l),a={},o=(l,c)=>u=>c(l,u);return t.includes("dot")&&(e=ty(e)),t.includes("camel")&&(e=ny(e)),t.includes("capture")&&(a.capture=!0),t.includes("window")&&(r=window),t.includes("document")&&(r=document),t.includes("passive")&&(a.passive=t[t.indexOf("passive")+1]!=="false"),s=lh(t,s),t.includes("prevent")&&(s=o(s,(l,c)=>{c.preventDefault(),l(c)})),t.includes("stop")&&(s=o(s,(l,c)=>{c.stopPropagation(),l(c)})),t.includes("once")&&(s=o(s,(l,c)=>{l(c),r.removeEventListener(e,s,a)})),(t.includes("away")||t.includes("outside"))&&(r=document,s=o(s,(l,c)=>{n.contains(c.target)||c.target.isConnected!==!1&&(n.offsetWidth<1&&n.offsetHeight<1||n._x_isShown!==!1&&l(c))})),t.includes("self")&&(s=o(s,(l,c)=>{c.target===n&&l(c)})),e==="submit"&&(s=o(s,(l,c)=>{c.target._x_pendingModelUpdates&&c.target._x_pendingModelUpdates.forEach(u=>u()),l(c)})),(ry(e)||ch(e))&&(s=o(s,(l,c)=>{sy(c,t)||l(c)})),r.addEventListener(e,s,a),()=>{r.removeEventListener(e,s,a)}}function lh(n,e){if(n.includes("debounce")){let t=n[n.indexOf("debounce")+1]||"invalid-wait",i=Gs(t.split("ms")[0])?Number(t.split("ms")[0]):250;e=Hd(e,i)}if(n.includes("throttle")){let t=n[n.indexOf("throttle")+1]||"invalid-wait",i=Gs(t.split("ms")[0])?Number(t.split("ms")[0]):250;e=Vd(e,i)}return e}function ty(n){return n.replace(/-/g,".")}function ny(n){return n.toLowerCase().replace(/-(\w)/g,(e,t)=>t.toUpperCase())}function Gs(n){return!Array.isArray(n)&&!isNaN(n)}function iy(n){return[" ","_"].includes(n)?n:n.replace(/([a-z])([A-Z])/g,"$1-$2").replace(/[_\s]/,"-").toLowerCase()}function ry(n){return["keydown","keyup"].includes(n)}function ch(n){return["contextmenu","click","mouse"].some(e=>n.includes(e))}function sy(n,e){let t=e.filter(s=>!["window","document","prevent","stop","once","capture","self","away","outside","passive","preserve-scroll","blur","change","lazy"].includes(s));if(t.includes("debounce")){let s=t.indexOf("debounce");t.splice(s,Gs((t[s+1]||"invalid-wait").split("ms")[0])?2:1)}if(t.includes("throttle")){let s=t.indexOf("throttle");t.splice(s,Gs((t[s+1]||"invalid-wait").split("ms")[0])?2:1)}if(t.length===0||t.length===1&&ku(n.key).includes(t[0]))return!1;const r=["ctrl","shift","alt","meta","cmd","super"].filter(s=>t.includes(s));return t=t.filter(s=>!r.includes(s)),!(r.length>0&&r.filter(a=>((a==="cmd"||a==="super")&&(a="meta"),n[`${a}Key`])).length===r.length&&(ch(n.type)||ku(n.key).includes(t[0])))}function ku(n){if(!n)return[];n=iy(n);let e={ctrl:"control",slash:"/",space:" ",spacebar:" ",cmd:"meta",esc:"escape",up:"arrow-up",down:"arrow-down",left:"arrow-left",right:"arrow-right",period:".",comma:",",equal:"=",minus:"-",underscore:"_"};return e[n]=n,Object.keys(e).map(t=>{if(e[t]===n)return t}).filter(t=>t)}St("model",(n,{modifiers:e,expression:t},{effect:i,cleanup:r})=>{let s=n;e.includes("parent")&&(s=Ln(n,S=>S!==n));let a=Ft(s,t),o;typeof t=="string"?o=Ft(s,`${t} = __placeholder`):typeof t=="function"&&typeof t()=="string"?o=Ft(s,`${t()} = __placeholder`):o=()=>{};let l=()=>{let S;return a(p=>S=p),Wu(S)?S.get():S},c=S=>{let p;a(f=>p=f),Wu(p)?p.set(S):o(()=>{},{scope:{__placeholder:S}})};typeof t=="string"&&n.type==="radio"&&_t(()=>{n.hasAttribute("name")||n.setAttribute("name",t)});let u=e.includes("change")||e.includes("lazy"),h=e.includes("blur"),d=e.includes("enter"),m=u||h||d,x;if(Zn)x=()=>{};else if(m){let S=[],p=f=>c(vs(n,e,f,l()));if(u&&S.push(Wi(n,"change",e,p)),h&&(S.push(Wi(n,"blur",e,p)),n.form)){let f=n.form,y=()=>p({target:n});f._x_pendingModelUpdates||(f._x_pendingModelUpdates=[]),f._x_pendingModelUpdates.push(y),r(()=>{f._x_pendingModelUpdates&&f._x_pendingModelUpdates.splice(f._x_pendingModelUpdates.indexOf(y),1)})}d&&S.push(Wi(n,"keydown",e,f=>{f.key==="Enter"&&p(f)})),x=()=>S.forEach(f=>f())}else{let S=n.tagName.toLowerCase()==="select"||["checkbox","radio"].includes(n.type)?"change":"input";x=Wi(n,S,e,p=>{c(vs(n,e,p,l()))})}if(e.includes("fill")&&([void 0,null,""].includes(l())||Vs(n)&&Array.isArray(l())||n.tagName.toLowerCase()==="select"&&n.multiple)&&c(vs(n,e,{target:n},l())),n._x_removeModelListeners||(n._x_removeModelListeners={}),n._x_removeModelListeners.default=x,r(()=>n._x_removeModelListeners.default()),n.form){let S=Wi(n.form,"reset",[],p=>{kl(()=>n._x_model&&n._x_model.set(vs(n,e,{target:n},l())))});r(()=>S())}if(n._x_model={get(){return l()},set(S){c(S)},setWithModifiers:lh(e,c)},n._x_forceModelUpdate=S=>{S===void 0&&typeof t=="string"&&t.match(/\./)&&(S=""),_t(()=>{Vs(n)?Array.isArray(S)?n.checked=S.some(p=>p==n.value):n.checked=!!S:ql(n)?typeof S=="boolean"?n.checked=Cs(n.value)===S:n.checked=n.value==S:Fd(n,"value",S)})},n.tagName==="SELECT"){let S=new MutationObserver(()=>{n._x_forceModelUpdate(l())});S.observe(n,{childList:!0}),r(()=>S.disconnect())}i(()=>{let S=l();e.includes("unintrusive")&&document.activeElement.isSameNode(n)||n._x_forceModelUpdate(S)})});function vs(n,e,t,i){return _t(()=>{if(t instanceof CustomEvent&&t.detail!==void 0)return t.detail!==null&&t.detail!==void 0?t.detail:t.target.value;if(Vs(n))if(Array.isArray(i)){let r=null;return e.includes("number")?r=Ka(t.target.value):e.includes("boolean")?r=Cs(t.target.value):r=t.target.value,t.target.checked?i.includes(r)?i:i.concat([r]):i.filter(s=>!ay(s,r))}else return t.target.checked;else{if(n.tagName.toLowerCase()==="select"&&n.multiple)return e.includes("number")?Array.from(t.target.selectedOptions).map(r=>{let s=r.value||r.text;return Ka(s)}):e.includes("boolean")?Array.from(t.target.selectedOptions).map(r=>{let s=r.value||r.text;return Cs(s)}):Array.from(t.target.selectedOptions).map(r=>r.value||r.text);{let r;return ql(n)?t.target.checked?r=t.target.value:r=i:r=t.target.value,e.includes("number")?Ka(r):e.includes("boolean")?Cs(r):e.includes("trim")?r.trim():r}}})}function Ka(n){let e=n?parseFloat(n):null;return oy(e)?e:n}function ay(n,e){return n==e}function oy(n){return!Array.isArray(n)&&!isNaN(n)}function Wu(n){return n!==null&&typeof n=="object"&&typeof n.get=="function"&&typeof n.set=="function"}St("cloak",n=>queueMicrotask(()=>_t(()=>n.removeAttribute(or("cloak")))));Dd(()=>`[${or("init")}]`);St("init",Qn((n,{expression:e},{evaluate:t})=>typeof e=="string"?!!e.trim()&&t(e,{},!1):t(e,{},!1)));St("text",(n,{expression:e},{effect:t,evaluateLater:i})=>{let r=i(e);t(()=>{r(s=>{_t(()=>{n.textContent=s})})})});St("html",(n,{expression:e},{effect:t,evaluateLater:i})=>{let r=i(e);t(()=>{r(s=>{_t(()=>{n.innerHTML=s??"",n._x_ignoreSelf=!0,Nn(n),delete n._x_ignoreSelf})})})});Hl(Md(":",Ed(or("bind:"))));var uh=(n,{value:e,modifiers:t,expression:i,original:r},{effect:s,cleanup:a})=>{if(!e){let l={};dE(l),Ft(n,i)(u=>{Wd(n,u,r)},{scope:l});return}if(e==="key")return ly(n,i);if(n._x_inlineBindings&&n._x_inlineBindings[e]&&n._x_inlineBindings[e].extract)return;let o=Ft(n,i);s(()=>o(l=>{l===void 0&&typeof i=="string"&&i.match(/\./)&&(l=""),_t(()=>Fd(n,e,l,t))})),a(()=>{n._x_undoAddedClasses&&n._x_undoAddedClasses(),n._x_undoAddedStyles&&n._x_undoAddedStyles()})};uh.inline=(n,{value:e,modifiers:t,expression:i})=>{e&&(n._x_inlineBindings||(n._x_inlineBindings={}),n._x_inlineBindings[e]={expression:i,extract:!1})};St("bind",uh);function ly(n,e){n._x_keyExpression=e}Pd(()=>`[${or("data")}]`);var ri=Symbol();St("data",(n,{expression:e},{cleanup:t})=>{if(uy(n))return;let i=n[ri];if(i?.expression===e)return;e=e===""?"{}":e;let r={};Lr(r,n);let s={};pE(s,r);let a=pi(n,e,{scope:s});(a===void 0||a===!0)&&(a={}),Lr(a,n);let o;if(i?.reactiveData){o=i.reactiveData,cy(o,a);let c={expression:e};n[ri]=c,queueMicrotask(()=>{n[ri]===c&&delete n[ri]})}else o=sr(a);Fl(o,t);let l=Gr(n,o);o.init&&pi(n,o.init),t(()=>{o.destroy&&pi(n,o.destroy),l();let c={reactiveData:o};n[ri]=c,queueMicrotask(()=>{n[ri]===c&&delete n[ri]})})});function cy(n,e){Object.keys(e).forEach(t=>{let i=Object.getOwnPropertyDescriptor(e,t),r=Object.getOwnPropertyDescriptor(n,t);i.get||i.set||r?.get||r?.set?(r&&delete n[t],r||(n[t]=void 0),i.get||i.set?Object.defineProperty(n,t,i):n[t]=e[t]):n[t]=e[t]}),Object.keys(n).filter(t=>!Object.prototype.hasOwnProperty.call(e,t)).forEach(t=>delete n[t])}js((n,e)=>{n._x_dataStack&&(e._x_dataStack=n._x_dataStack,e.setAttribute("data-has-alpine-state",!0))});function uy(n){return Zn?rl?!0:n.hasAttribute("data-has-alpine-state"):!1}St("show",(n,{modifiers:e,expression:t},{effect:i})=>{let r=Ft(n,t);n._x_doHide||(n._x_doHide=()=>{_t(()=>{n.style.setProperty("display","none",e.includes("important")?"important":void 0)})}),n._x_doShow||(n._x_doShow=()=>{_t(()=>{n.style.length===1&&n.style.display==="none"?n.removeAttribute("style"):n.style.removeProperty("display")})});let s=()=>{n._x_doHide(),n._x_isShown=!1},a=()=>{n._x_doShow(),n._x_isShown=!0},o=()=>setTimeout(a),l=nl(h=>h?a():s(),h=>{typeof n._x_toggleAndCascadeWithTransitions=="function"?n._x_toggleAndCascadeWithTransitions(n,h,a,s):h?o():s()}),c,u=!0;i(()=>r(h=>{!u&&h===c||(e.includes("immediate")&&(h?o():s()),l(h),c=h,u=!1)}))});St("for",Qn((n,{expression:e},{effect:t,cleanup:i})=>{let r=hy(e),s=Ft(n,r.items),a=Ft(n,n._x_keyExpression||"index");n._x_lookup=new Map,t(()=>dy(n,r,s,a)),i(()=>{n._x_lookup.forEach(o=>_t(()=>{lr(o),o.remove()})),delete n._x_lookup,delete n._x_lastRenderedEl})}));function fy(n){return e=>{Object.entries(e).forEach(([t,i])=>{n[t]=i})}}function dy(n,e,t,i){t(r=>{my(r)&&(r=Array.from({length:r},(c,u)=>u+1)),r==null&&(r=[]),r instanceof Set&&(r=Array.from(r)),r instanceof Map&&(r=Array.from(r));let s=n._x_lookup,a=new Map;n._x_lookup=a;let o=_y(r),l=Object.entries(r).map(([c,u])=>{o||(c=parseInt(c));let h=py(e,u,c,r),d;return i(m=>{typeof m=="object"&&Mn("x-for key cannot be an object, it must be a string or an integer",n),s.has(m)&&(a.set(m,s.get(m)),s.delete(m)),d=m},{scope:{index:c,...h}}),[d,h]});_t(()=>{s.forEach(h=>{lr(h),h.remove()});let c=new Set,u=n;l.forEach(([h,d])=>{if(a.has(h)){let S=a.get(h);S._x_refreshXForScope(d),u.nextElementSibling!==S&&(u.nextElementSibling&&S.replaceWith(u.nextElementSibling),u.after(S)),u=S,S._x_currentIfEl&&(S.nextElementSibling!==S._x_currentIfEl&&u.after(S._x_currentIfEl),u=S._x_currentIfEl);return}n.content.children.length>1&&Mn("x-for templates require a single root element, additional elements will be ignored.",n);let m=document.importNode(n.content,!0).firstElementChild,x=sr(d);Gr(m,x,n),m._x_refreshXForScope=fy(x),a.set(h,m),c.add(m),u.after(m),u=m}),c.forEach(h=>Nn(h)),u!==n?n._x_lastRenderedEl=u:delete n._x_lastRenderedEl})})}function hy(n){let e=/,([^,\}\]]*)(?:,([^,\}\]]*))?$/,t=/^\s*\(|\)\s*$/g,i=/([\s\S]*?)\s+(?:in|of)\s+([\s\S]*)/,r=n.match(i);if(!r)return;let s={};s.items=r[2].trim();let a=r[1].replace(t,"").trim(),o=a.match(e);return o?(s.item=a.replace(e,"").trim(),s.index=o[1].trim(),o[2]&&(s.collection=o[2].trim())):s.item=a,s}function py(n,e,t,i){let r={};return/^\[.*\]$/.test(n.item)&&Array.isArray(e)?n.item.replace("[","").replace("]","").split(",").map(a=>a.trim()).forEach((a,o)=>{r[a]=e[o]}):/^\{.*\}$/.test(n.item)&&!Array.isArray(e)&&typeof e=="object"?n.item.replace("{","").replace("}","").split(",").map(a=>a.trim()).forEach(a=>{r[a]=e[a]}):r[n.item]=e,n.index&&(r[n.index]=t),n.collection&&(r[n.collection]=i),r}function my(n){return typeof n!="object"&&!isNaN(n)}function _y(n){return typeof n=="object"&&!Array.isArray(n)}function fh(){}fh.inline=(n,{expression:e},{cleanup:t})=>{let i=Js(n);i&&(i._x_refs||(i._x_refs={}),i._x_refs[e]=n,t(()=>delete i._x_refs[e]))};St("ref",fh);St("if",Qn((n,{expression:e},{effect:t,cleanup:i})=>{n.tagName.toLowerCase()!=="template"&&Mn("x-if can only be used on a <template> tag",n);let r=Ft(n,e),s=()=>{if(n._x_currentIfEl)return n._x_currentIfEl;let o=n.content.cloneNode(!0).firstElementChild;return Gr(o,{},n),_t(()=>{n.after(o),Nn(o)}),n._x_currentIfEl=o,n._x_lastRenderedEl=o,n._x_undoIf=()=>{_t(()=>{lr(o),o.remove()}),delete n._x_currentIfEl,delete n._x_lastRenderedEl},o},a=()=>{n._x_undoIf&&(n._x_undoIf(),delete n._x_undoIf)};t(()=>r(o=>{o?s():a()})),i(()=>n._x_undoIf&&n._x_undoIf())}));St("id",(n,{expression:e},{evaluate:t})=>{t(e).forEach(r=>QE(n,r))});js((n,e)=>{n._x_ids&&(e._x_ids=n._x_ids)});Hl(Md("@",Ed(or("on:"))));St("on",Qn((n,{value:e,modifiers:t,expression:i},{cleanup:r})=>{let s=i?Ft(n,i):()=>{};n.tagName.toLowerCase()==="template"&&(n._x_forwardEvents||(n._x_forwardEvents=[]),n._x_forwardEvents.includes(e)||n._x_forwardEvents.push(e));let a=Wi(n,e,t,o=>{s(()=>{},{scope:{$event:o},params:[o]})});r(()=>a())}));ia("Collapse","collapse","collapse");ia("Intersect","intersect","intersect");ia("Focus","trap","focus");ia("Mask","mask","mask");function ia(n,e,t){St(e,i=>Mn(`You can't use [x-${e}] without first installing the "${n}" plugin here: https://alpinejs.dev/plugins/${t}`,i))}cr.setEvaluator(vM);cr.setRawEvaluator(bM);cr.setReactivityEngine({reactive:jl,effect:bE,release:TE,raw:lt});var gy=cr,dh=gy;window.Alpine=dh;dh.start();
