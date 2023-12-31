import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { PrimeNgComponent } from './prime-ng.component';

const routes: Routes = [{ path: '', component: PrimeNgComponent }];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class PrimeNgRoutingModule { }
