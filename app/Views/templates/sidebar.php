<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column" id="side-bar">
            <link-item 
                v-for="(todo, index) in sections"
                v-bind:section="todo"
            ></link-item>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Summary
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Feedback
                </a>
            </li>
        </ul>
    </div>
</nav>