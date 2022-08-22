<template>
    <Suspense>
        <template #default>
            <single-shop></single-shop>
        </template>
        <template #fallback>
            <single-shop-skeleton></single-shop-skeleton>
        </template>
    </Suspense>
</template>
<script>
import SingleShop from './comps/SingleShop.vue'
import SingleShopSkeleton from './comps/skeleton/SingleShopSkeleton.vue'

export default {
    name: 'ShopPage',
    components: {
        SingleShop,
        SingleShopSkeleton,
    }
    
    
}
</script>