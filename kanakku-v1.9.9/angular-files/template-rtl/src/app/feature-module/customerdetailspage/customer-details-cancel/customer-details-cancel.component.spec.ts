import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CustomerDetailsCancelComponent } from './customer-details-cancel.component';

describe('CustomerDetailsCancelComponent', () => {
  let component: CustomerDetailsCancelComponent;
  let fixture: ComponentFixture<CustomerDetailsCancelComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CustomerDetailsCancelComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CustomerDetailsCancelComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
