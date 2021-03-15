document.addEventListener("DOMContentLoaded", function() {
    let btn_action = document.querySelectorAll(".fa-ellipsis-v");
    let action_box = document.querySelectorAll(".dropdown-menu");

    for (let i = 0; i < btn_action.length; i++) {
        btn_action[i].addEventListener("click", function() {
            for (let i = 0; i < action_box.length; i++) {
                action_box[i].classList.remove("dropdown-menu-show");
            }
            action_box[i].classList.add("dropdown-menu-show");
        });
    }

    let link_backend = document.getElementsByClassName("link_backend");
    // console.log(link_backend);
    for (let i = 0; i < link_backend.length; i++) {
        link_backend[i].addEventListener("click", function() {
            for (let j = 0; j < link_backend.length; j++) {
                link_backend[j].classList.remove("active");
            }
            this.classList.toggle("active");
        });
    }

    let link_list = document.getElementsByClassName("link-list");
    let col_setting = document.querySelectorAll(".col-setting");
    let tab_pane = document.getElementsByClassName('tab-pane');
    for (let i = 0; i < link_list.length; i++) {
        link_list[i].addEventListener("click", function() {
            for (let j = 0; j < link_list.length; j++) {
                link_list[j].classList.remove("active");
            }
            this.classList.toggle("active");

            let link_active = this;
            for (let i = 0; link_active = link_active.previousElementSibling; i++) {}
            for (let j = 0; j < tab_pane.length; j++) {
                tab_pane[j].classList.remove('form-active');
                tab_pane[i].classList.add('form-active');
            }


        });
    }

    let infor = $('div').hasClass('message_notice');
    if (infor) {
        $('.setting-site').removeClass('add-margin');
        $('.close-warning').click(function() {
            $('.setting-site').addClass('add-margin');
        });
    } else {
        $('.setting-site').addClass('add-margin');
    }

    $(document).ready(function() {
        $('#example').DataTable();
    });


});