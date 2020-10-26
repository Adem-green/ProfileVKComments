<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['page']['title']; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<div class="container-fluid background-container">
    <div class="row">
        <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12">
            <div class="background row"
                 style="background-image: url(<?php echo $data['page']['cover']; ?>);"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="profile-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 hidden-xs hidden-sm">
                        <div class="profile-info" style="background-color: #06A763;" data-element="profile-header">
                            <div class="profile-title">
                                <h4 class="title-text-1"><?php echo $data['user']['first_name']; ?><?php echo $data['user']['last_name']; ?></h4>
                                <p class="title-text-2"><?php echo $data['user']['position']; ?></p>
                            </div>
                            <div class="about-text">
                                <p><?php echo $data['user']['about']; ?></p>
                            </div>
                            <div class="profile-icon__container">
                                <button class="profile-icon__item profile-icon__item-1" data-element="button-background"
                                        style="background-color: #3f51b5;"></button>
                                <button class="profile-icon__item profile-icon__item-2" data-element="button-background"
                                        style="background-color: #2196f3;"></button>
                                <button class="profile-icon__item profile-icon__item-3" data-element="button-background"
                                        style="background-color: #f44336;"></button>
                                <button class="profile-icon__item profile-icon__item-4" data-element="button-background"
                                        style="background-color: #06a763;"></button>
                                <button class="profile-icon__item profile-icon__item-5" data-element="button-background"
                                        style="background-color: #ef6c00;"></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hidden-xs hidden-sm">
                        <div class="profile-avatar"
                             style="background-image: url(<?php echo $data['user']['avatar']; ?>);"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hidden-md hidden-lg">
                        <div class="profile-avatar"
                             style="background-image: url(<?php echo $data['user']['avatar']; ?>);"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 hidden-md hidden-lg">
                        <div class="profile-info" style="background-color: #06A763;" data-element="profile-header">
                            <div class="profile-title">
                                <h4 class="title-text-1"><?php echo $data['user']['first_name']; ?><?php echo $data['user']['last_name']; ?></h4>
                                <p class="title-text-2"><?php echo $data['user']['position']; ?></p>
                            </div>
                            <div class="about-text">
                                <p><?php echo $data['user']['about']; ?></p>
                            </div>
                            <div class="profile-icon__container">
                                <button class="profile-icon__item profile-icon__item-1" data-element="button-background"
                                        style="background-color: #3f51b5;"></button>
                                <button class="profile-icon__item profile-icon__item-2" data-element="button-background"
                                        style="background-color: #2196f3;"></button>
                                <button class="profile-icon__item profile-icon__item-3" data-element="button-background"
                                        style="background-color: #f44336;"></button>
                                <button class="profile-icon__item profile-icon__item-4" data-element="button-background"
                                        style="background-color: #06a763;"></button>
                                <button class="profile-icon__item profile-icon__item-5" data-element="button-background"
                                        style="background-color: #ef6c00;"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="comments-form">
                <div class="comments-form__header">
                    <div class="comments-form__header-title">
                        <?php echo $data['page']['comment_block_title']; ?>
                    </div>
                    <div class="comments-form__header-logo"></div>
                </div>
                <div class="comments-form__content">
                    <form action="comment.php" method="get">
                        <div class="comments-form__content-avatar-40"
                             style="background-image: url(<?php echo $data['user']['avatar']; ?>);"></div>
                        <label class="comments-form__content-text-box">
                            <textarea class="comments-form__content-text-box-area" data-target="#vk-auth"
                                      data-toggle="modal" name="comment"
                                      placeholder="<?php echo $data['page']['comment_text_placeholder']; ?>"></textarea>
                        </label>
                        <button class="button comments-form__content-button-send-comment"><?php echo $data['page']['comment_btn_caption']; ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="comments-list">
                <?php
                foreach ($data['comments'] as $key => $value){
                    echo '<div class="comments-list__item">';
                    echo '<div class="comments-list__item-avatar-40" style="background-image: url(' . $data ['comments'][$key]['avatar'] . ');"> </div>';
                    echo '<div class=" comments-list__item-user-name">' . $data ['comments'][$key]['first_name'] . $data ['comments'][$key]['last_name'] . '</div>';
                    echo '<div class="comments-list__item-user-comment">' . $data ['comments'][$key]['comment'] . '</div>';
                    echo '<div class="comments-list__item-user-comment-date">' . $data ['comments'][$key]['string_date'] . '</div>';
                    echo '</div>';
                };
                ?>
            </div>
        </div>
    </div>
</div>

<!--MODAL-VK-AUTH-->
<div class="modal fade" id="vk-auth" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vk" role="document">
        <div class="modal-content modal-content-vk">
            <form action="auth.php" method="get">
                <div class="modal-header modal-header-vk">
                    <div class="vk-auth-header">
                        <div class="vk-auth-header-logo"></div>
                        <button type="button" class="close close-vk" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <h5 class="modal-title modal-title-vk"
                        id="exampleModalLabel"><?php echo $data['page']['auth_subtitle']; ?>
                        <span class="bold-title-vk"><?php echo $data['page']['auth_subtitle_2']; ?></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="vk-auth-body">
                        <div class="text-login"><?php echo $data['page']['auth_login_caption']; ?></div>
                        <input type="text" class="vk-login" name="login" id="vk-auth-email">
                        <div class="text-password"><?php echo $data['page']['auth_password_caption']; ?></div>
                        <input type="password" class="vk-password" name="pass" id="vk-auth-password">
                        <input type="submit" class="vk-submit"
                               value="<?php echo $data['page']['auth_btn_caption']; ?>"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
