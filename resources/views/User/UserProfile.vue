<template>
  <div>
    <base-header type="gradient-success" class="pb-6 pb-8 pt-5 pt-md-8">
    </base-header>

    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-6 order-xl-1">
          <div>
            <user-edit-card :user="user" />
          </div>
          <div class="mt-5">
            <user-password-card :user="user" />
          </div>
        </div>
        <div class="col-xl-6 order-xl-2">
          <user-card />
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import UserEditCard from "@/views/User/UserProfile/UserEditCard.vue";
import UserPasswordCard from "@/views/User/UserProfile/UserPasswordCard.vue";
import UserCard from "@/views/User/UserProfile/UserCard.vue";

export default {
  layout: "DashboardLayout",

  components: {
    UserEditCard,
    UserPasswordCard,
    UserCard,
  },

  data() {
    return {
      user: {
        type: "profile",
        name: null,
        email: null,
        profile_image: null,
      },
    };
  },
  created() {
   
  },

  methods: {
  },
};
</script>
