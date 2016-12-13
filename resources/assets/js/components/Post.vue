<template>
    <div class="">
        <table class="table table-striped table-hover table-condensed">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Kategori</th>
                    <th>Video URL</th>
                    <th>Status</th>
                    <th>Last Update</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="p in posts">
                    <td>{{ p.title }}</td>
                    <td>{{ p.type }}</td>
                    <td>{{ p.kategori }}</td>
                    <td>{{ p.video_url }}</td>
                    <td>{{ p.status }}</td>
                    <td>{{ p.created_at }}</td>
                    <td class="text-right">
                        aksi
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="text-center">
            {{ pagination }}
        </div>
    </div>
</template>

<script>

    export default {

        data() {
            return {
                posts: [],
                pagination: ''
            }
        },

        // props() {
        //     return ['posts']
        // },

        methods: {
            fetchPost: function() {
                this.$http.get('/api/post').then(function(d) {
                    this.$set(this, 'posts', d.body.posts.data)
                    this.$set(this, 'pagination', d.body.pagination)
                })
            }
        },

        mounted() {
            this.fetchPost()
        }
    }

</script>
