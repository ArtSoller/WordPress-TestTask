!function(e){function a(r){if(t[r])return t[r].exports;var n=t[r]={i:r,l:!1,exports:{}};return e[r].call(n.exports,n,n.exports,a),n.l=!0,n.exports}var t={};a.m=e,a.c=t,a.d=function(e,t,r){a.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:r})},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,a){return Object.prototype.hasOwnProperty.call(e,a)},a.p="",a(a.s=0)}([function(e,a,t){"use strict";Object.defineProperty(a,"__esModule",{value:!0});t(1)},function(e,a,t){"use strict";var r=t(2),n=(t.n(r),t(3)),s=(t.n(n),t(4)),__=(t.n(s),wp.i18n.__),c=wp.blocks.registerBlockType,p=wp.components.Button,l={speakerImage:{type:"string",source:"attribute",selector:"img",attribute:"src"},speakerImageId:{type:"number"},speakerName:{type:"array",source:"children",selector:".speaker-name"},speakerJob:{type:"array",source:"children",selector:".speaker-job"},speakerCompany:{type:"array",source:"children",selector:".speaker-company"},speakerDescription:{type:"array",source:"children",selector:".speaker-description"}},o=function(e){var a=e.attributes,t=a.speakerImage,r=a.speakerImageId,n=a.speakerName,c=a.speakerJob,l=a.speakerCompany,o=a.speakerDescription,m=e.setAttributes,i=e.className;return wp.element.createElement("div",{className:i},wp.element.createElement("div",{className:"speaker-wrap -grid"},wp.element.createElement("div",{className:"speaker-image"},wp.element.createElement(s.MediaUpload,{onSelect:function(e){return m({speakerImage:e.url,speakerImageId:e.id})},type:"image",value:r,render:function(e){var a=e.open;return wp.element.createElement(p,{className:r?"image-button":"button button-large",onClick:a},r?wp.element.createElement("img",{src:t,alt:"Speaker"}):__("Upload Image"))}})),wp.element.createElement("div",{className:"speaker-info"},wp.element.createElement("div",{className:"speaker-about"},wp.element.createElement(s.RichText,{tagName:"p",className:"speaker-name",placeholder:__("Name"),value:n,onChange:function(e){return m({speakerName:e})}}),wp.element.createElement(s.RichText,{tagName:"p",className:"speaker-job",placeholder:__("Job"),value:c,onChange:function(e){return m({speakerJob:e})}}),wp.element.createElement(s.RichText,{tagName:"p",className:"speaker-company",placeholder:__("Company"),value:l,onChange:function(e){return m({speakerCompany:e})}})),wp.element.createElement(s.RichText,{tagName:"div",multiline:"p",className:"speaker-description",placeholder:__("Write the description (optional)"),value:o,onChange:function(e){return m({speakerDescription:e})}}))))},m=function(e){var a=e.attributes,t=a.speakerImage,r=a.speakerName,n=a.speakerJob,c=a.speakerCompany,p=a.speakerDescription,l=e.className;return wp.element.createElement("div",{className:l},wp.element.createElement("div",{className:"speaker-wrap overflow"+(t?" -grid":"")},wp.element.createElement(i,{src:t,alt:"Speaker"}),wp.element.createElement("div",{className:"speaker-info"},wp.element.createElement("div",{className:"speaker-about"},wp.element.createElement(s.RichText.Content,{tagName:"p",className:"speaker-name",value:r}),wp.element.createElement(s.RichText.Content,{tagName:"p",className:"speaker-job",value:n}),wp.element.createElement(s.RichText.Content,{tagName:"p",className:"speaker-company",value:c})),wp.element.createElement(s.RichText.Content,{tagName:"div",className:"speaker-description",value:p}))))},i=function(e){var a=e.src,t=e.alt;return a?wp.element.createElement("figure",{className:"speaker-image"},wp.element.createElement("img",{src:a,alt:t||""})):""};c("cra/webcast-speaker",{title:__("CRA - Webcast Speaker"),icon:"groups",category:"common",keywords:[__("CRA - Speaker"),__("CRA - Webcast Speaker"),__("cra-block-webcast-speaker"),__("CRA Block: Webcast Speaker")],attributes:l,edit:function(e){return e.isSelected?o(e):m(e)},save:m})},function(e,a){},function(e,a){},function(e,a){e.exports=wp.blockEditor}]);