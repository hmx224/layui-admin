<div class="layui-body">
    <div style="padding: 15px;">内容主体区域</div>
    <style>
        .demo-carousel {
            height: 200px;
            line-height: 200px;
            text-align: center;
        }
    </style>

    <table class="layui-hide" id="test" lay-filter="demo"></table>

    <div class="layui-tab layui-tab-brief" lay-filter="demo">
        <ul class="layui-tab-title">
            <li class="layui-this">演示说明</li>
            <li>日期</li>
            <li>分页</li>
            <li>上传</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">

                <div class="layui-carousel" id="test1">
                    <div carousel-item>
                        <div><p class="layui-bg-green demo-carousel">在这里，你将以最直观的形式体验 layui！</p></div>
                        <div><p class="layui-bg-red demo-carousel">在编辑器中可以执行 layui 相关的一切代码</p></div>
                        <div><p class="layui-bg-blue demo-carousel">你也可以点击左侧导航针对性地试验我们提供的示例</p></div>
                        <div><p class="layui-bg-orange demo-carousel">如果最左侧的导航的高度超出了你的屏幕</p></div>
                        <div><p class="layui-bg-cyan demo-carousel">你可以将鼠标移入导航区域，然后滑动鼠标滚轮即可</p></div>
                    </div>
                </div>
            </div>
            <div class="layui-tab-item">
                <div id="laydateDemo"></div>
            </div>
            <div class="layui-tab-item">
                <div id="pageDemo"></div>
            </div>
            <div class="layui-tab-item">
                <div class="layui-upload-drag" id="uploadDemo">
                    <i class="layui-icon"></i>
                    <p>点击上传，或将文件拖拽到此处</p>
                </div>
            </div>
        </div>
    </div>

    <blockquote class="layui-elem-quote layui-quote-nm" id="footer">爱狂热博客网站 提供强力驱动</blockquote>


</div>