<template>
    <v-navigation-drawer permanent fixed light right class="grey darken-4">
      <v-card class="ma-3" style="margin-top: 100px !important;">
        <v-list dense class="py-0">
            <slot></slot>
        </v-list>
      </v-card>
    </v-navigation-drawer>	
</template>

<script>
  export default {
  }
</script>
