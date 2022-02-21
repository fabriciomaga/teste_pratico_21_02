<template>
    
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-x1 text-gray-800 leading-tight">Criar produtos</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">

                <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">
                    <form @submit.prevent="submit" class="mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                            <div class="grid grid-cols-1">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Título</label>
                                <input
                                id="descricao"
                                v-model="form.titulo"
                                class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple"
                            />
                        </div>
                           <div class="grid grid-cols-1">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Descrição</label>
                                <input
                                id="descricao"
                                v-model="form.descricao"
                                class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple"
                            />
                        </div>
                        <div class="grid grid-cols-1">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Tipo</label>
                                <input
                                id="tipo"
                                v-model="form.tipo"
                                class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple"
                            />
                        </div>
                        <div class="grid grid-cols-1">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Avaliação</label>
                                <input
                                id="avaliacao"
                                v-model="form.avaliacao"
                                class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple"
                            />
                        </div>
                        
                        <div class="grid grid-cols-1">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Preço</label>
                                <input
                                id="preco"
                                v-model="form.preco"
                                class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple"
                            />
                        </div>
                </div>

                <div class="flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5">
                    <inertia-link
                        :href="route('produtos.index')"
                        class="w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-x1 font-medium text-white px-4 py-2" type="button">
                        Cancelar
                    </inertia-link>
                    <button
                        type="submit"
                        class="w-auto bg-purple-500 hover:bg-purple-800 rounded-lg shadow-x1 font-medium text-white px-4 py-2">
                        Salvar
                    </button>
                </div>
                    </form>

            </div>
        </div>
    </div>
    </app-layout>

</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
export default {
    components:{
        AppLayout
    },
    props:{      
        errors: Object
    },
    data(){
        return{
            form:{
                descricao:null,
                preco:null
            }
        }
    },
    methods:{
        submit(){
            this.$inertia.post(route('produtos.store'), this.form);
        }
    }
}
</script>