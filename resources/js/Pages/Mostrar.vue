<template>
    <app-layout>
        <template #header>
        <h1 class="text-center text-7x1 font-bold leading-7 text-gray-300 sm:text-7x1 sm:truncate py-4 bg-gradient-to-1">Mostrar os produtos</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">
                    
                    
                     <!-- Formulário para envio de arquivos -->         
                    <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">
                        
                        <form action="{{ route('produtos.store') }}" method="post" enctype="multipart/form-data">
                            
                            <input type="file" name="filejson">
                            <button type="submit">Enviar</button>

                        </form>                

                    </div>
                    <!-- FIM do Formulário para envio de arquivos --> 

                    <table class="rounded-t-lg mt-5 min-w-full mx-auto bg-gray-800 text-gray-100">
                        <thead>
                            <tr class="text-left border-b border-gray-300">
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Título</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Descrição</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Tipo</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Avaliação</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Preço</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Criado</th>                                
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">Ações</th>
                                
                            </tr>

                        </thead>
                        <tbody class="bg-gray-700 border-b border-gray-600 text-gray-200">
                            <tr v-for="produto in produtos" :key="produto.id">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium">{{ produto.titulo }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium">{{ produto.descricao }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium">{{ produto.tipo }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-2">
                                            <div class="text-sm font-medium">{{ produto.avaliacao }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-2 whitespace-nowrap">                                    
                                    <div class="text-sm"><span></span>{{ produto.preco }}</div>                                        
                                </td>
                                <td class="px-4 py-1 whitespace-nowrap">                                    
                                    <div class="text-sm"><span></span>{{ produto.created_at }}</div>                                        
                                </td>
                                <td class="flex m-4 text-center">
                                    <inertia-link
                                    :href="route('produtos.edit', produto.id)"
                                    class="flex-shirink-0 bg-purple-600 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-purple-700" type="button">
                                    Editar
                                    </inertia-link>
                                    <inertia-link
                                    method="delete"
                                    :href="route('produtos.destroy', produto.id)"
                                    class="flex-shirink-0 bg-purple-600 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-purple-700" type="button">
                                    Apagar
                                    </inertia-link>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Input from '../Jetstream/Input.vue';
import Button from '../Jetstream/Button.vue';
export default {
    props:{
        produtos: Array
    },
    components:{
        AppLayout        
    },
 
 

    
};

</script>