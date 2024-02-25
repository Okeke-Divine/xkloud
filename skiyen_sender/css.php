<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

#navbar {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 10px 5px;
  transition: 0.4s;
  width: 100%;
  top: 0;
  z-index: 99;
}

#navbar a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

#navbar #logo {
  font-size: 35px;
  font-weight: bold;
  transition: 0.4s;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: dodgerblue;
  color: white;
}

#navbar-right {
  float: right;
}

@media screen and (max-width: 580px) {
  #navbar {
    padding: 20px 10px !important;
  }
  #navbar a {
    float: none;
    display: block;
    text-align: left;
  }
  #navbar-right {
    float: none;
  }
}
</style>
<style type="text/css">
	.user_info{
		width: 100%;
    padding:10px;
	}
  .user_info .ip_info_item{
    color: white;
  }
  .fals{
    padding-top: 5px;
    padding-left: 5px;
  }
  .pointer{
    cursor: pointer;
  }
  #submitted{
    position: relative;
    left: 10px;
    top: 10px;
  }
  #status{
    width: 100%;
    word-wrap: break-word;
  }
  .overlay {
  background-color: rgba(0,0,0,.5);
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  z-index: 2;
}
.post_area {
  float: right;
  width: 100%;
}
.post_area div {
  width: 500px;
  margin: 20px auto;
  background-color: #fff;
  overflow: hidden;
  padding: 20px;
  border-radius: 3px;
  box-shadow: 1px 1px 1px rgba(0,0,0,.3);
  z-index: 3;
  position: relative;
}
@media(max-width: 600px){
  .post_area div{
    width: 300px;
  }
  .post_area .post_text_area{
    width: 250px;
  }
}
.post_area div img {
  float: left;
  width: 60px;
  height: 60px;
}
.post_area div textarea {
  width: 400px;
  height: 150px;
  border: 0;
  padding: 5px 10px;
  font-family: arial;
  resize: none;
  outline: none;
  border-bottom: 2px solid #0077CC;
}
textarea::-webkit-scrollbar {
  width: 0px;
  background-color: transparent;
}
textarea::-webkit-scrollbar-thumb {
  background-color: #CCC;
  border-radius: 2px
}
.post_area div [type = submit],.post_area .emoji_cont{
  float: right;
  margin: 15px 10px auto auto;
  border: none;
  color: #fff;
  font-weight: bold;
  padding: 10px 15px;
  border-radius: 3px;
  font-size: 16px;
}
.wd100{
  width: 100%!important;
}
.tl{
  text-align: left!important;
}

.right{
  float: right;
}

  .imgs{
    width: 100px;
    height: 100px;
    animation: 3s spin linear infinite;
  }
  @keyframes spin{
   from{
    transform: rotate(0deg);
   }
   to{
    transform: rotate(360deg);
   } 
  }
  @media(max-width: 700px){
    .body_imgs{
      width: 100%;
    }
  }
  .show_left{
      background-color: white;
      position: fixed;
      top: 0;
      left:-300px;
      overflow: auto;
      bottom: 0;
      z-index: 100000;
      opacity: 0;
      width: 300px;
      border-right: 1px solid grey;
      transition: 0.5s;
  }
  .oosh{
    text-align: left;
    cursor: pointer;
  }
  .oosh .text-grey{
    color: grey;
  }
  .nextmkds{
    width: 100%;
    display: block;
  }
  .flexex{
    width: 100%;
    display: flex;
    flex-wrap: wrap;
  }
  .flexex div{
    border-radius: 10px;
  }
  .ofd{
     position: relative;
    width: 70px;
    height: 70px;
    overflow: hidden;
  }
  .ofd img{
    position: absolute;
    top:0;
    left:0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

</style>