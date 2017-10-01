!-->
<div class="met_article">
    <div class="met_clear"></div>
    <div id="feedback">
        <form enctype="multipart/form-data" method="POST" class="ui-from" name="myform" action="index.php?action=add">
            <div class="v52fmbx">
                <input type="hidden" name="lang" value="cn">
                <input type="hidden" name="fdtitle" value="在线反馈">
                <input type="hidden" name="ip" value="127.0.0.1">
                <input type="hidden" name="id" value="31">
                <input type="hidden" name="fid_url" value="0">
                <h3 class="v52fmbx_hr">用户注册</h3>
                <dl>
                    <dt class="ftype_select">姓名</dt>
                    <dd class="ftype_input">
                        <div class="fbox">
                            <input name="regusername" type="text" required="1" placeholder="请输入真实姓名">
                        </div>
                        <span class="tips"></span>
                    </dd>
                </dl>

                <dl>
                    <dt class="ftype_select">手机号</dt>
                    <dd class="ftype_input">
                        <div class="fbox">
                            <input name="regmobile" type="text" required="1" placeholder="请输入手机号">
                        </div>
                        <span class="tips"></span>
                    </dd>
                </dl>
                <dl>
                    <dt class="ftype_select">手机验证码</dt>
                    <dd class="ftype_input">
                        <div class="fbox">
                            <input name="regphonecode" type="text" required="1" placeholder="请输入手机验证码">
                        </div>
                        <span class="tips"></span>
                    </dd>
                </dl>
                <dl>
                    <dt class="ftype_select">验证码</dt>
                    <dd class="ftype_input ftype_code">
                        <div class="fbox">
                            <input name="code" required="1" type="text"><img align="absbottom" src="..//member/ajax.php?action=code" onclick="this.src = '../member/ajax.php?action=code&amp;' + Math.random()" alt="看不清？点击更换验证码'/">
                        </div>
                        <span class="tips"></span>
                    </dd>
                </dl>

                <dl class="noborder">
                    <dt>&nbsp;</dt>
                    <dd>
                        <input type="submit" name="submit" value="提交信息" class="submit">
                    </dd>
                </dl>
            </div>
        </form>
        <!--</div>-->
        <!--</div>-->
        <div class="clear"></div>
    </div>
</div>