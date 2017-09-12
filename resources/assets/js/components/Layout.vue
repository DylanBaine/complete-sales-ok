<template>
  <v-app id="example-2" toolbar>
    <v-navigation-drawer
      temporary
      v-model="drawer"
      light
      overflow
      
    >
      <v-list class="pa-1">
          <v-list-tile-content>
            <v-list-tile-title>{{authName}}</v-list-tile-title>
          </v-list-tile-content>
          </v-list-tile-action>
        </v-list-tile>
      </v-list>

      <v-list class="pt-0" dense>
        <v-divider></v-divider>
        <v-list-tile v-for="item in items" :key="item.title" @click="">
          <a :href="item.link" style="
          display: inline-block;
          width: 100%;
          height: 100%;
          ">
            <v-list-tile-content>
              
                <v-list-tile-title>{{ item.title }}</v-list-tile-title>                        
            </v-list-tile-content>
          </a>
        </v-list-tile>
      </v-list>

    </v-navigation-drawer>
    <v-toolbar fixed class="deep-orange" dark
      style="z-index: 999;">
      <v-btn fab @click.stop="drawer = !drawer" class=" blue darken-4"><i class="fa fa-bars"></i></v-btn>
      <v-toolbar-title>Toolbar</v-toolbar-title>
    </v-toolbar>
    <main>
        <slot></slot>
    </main>
    <v-footer class="pa-3">
        <div>© @{{ new Date().getFullYear() }}</div>
    </v-footer>    
  </v-app>
</template>


<script>
  export default {
    props: [
      'authName',
      'menu'
    ],
    data () {
      return {
        drawer: null,
        items:[
          {title: 'See Site', link: '/'},
          {title: 'Home', link: '/home'},
          {title: 'logout', link: '/logout-secure'}
        ],
        right: null
      }
    }
  }
</script>
