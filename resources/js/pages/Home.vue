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

    <div class="collapse py-2" id="collapseTarget">
        This is the toggle-able content! Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Eius officia ducimus earum sequi et quidem atque id ea
        tempora explicabo aspernatur sunt necessitatibus veritatis hic, quas
        voluptates fugiat tempore eum mollitia dicta omnis ex? Eos eum
        molestiae, officia delectus eius iste unde, inventore quam modi nobis,
        accusantium corrupti sint necessitatibus. Dolor error voluptas pariatur
        in unde molestiae eaque aut animi eos quibusdam beatae esse eum a, natus
        quos sit earum quaerat! Ab laudantium quaerat consequuntur ipsum cum
        harum. Tempore provident dolor dolore beatae praesentium recusandae
        facilis? Sit odio animi id vitae exercitationem! Voluptate reprehenderit
        aut dolores. Obcaecati, illo suscipit optio aliquid accusamus totam quo
        temporibus voluptatum corporis placeat error ratione, non facere? Sint
        eius iusto libero atque quia id cum consectetur labore tempora tenetur
        laudantium quas reprehenderit, aperiam culpa soluta recusandae rerum, ea
        nesciunt aliquid delectus. Consequatur architecto odit iure est commodi
        assumenda sapiente perspiciatis placeat sunt provident aperiam nostrum
        eos praesentium accusamus, odio magni magnam repellat ea necessitatibus
        sequi quis soluta tempore? Accusantium, nostrum et! Animi consequatur
        minus alias deserunt nesciunt rem! Laboriosam, animi. Tempora similique
        temporibus quos atque, doloremque officia facilis at quaerat fugiat.
        Iure, cumque itaque. Consequuntur sunt itaque, amet repudiandae pariatur
        eos recusandae dolorum, modi vero delectus corporis error, praesentium
        aperiam adipisci perferendis aspernatur. Neque temporibus culpa ratione
        natus optio. Culpa molestiae officiis inventore beatae eaque distinctio
        quibusdam iste quam accusantium! Vitae recusandae amet libero error? Hic
        possimus tempore praesentium ipsum delectus totam architecto quis
        eveniet harum labore! Perspiciatis eos inventore ex eaque error. Dolore
        repellendus provident, doloremque error laboriosam et neque praesentium
        perferendis. Iste blanditiis distinctio cumque dolore. Voluptatibus
        quibusdam enim unde dignissimos, consequuntur nobis corporis dolor!
        Illum, laudantium iste. Voluptates, ex? Perspiciatis nisi repellat sed
        autem expedita nam, eveniet, corrupti exercitationem ipsam molestias
        similique facere? Cum hic, odit dolore atque quo ducimus nobis? Quaerat
        ad dicta, adipisci in odio dolorum voluptate. Saepe dignissimos quo
        corrupti laborum, animi delectus, deleniti sunt dicta reiciendis odio
        consequatur nesciunt fugiat facilis magnam sit deserunt quae earum! Iure
        velit, ut libero aperiam quos delectus minima culpa perferendis
        perspiciatis nam. Nemo vero ratione eos nostrum vel molestiae explicabo
        voluptatum consectetur dignissimos dolores veritatis ad impedit amet
        facilis fuga cum similique, aliquid et, repellat nulla mollitia nesciunt
        magnam modi! Sapiente sed mollitia quis culpa, ullam excepturi obcaecati
        soluta velit recusandae provident vel, dolorum in. Quod repellat dolorum
        corporis perferendis! Velit quod itaque eum quae reiciendis quasi illo
        quam, cupiditate autem maiores. Voluptatum, exercitationem. Sit dolore
        facilis odit distinctio veniam quis sed temporibus illo praesentium?
        Asperiores eius iste obcaecati quis numquam aliquam magnam eum natus.
        Doloremque, minima rerum! Fuga reprehenderit pariatur ipsa, iure est
        obcaecati molestias, molestiae culpa, et quae reiciendis ducimus nisi
        nesciunt veniam cum corporis. Laborum, adipisci. Voluptatum, doloribus.
        Ratione, quasi aperiam voluptatum eum harum deserunt natus quos sed
        reprehenderit, at fugit id nam temporibus quibusdam voluptas vel veniam
        neque rem autem? Ducimus minima natus sunt repellat cumque? At maiores
        alias ratione adipisci inventore et numquam expedita, necessitatibus
        suscipit quod eum, error officia dignissimos? Obcaecati provident
        doloribus ea illum alias.
    </div>
    <button
        class="btn btn-primary mr-5"
        data-bs-target="#collapseTarget"
        data-bs-toggle="collapse"
    >
        Show More
    </button>
    &nbsp;&nbsp;&nbsp;&nbsp;

    <router-link to="/about" class="btn btn-success">About us </router-link>
    <div class="row">
        <div class="col-md-8 p-4">
            <div class="reg-form" v-if="showregistrationform">
                <h3>Register yourself</h3>
                <div
                    class="alert alert-warning alert-dismissible fade show"
                    role="alert"
                    v-if="message"
                    v-on:click="removemsg"
                >
                    <strong>{{ message }}! </strong>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>
                </div>
                <form method="get" action="">
                    <span class="bg-warning" v-if="errorinform.length > 0">{{
                        "Total Error" + errorinform.length
                    }}</span>
                    <div class="errorinform" v-if="errorinform.length > 0">
                        <ul>
                            <li
                                class="bg-danger text-light m-2"
                                v-for="(error, index) in errorinform"
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
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="my-input">Email</label>
                        <input
                            v-model="applicantemail"
                            id="applicantemail"
                            class="form-control"
                            type="email"
                            name=""
                            required
                        />
                    </div>

                    <div class="form-group">
                        <label for="my-input">Mobile</label>
                        <input
                            v-model="applicantmob"
                            id="applicantmobile"
                            class="form-control maxlength10"
                            type="text"
                            name=""
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="my-input">Create password</label>
                        <input
                            v-model="applicantpass"
                            id="applicantpass"
                            class="form-control"
                            type="password"
                            name=""
                        />
                    </div>

                    <div class="np-captcha-container">
                        <div
                            class="np-captcha"
                            v-if="captcha && captcha.length"
                        >
                            <div
                                v-for="(c, i) in captcha"
                                :key="i"
                                :style="{
                                    fontSize: getFontSize() + 'px',
                                    fontWeight: 800,
                                    transform:
                                        'rotate(' + getRotationAngle() + 'deg)',
                                }"
                                class="np-captcha-character"
                            >
                                {{ c }}
                            </div>
                        </div>
                    </div>

                    <button @click.prevent="createCaptcha" class="np-button">
                        Generate new
                    </button>
                    <div class="form-group">
                        <label for="my-input">Enter Captcha</label>
                        <input
                            v-model="enteredCatpcha"
                            id="enteredCatpcha"
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
            errorinform: [],
            applicantname: "",
            applicantemail: "",
            applicantmob: "",
            applicantpass: "",
            showloginform: true,
            showregistrationform: false,
            enno: null,
            enpass: "",
            message: "",
            captchaLength: 5,
            captcha: [],
            enteredCatpcha: "",
        };
    },
    mounted() {
        this.createCaptcha();
    },
    methods: {
        changetheform() {
            this.showregistrationform = !this.showregistrationform;
        },
        reguser() {
            this.errorinform = [];
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            if (this.applicantname.trim() == "") {
                this.errorinform.push("Please enter Applicant name");
                // alert("Please enter Applicant name");
            }
            if (this.applicantemail.trim() == "") {
                this.errorinform.push("Please enter Email Address");
            }
            if (this.applicantmob.trim() == "") {
                this.errorinform.push("Please enter Mobile Number");
            }
            if (this.applicantpass.trim() == "") {
                this.errorinform.push("Please enter Password");
            }
            if (!this.applicantemail.match(mailformat)) {
                //alert("You have entered an invalid email address!");
                this.errorinform.push(
                    "You have entered an invalid email address!"
                );
            }

            var enteredCaptchaValue = this.enteredCatpcha
                .replace(/.{1}/g, "$&,")
                .slice(0, -1);

            if (this.captcha != enteredCaptchaValue) {
                this.errorinform.push(
                    "You have entered an invalid captcha Code!"
                );
            }

            if (this.errorinform.length == 0) {
                const reqOptions = {
                    method: "POST",
                    header: { "content-type": "application/json" },

                    body: JSON.stringify({
                        name: this.applicantname,
                        email: this.applicantemail,
                        mob: this.applicantmob,
                        pass: this.applicantpass,
                    }),
                };
                fetch("http://127.0.0.1:8000/api/addnewuser", reqOptions)
                    .then((response) => response.json())
                    .then((data) => {
                        console.log(data.status);
                        console.log(data.message);
                        this.message = "";
                        this.message = data.message;
                    });
            }
        },
        removemsg() {
            this.message = "";
        },
        createCaptcha() {
            let tempCaptcha = "";
            for (let i = 0; i < this.captchaLength; i++) {
                tempCaptcha += this.getRandomCharacter();
            }
            this.captcha = tempCaptcha.split("");
        },
        getRandomCharacter() {
            const symbols = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@$%#";
            const randomNumber = Math.floor(Math.random() * 39);
            return symbols[randomNumber];
        },
        getFontSize() {
            const fontVariations = [40, 40, 40, 40, 40];
            return fontVariations[Math.floor(Math.random() * 5)];
        },
        getRotationAngle() {
            const rotationVariations = [5, 5, 5, 5, 5, 5, 5, 5];
            return rotationVariations[Math.floor(Math.random() * 8)];
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
