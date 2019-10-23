<?php

/***
 * 
 * 什么是cookie？
 *      在网站中，http请求是无状态的。也就是说即使第一次和服务器连接后并且登录成功后，第二次请求服务器依然不能知道当前请求
 *      是哪个用户。cookie的出现就是为了解决这个问题，第一次登录后服务器返回一些数据（cookie）给浏览器 ，然后浏览器保存在本地 ，
 *      当该用户发送第二次请求的时候，就会自动的把上次请求存储的cookie数据自动的携带给服务器，服务器通过浏览器携带的数据就能判断
 *      当前用户是哪个了。cookie存储的数据量有限，不同的浏览器有不同的存储大小，但一般不超过4KB。因此使用cookie只能存储一些小量的数据。
 *      
 *      cookie常用于识别用户，是一种服务器留在用户计算机上的小型文件，每当同一台计算机通过浏览器发送请求页面时，这台计算机将会发送cookie
 *      创建 获取 删除
 * 
 *      创建cookie：setcookie(name,value, expire, path, domain);
 *          setcookie("user", "php", time()+3600);// 设置的是前三个参数
 *      删除cookie：setcookie("user", "", time()-3600);// 将第三个参数设置为过期时间
 * 
 * 
 * 什么是session？
 *      session和cookie的作用有点类似，都是为了存储用户相关的信息。不同的是，cookie是存储在本地浏览器，而session存储在服务器。存储在服务
 *      器的数据会更加的安全，不容易被窃取。但存储在服务器也有一定的弊端，就是会占用服务器的资源，但现在服务器已经发展至今，一些session信息
 *      还是绰绰有余的。
 * 
 * 
 * 如今数据存储在服务端是通过session和cookie相互结合使用的：
 *      1.通过cookie存储一个session_id，然后具体的数据则是保存在session中。如果用户已经登录，则服务器会在cookie中保存一个session_id，
 *      下次再次请求的时候，会把该session_id携带上来，服务器根据session_id在session库中获取用户的session数据。就能知道该用户到底是谁，以及之前保
 *      存的一些状态信息。这种专业术语叫做server side session。
 * 
 * 
 *      2.用户第一次请求服务器的时候，服务器根据用户提交的相关信息，创建创建对应的 Session ，请求返回时将此 Session 的唯一标识信息 SessionID 返回给浏览器，浏览器接收到服务器返回的 SessionID 信息后，会将此信息存入到 Cookie 中，同时 Cookie 记录此 SessionID 属于哪个域名。
 *      当用户第二次访问服务器的时候，请求会自动判断此域名下是否存在 Cookie 信息，如果存在自动将 Cookie 信息也发送给服务端，服务端会从 Cookie 中获取 SessionID，再根据 SessionID 查找对应的 Session 信息，如果没有找到说明用户没有登录或者登录失效，如果找到 Session 证明用户已经登录可执行后面操作。
 */