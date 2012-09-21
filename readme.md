# Adds loadident to all kind of oxbase objects #

Simple as this, this module will help you to load categories, articles, users etc. in a template using an ident. 
This is the same way it was already done for oxcontents. Comes with a smarty plugin for loading your things:

```
[{agload ident="MYIDENT" type="oxarticle or whatever you want" assign=oObject}]

[{$oObject->oxarticles__oxtitle->value}]
```