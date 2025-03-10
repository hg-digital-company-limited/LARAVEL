<div>
    <div>

        <head>
            <link class="main-stylesheet" href="/template/public/cute-alert/style.css" rel="stylesheet" type="text/css">
            <script src="/template/public/cute-alert/cute-alert.js"></script>
            <script src="/template/public/js/jquery-3.6.0.js"></script>
            <script src="/template/public/themesbrand/js/layout.js"></script>
            <link href="/template/public/themesbrand/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="/template/public/themesbrand/css/icons.min.css" rel="stylesheet" type="text/css" />
            <link href="/template/public/themesbrand/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet"
                type="text/css" />
            <link href="/template/public/themesbrand/css/app.min.css" rel="stylesheet" type="text/css" />
            <link href="/template/public/themesbrand/css/custom.min.css" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
                integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link
                href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500&family=Roboto+Condensed&display=swap"
                rel="stylesheet">
            <link rel="stylesheet"
                href="/template/public/AdminLTE3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet"
                href="/template/public/AdminLTE3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
            <link rel="stylesheet"
                href="/template/public/AdminLTE3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        </head>
        <style>
            html,
            body {
                cursor: url("https://ecaptcha.sieuthicode.net/assets/img/mouse.png"), progress;
            }

            a:hover {
                cursor: url("https://ecaptcha.sieuthicode.net/assets/img/mouse1.png"), progress;
            }

            .btn:hover {
                cursor: url("https://ecaptcha.sieuthicode.net/assets/img/mouse1.png"), progress;
            }

            body {
                font-family: 'Oswald', sans-serif;
            }

            .ribbon-box .ribbon-primary {
                background: #15171A;
            }

            .ribbon-box .ribbon-primary.ribbon-shape::after {
                border-left-color: #15171A;
                border-bottom-color: #15171A;
            }

            .ribbon-box .ribbon-primary.ribbon-shape::before {
                border-left-color: #15171A;
                border-top-color: #15171A;
            }

            [data-layout=vertical][data-sidebar=dark] .navbar-menu {
                background: linear-gradient(#15171A, #15171A, #10101F);
                border-right: #15171A;
            }

            [data-layout=vertical][data-sidebar=dark] .navbar-nav .nav-link {
                color: #dfdfdf;
            }

            [data-layout=vertical][data-sidebar=dark] .menu-title {
                color: #838fb9;
            }

            [data-layout=vertical][data-sidebar=dark] .navbar-nav .nav-sm .nav-link {
                color: #c0c0c0;
            }

            [data-topbar=dark] #page-topbar {
                background-color: linear-gradient(#15171A, #15171A, #10101F);
                border-color: #15171A;
            }

            .navbar-menu .navbar-nav .nav-link {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                padding: 0.625rem 1.5rem;
                color: var(--vz-vertical-menu-item-color);
                font-size: 16px;
                font-family: 'Oswald', sans-serif;
            }

            .navbar-menu .navbar-nav .nav-sm .nav-link {
                padding: 0.55rem 1.5rem !important;
                color: var(--vz-vertical-menu-sub-item-color);
                white-space: pre-line;
                position: relative;
                font-size: .813rem;
                font-family: 'Oswald', sans-serif;
            }

            .menu-icon {
                font-size: 16px;
                line-height: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 28px;
                transition: transform 0.5s;
                margin-right: 10px;
                color: #6d8bb0;
            }
        </style>

        <body>
            <div id="layout-wrapper">
                @livewire('inc.header')
                <div class="app-menu navbar-menu">
                    @livewire('inc.sidebar')
                </div>
                <div class="vertical-overlay"></div>
                <div class="main-content">
                    <div class="page-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card ribbon-box">
                                        <div class="card-body">
                                            <div class="mb-5">
                                                    <div class="ribbon ribbon-primary ribbon-shape ">VPS
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <label for="codeMirrorDemo" class="form-label">Lệnh SSH VPS</label>
                                                    <div>
                                                        <pre class="form-control">
61.14.233.135
D6ORhuMejt
ssh -p 2018 root@61.14.233.135

61.14.233.25
6IJRZbC99z
ssh -p 2018 root@61.14.233.25
                                                        </pre>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card ribbon-box">
                                        <div class="card-body">
                                            <div class="mb-5">
                                                    <div class="ribbon ribbon-primary ribbon-shape ">DEPLOY LARAVEL
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <label for="codeMirrorDemo" class="form-label">Mẫu file deploy.sh</label>
                                                    <div>
<pre class="form-control">
    #!/bin/bash

    # Đường dẫn thư mục dự án
    PROJECT_DIR="/var/www/giangtran.com.vn"
    GIT_REPO="https://github.com/hg-digital-company-limited/LARAVEL.git"
    SQL_FILE="${PROJECT_DIR}/laravel.sql"
    DB_NAME="laravel"
    DB_USER="laravel"
    DB_PASSWORD="laravel"  # Thay đổi mật khẩu nếu cần

    # Xóa thư mục dự án
    sudo rm -rf ${PROJECT_DIR}/*
    sudo rm -rf ${PROJECT_DIR}/.[^.]*

    # Clone lại repo
    sudo git clone $GIT_REPO $PROJECT_DIR

    # Xóa và tạo lại database
    sudo mysql -e "\
    DROP DATABASE IF EXISTS $DB_NAME;\
    CREATE DATABASE $DB_NAME;\
    CREATE USER IF NOT EXISTS '$DB_USER'@'localhost' IDENTIFIED BY '$DB_PASSWORD';\
    GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'localhost';\
    FLUSH PRIVILEGES;"

    # Nhập dữ liệu từ file SQL
    if [ -f "$SQL_FILE" ]; then
        sudo mysql -u $DB_USER -p$DB_PASSWORD $DB_NAME < $SQL_FILE
    else
        echo "File SQL không tồn tại: $SQL_FILE"
        exit 1
    fi

    # Cài đặt các gói Composer
    cd $PROJECT_DIR
    sudo composer install

    # Sao chép tệp .env
    if [ -f ".env.production" ]; then
        sudo cp .env.production .env
    else
        echo "File .env.production không tồn tại."
        exit 1
    fi

    # Phân quyền thư mục
    sudo chown -R www-data.www-data $PROJECT_DIR/storage
    sudo chown -R www-data.www-data $PROJECT_DIR/bootstrap/cache
    # Tạo symbolic link cho storage
    sudo php artisan storage:link

    echo "Triển khai hoàn tất."

</pre>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card ribbon-box">
                                        <div class="card-body">
                                            <div class="mb-5">
                                                    <div class="ribbon ribbon-primary ribbon-shape ">DEPLOY LARAVEL
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <label for="codeMirrorDemo" class="form-label">Mẫu file cấu hình nginx</label>
                                                    <div>
<pre class="form-control">
    server {
        listen 80;
        server_name server_domain_or_IP;
        root /var/www/travellist/public;

        add_header X-Frame-Options "SAMEORIGIN";
        add_header X-XSS-Protection "1; mode=block";
        add_header X-Content-Type-Options "nosniff";

        index index.html index.htm index.php;

        charset utf-8;

        location / {
            try_files $uri $uri/ /index.php?$query_string;
        }

        location = /favicon.ico { access_log off; log_not_found off; }
        location = /robots.txt  { access_log off; log_not_found off; }

        error_page 404 /index.php;

        location ~ \.php$ {
            fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
            fastcgi_index index.php;
            fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
            include fastcgi_params;
        }

        location ~ /\.(?!well-known).* {
            deny all;
        }
    }
                                                        </pre>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @livewire('inc.footer')

                        </div>
                    </div>

                    <script src="/template/public/themesbrand/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="/template/public/themesbrand/libs/simplebar/simplebar.min.js"></script>
                    <script src="/template/public/themesbrand/libs/node-waves/waves.min.js"></script>
                    <script src="/template/public/themesbrand/libs/feather-icons/feather.min.js"></script>
                    <script src="/template/public/themesbrand/js/pages/plugins/lord-icon-2.1.0.js"></script>
                    <script src="/template/public/themesbrand/js/plugins.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/datatables/jquery.dataTables.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/jszip/jszip.min.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/pdfmake/pdfmake.min.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/pdfmake/vfs_fonts.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-buttons/js/buttons.print.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
                    <link rel="stylesheet" href="/template/public/AdminLTE3/plugins/codemirror/codemirror.css">
                    <link rel="stylesheet" href="/template/public/AdminLTE3/plugins/codemirror/theme/monokai.css">
                    <script src="/template/public/themesbrand/libs/sweetalert2/sweetalert2.min.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/codemirror/codemirror.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/codemirror/mode/css/css.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/codemirror/mode/xml/xml.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
                    <script src="/template/public/themesbrand/js/app.js"></script>
                    <script
                        type="text/javascript">CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), { mode: "htmlmixed", theme: "monokai" }); CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo1"), { mode: "htmlmixed", theme: "monokai" }); CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo2"), { mode: "htmlmixed", theme: "monokai" }); CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo3"), { mode: "htmlmixed", theme: "monokai" }); CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo4"), { mode: "htmlmixed", theme: "monokai" }); CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo5"), { mode: "htmlmixed", theme: "monokai" }); new ClipboardJS(".copy"); function copy() { cuteToast({ type: "success", message: "Đã sao chép vào bộ nhớ tạm", timer: 5000 }); }</script>
        </body>

    </div>

</div>
