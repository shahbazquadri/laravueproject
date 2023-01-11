<template>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"
                    ><span class="text-danger bg-warning p-1"
                        ><strong>MY</strong></span
                    ><span class="text-warning bg-primary p-1"
                        ><strong>Web</strong></span
                    ><span class="text-light bg-danger p-1"
                        ><strong>App</strong></span
                    ></a
                >
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarID"
                    aria-controls="navbarID"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarID">
                    <div class="navbar-nav">
                        <router-link
                            aria-current="page"
                            to="/"
                            class="nav-link active text-light btn btn-outline-dark"
                            >Home</router-link
                        >
                        <router-link
                            class="nav-link text-light btn btn-outline-dark"
                            to="/about"
                            >About</router-link
                        >
                        <router-link
                            class="nav-link text-light btn btn-outline-dark"
                            to="/contact"
                            >Contact</router-link
                        >
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="row">
        <div class="col-md-2 sidebar"></div>
        <div class="col-md-10 main-area"><router-view></router-view></div>
    </div>
</template>
