<template>
    <h1 class="mt-5 mb-4">Lorem ipsum dolor sit amet</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro aperiam
        nemo consequuntur eius fuga, mollitia esse placeat iste vel? Suscipit
        tempore fugiat consectetur ipsum eligendi ea veniam incidunt, ipsa, illo
        animi exercitationem. Veritatis suscipit nisi accusamus quos odit rem
        deleniti eveniet hic magnam, optio ipsa in dignissimos consectetur alias
        harum.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nihil minus
        dignissimos omnis deserunt magnam debitis, officiis officia laborum
        provident. Illo adipisci, consequuntur corrupti saepe tenetur voluptates
        voluptatum modi quae nostrum excepturi dolorem ea doloribus sit totam,
        quaerat esse exercitationem numquam eligendi mollitia ad recusandae
        cumque doloremque optio voluptatem. Error?
    </p>

    <router-link to="/about" class="btn btn-success"
        >Know more about us
    </router-link>
    <div class="row">
        <div class="col-md-8 p-4">
            <div class="reg-form" v-if="showregistrationform">
                <h3>Register yourself</h3>
                <form method="get" action="">
                    <div
                        class="errorinregform"
                        v-if="errorinregform.length > 0"
                    >
                        <ul>
                            <li
                                v-for="(error, index) in errorinregform"
                                :key="index"
                            >
                                {{ error }}
                            </li>
                        </ul>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Name</label>
                        <input
                            v-model="applicantname"
                            id="applicantname"
                            class="form-control"
                            type="text"
                            name="applicantname"
                        />
                    </div>
                    <div class="form-group">
                        <label for="my-input">Email</label>
                        <input
                            v-model="applicantemail"
                            id="applicantemail"
                            class="form-control"
                            type="text"
                            name=""
                        />
                    </div>

                    <div class="form-group">
                        <label for="my-input">Mobile</label>
                        <input
                            v-model="applicantmob"
                            id="applicantmobile"
                            class="form-control"
                            type="text"
                            name=""
                        />
                    </div>
                    <div class="form-group">
                        <label for="my-input">Create password</label>
                        <input
                            v-model="applicantpass"
                            id="applicantpass"
                            class="form-control"
                            type="text"
                            name=""
                        />
                    </div>
                    <div class="p-4">
                        <button
                            type="reset"
                            class="btn btn-danger btn-sm pl-4 pr-4 m-2"
                            style="width: 5rem"
                        >
                            Clear
                        </button>
                        <button
                            class="btn btn-primary btn-sm pl-4 pr-4 m-2"
                            style="width: 5rem"
                            href="#"
                            role="button"
                            v-on:click.prevent="reguser()"
                        >
                            Register
                        </button>

                        <a href="" v-on:click.prevent="changetheform()"
                            >I have already a account . Click here to login</a
                        >
                    </div>
                </form>
            </div>
            <div class="login-form" v-if="!showregistrationform">
                <h2>Login Here</h2>
                <form action="" method="get">
                    <div class="form-group">
                        <label for="my-input">Enter mobile no</label>
                        <input
                            v-model="enno"
                            id="enmobno"
                            class="form-control"
                            type="number"
                            name=""
                        />
                    </div>
                    <div class="form-group">
                        <label for="my-input">Enter Password</label>
                        <input
                            v-model="enpass"
                            id="enpass"
                            class="form-control"
                            type="text"
                            name=""
                        />
                    </div>

                    <div>
                        <button
                            type="reset"
                            class="btn btn-danger btn-sm pl-4 pr-4 m-2"
                        >
                            clear
                        </button>
                        <button
                            type="submit"
                            class="btn btn-primary btn-sm pl-4 pr-4 m-2"
                        >
                            Submit
                        </button>

                        <a href="" v-on:click.prevent="changetheform()"
                            >Dont have a account ? click here to register</a
                        >
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            errorinregform: [],
            applicantname: "",
            applicantemail: "",
            applicantmob: null,
            applicantpass: "",
            showloginform: true,
            showregistrationform: false,
            enno: null,
            enpass: "",
        };
    },
    methods: {
        changetheform() {
            this.showregistrationform = !this.showregistrationform;
        },
        reguser() {
            if (this.applicantname.trim() == "") {
                this.errorinregform.push("Please enter Applicant name");
                //alert("Please enter Applicant name");
            }
            if (this.applicantemail == "") {
                this.errorinregform.push("Please enter Email Address");
            }
            if (this.applicantmob == "") {
                this.errorinregform.push("Please enter Mobile Number");
            }
            if (this.applicantpass == "") {
                this.errorinregform.push("Please enter Password");
            }
        },
    },
};
</script>
<style>
.reg-form {
    padding: 1rem;
    background-color: bisque;
}
.login-form {
    background-color: bisque;
    padding: 1rem;
}
</style>
