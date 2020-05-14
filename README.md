<h1 align="center"><a href="https://pan.layne666.cn" target="_blank">OneIndex</a></h1>

> Onedrive Directory Index

## 功能

Không chiếm dung lượng máy chủ, không chiếm lưu lượng máy chủ,

Liệt kê trực tiếp thư mục OneDrive và tải tệp trực tiếp.

## 伪静态

```nginx
if (!-f $request_filename){
set $rule_0 1$rule_0;
}
if (!-d $request_filename){
set $rule_0 2$rule_0;
}
if ($rule_0 = "21"){
rewrite ^/(.*)$ /index.php?/$1 last;
}
```

## 预览图

![](http://file.layne666.cn/img/20191125233913.png)

![](http://file.layne666.cn/img/20200211210637.png)

![](http://file.layne666.cn/img/20200211210644.png)