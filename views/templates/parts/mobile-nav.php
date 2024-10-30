<div class="betterdocs-mobile-nav">
    <?php if ( isset( $mobile_sidebar ) && $mobile_sidebar ) { ?>
        <div class="betterdocs-sidebar-icon">
            <div class="betterdocs-mobile-nav-icon-svg">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_9547_18965" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                    <rect width="20" height="20" fill="#D9D9D9"/>
                    </mask>
                    <g mask="url(#mask0_9547_18965)">
                    <path d="M6.66667 14.1667C6.90278 14.1667 7.10069 14.0868 7.26042 13.9271C7.42014 13.7674 7.5 13.5694 7.5 13.3333C7.5 13.0972 7.42014 12.8993 7.26042 12.7396C7.10069 12.5799 6.90278 12.5 6.66667 12.5C6.43056 12.5 6.23264 12.5799 6.07292 12.7396C5.91319 12.8993 5.83333 13.0972 5.83333 13.3333C5.83333 13.5694 5.91319 13.7674 6.07292 13.9271C6.23264 14.0868 6.43056 14.1667 6.66667 14.1667ZM6.66667 10.8333C6.90278 10.8333 7.10069 10.7535 7.26042 10.5938C7.42014 10.434 7.5 10.2361 7.5 10C7.5 9.76389 7.42014 9.56597 7.26042 9.40625C7.10069 9.24653 6.90278 9.16667 6.66667 9.16667C6.43056 9.16667 6.23264 9.24653 6.07292 9.40625C5.91319 9.56597 5.83333 9.76389 5.83333 10C5.83333 10.2361 5.91319 10.434 6.07292 10.5938C6.23264 10.7535 6.43056 10.8333 6.66667 10.8333ZM6.66667 7.5C6.90278 7.5 7.10069 7.42014 7.26042 7.26042C7.42014 7.10069 7.5 6.90278 7.5 6.66667C7.5 6.43056 7.42014 6.23264 7.26042 6.07292C7.10069 5.91319 6.90278 5.83333 6.66667 5.83333C6.43056 5.83333 6.23264 5.91319 6.07292 6.07292C5.91319 6.23264 5.83333 6.43056 5.83333 6.66667C5.83333 6.90278 5.91319 7.10069 6.07292 7.26042C6.23264 7.42014 6.43056 7.5 6.66667 7.5ZM10 14.1667H13.3333C13.5694 14.1667 13.7674 14.0868 13.9271 13.9271C14.0868 13.7674 14.1667 13.5694 14.1667 13.3333C14.1667 13.0972 14.0868 12.8993 13.9271 12.7396C13.7674 12.5799 13.5694 12.5 13.3333 12.5H10C9.76389 12.5 9.56597 12.5799 9.40625 12.7396C9.24653 12.8993 9.16667 13.0972 9.16667 13.3333C9.16667 13.5694 9.24653 13.7674 9.40625 13.9271C9.56597 14.0868 9.76389 14.1667 10 14.1667ZM10 10.8333H13.3333C13.5694 10.8333 13.7674 10.7535 13.9271 10.5938C14.0868 10.434 14.1667 10.2361 14.1667 10C14.1667 9.76389 14.0868 9.56597 13.9271 9.40625C13.7674 9.24653 13.5694 9.16667 13.3333 9.16667H10C9.76389 9.16667 9.56597 9.24653 9.40625 9.40625C9.24653 9.56597 9.16667 9.76389 9.16667 10C9.16667 10.2361 9.24653 10.434 9.40625 10.5938C9.56597 10.7535 9.76389 10.8333 10 10.8333ZM10 7.5H13.3333C13.5694 7.5 13.7674 7.42014 13.9271 7.26042C14.0868 7.10069 14.1667 6.90278 14.1667 6.66667C14.1667 6.43056 14.0868 6.23264 13.9271 6.07292C13.7674 5.91319 13.5694 5.83333 13.3333 5.83333H10C9.76389 5.83333 9.56597 5.91319 9.40625 6.07292C9.24653 6.23264 9.16667 6.43056 9.16667 6.66667C9.16667 6.90278 9.24653 7.10069 9.40625 7.26042C9.56597 7.42014 9.76389 7.5 10 7.5ZM4.16667 17.5C3.70833 17.5 3.31597 17.3368 2.98958 17.0104C2.66319 16.684 2.5 16.2917 2.5 15.8333V4.16667C2.5 3.70833 2.66319 3.31597 2.98958 2.98958C3.31597 2.66319 3.70833 2.5 4.16667 2.5H15.8333C16.2917 2.5 16.684 2.66319 17.0104 2.98958C17.3368 3.31597 17.5 3.70833 17.5 4.16667V15.8333C17.5 16.2917 17.3368 16.684 17.0104 17.0104C16.684 17.3368 16.2917 17.5 15.8333 17.5H4.16667ZM4.16667 15.8333H15.8333V4.16667H4.16667V15.8333Z" fill="#475467"/>
                    </g>
                </svg>
            </div>
            <span><?php echo esc_html__('View Categories','beterdocs') ?></span>
        </div>
        <?php } if ( isset( $mobile_toc ) && $mobile_toc ) { ?>
        <div class="betterdocs-toc-icon">
            <div class="betterdocs-mobile-nav-icon-svg">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_9385_30493" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="21">
                    <rect y="0.5" width="20" height="20" fill="#D9D9D9"/>
                    </mask>
                    <g mask="url(#mask0_9385_30493)">
                    <path d="M2.5 15.5V13.8333H13.3333V15.5H2.5ZM16.3333 14.6667L12.1667 10.5L16.3333 6.33333L17.5 7.5L14.5 10.5L17.5 13.5L16.3333 14.6667ZM2.5 11.3333V9.66667H10.8333V11.3333H2.5ZM2.5 7.16667V5.5H13.3333V7.16667H2.5Z" fill="#475467"/>
                    </g>
                </svg>
            </div>
        </div>
    <?php } ?>
</div>